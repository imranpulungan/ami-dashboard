<?php if (!defined('ENVPATH')) die('Mati ajalah kau sana jang');

class Errors extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function e404()
    {
        $this->error_404();
    }

    public static function error_404()
    {
        $CI = &get_instance();
        set_status_header(404);
        if (!isHasSession()) {
            loadTemplate('errors/e404');
        } else {
            $segment = $CI->uri->segment_array();
            if (in_array(trim(MODAD, '/'), $segment)) {
                $data['title'] = 'Error 404';
                $data['content'] = 'errors/e404_login';
                loadTemplate('layout', $data);
            } else {
                loadTemplate('errors/e404');
            }
        }
    }

    public function maintenance()
    {
        loadTemplate('maintenance');
    }
}
