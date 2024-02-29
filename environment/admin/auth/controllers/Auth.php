<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller
{
    private $username, $password, $scrty;
    private $data = array();

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if ($this->session->has_userdata(AS_SESSION)) {
            redirect(baseUri(MODAD . 'dashboard'));
        } else {
            redirect(baseUri(MODAD . 'auth/login'));
        }
    }

    public function login()
    {
        if ($this->session->has_userdata(AS_SESSION)) {
            redirect(baseUri(MODAD . 'dashboard'));
        }

        // if (!getStatusHeader(404)) {
        $view['title'] = getLangKey('title');
        loadTemplate('v_auth_single', $view);
        // }
    }

    function contains($needle, $haystack)
    {
        return strpos($haystack, $needle) !== false;
    }

    public function authorize()
    {
        $this->scrty = $this->input->post('scrty', true);
        $this->username = $this->input->post('username', true);
        $this->password = $this->input->post('password', true);
        $remember       = $this->input->post('remember', true);
        $captcha = $this->input->post('captcha', true);

        if (!empty($_SESSION['captcha_text']) && $captcha == $_SESSION['captcha_text']) {
            if ($this->scrty) {
                if (!empty($this->username) && !empty($this->password)) {
                    $auth = $this->api->post(getEnvi('schema') . '/auth/authorize', ['username' => $this->username, 'password' => hash('sha256', $this->password)], true);
                    if (gettype($auth) !== 'string' && empty($auth->status) && isset($auth->success) && $auth->success) {
                        setSession(AS_SESSION, $auth->data[0], ($remember == 1 ? (3600 * 24) : null));
                        $latest = getSession('LATEST_VISITED', false) !== '' ? getSession('LATEST_VISITED', false) : '';
                        if ($latest != '' && ($this->contains('load', $latest) || !$this->contains('admin/trans/izin_kerja', $latest))) {
                            $latest = '';
                        }
                        echo json_encode([
                            'status' => true,
                            'header' => getLangKey('login_success'),
                            'message' => getlangKey('login_success_message'),
                            'latest' => $latest
                        ]);
                    } else {
                        if (getSession('retry') >= 2) {
                            // setSession('blocked', true);
                            setcookie('mission', 30, time() + 30, "/");
                            setSession('retry', 0);
                        } else {
                            setSession('retry', getSession('retry') + 1);
                        }

                        if (!empty($auth->message)) {
                            $message = $auth->message;
                        } else {
                            $message = getlangKey('login_failed_message');
                        }

                        echo json_encode([
                            'status' => false,
                            'header' => getLangKey('login_failed'),
                            'message' => $message,
                            'attempt' => getSession('retry') > 0 ? 3 - getSession('retry') : getSession('retry')
                        ]);
                    }
                } else {
                    echo json_encode([
                        'status' => false,
                        'header' => getLangKey('login_failed'),
                        'message' => getlangKey('login_empty_message')
                    ]);
                }
            } else {
                echo json_encode([
                    'status' => false,
                    'header' => getLangKey('login_failed'),
                    'message' => 'You don\'t have authorize'
                ]);
            }
        } else {
            echo json_encode([
                'status' => false,
                'header' => getLangKey('login_failed'),
                'message' => 'Can\'t Verify Captcha'
            ]);
        }
    }

    function chaptcha()
    {
        $permitted_chars = '1234567890';
        // $string_length = 6;
        // $captcha_string = secure_generate_string($permitted_chars, $string_length);

        $image = imagecreatetruecolor(200, 50);

        imageantialias($image, true);

        $colors = [];

        $red = rand(125, 175);
        $green = rand(125, 175);
        $blue = rand(125, 175);

        for ($i = 0; $i < 5; $i++) {
            $colors[] = imagecolorallocate($image, $red - 20 * $i, $green - 20 * $i, $blue - 20 * $i);
        }

        imagefill($image, 0, 0, $colors[0]);

        for ($i = 0; $i < 10; $i++) {
            imagesetthickness($image, rand(2, 10));
            $line_color = $colors[rand(1, 4)];
            imagerectangle($image, rand(-10, 190), rand(-10, 10), rand(-10, 190), rand(40, 60), $line_color);
        }

        $black = imagecolorallocate($image, 0, 0, 0);
        $white = imagecolorallocate($image, 255, 255, 255);
        $textcolors = [$black, $white];

        $fonts = [dirname(__FILE__) . '\fonts\Acme.ttf'];

        $string_length = 6;
        $captcha_string = secure_generate_string($permitted_chars, $string_length);

        $_SESSION['captcha_text'] = $captcha_string;

        for ($i = 0; $i < $string_length; $i++) {
            $letter_space = 170 / $string_length;
            $initial = 15;

            imagettftext($image, 24, rand(-15, 15), $initial + $i * $letter_space, rand(25, 45), $textcolors[rand(0, 1)], $fonts[array_rand($fonts)], $captcha_string[$i]);
        }

        header('Content-type: image/png');
        imagepng($image);
        imagedestroy($image);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(MODAD . 'auth/login');
    }
}
