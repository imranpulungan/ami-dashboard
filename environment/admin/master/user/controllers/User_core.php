<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Master Controller
 *
 * Nah jadi ini fungsinya buat dipanggil di class utamanya nanti
 * Kenapa sih kok ribet? sebenernya enggak
 * cuman buat kalo ada yang nyoba utak atik codingnya tapi gak tau konsepnya bisa setres
 *
 * @package		User Core
 * @subpackage	User Core
 * @author		Alimstudio
 * @link		http://alimstudio.com
 */

class User_core extends CI_Controller
{
    private $view;

    public function __construct()
    {
        parent::__construct();

        Initialized();
    }

    public function index()
    {
        isHasAccessToModule();

        if (!isHeader404()) {
            
            $this->view['title']      = getLangKey('user');
            $this->view['content']    = 'master/user/v_user';
            $this->view['css']    = [
                'libs/datatables/css/dataTables.bootstrap5.min.css',
                'libs/datatables/css/responsive.bootstrap.min.css',
                'libs/datatables/css/buttons.dataTables.min.css',
                'libs/select2/css/select2.min.css'
            ];
            $this->view['javascript'] = [
                'libs/datatables/js/jquery-3.6.0.min.js',
                'libs/datatables/js/jquery.dataTables.min.js',
                'libs/datatables/js/dataTables.bootstrap5.min.js',
                'libs/datatables/js/dataTables.responsive.min.js',
                'libs/datatables/js/dataTables.buttons.min.js',
                'libs/select2/js/select2.min.js'
            ];

            $this->view['java'] = [
                'path' => 'master',
                'file' => 'user'
            ];

            loadTemplate('layout', $this->view);
        }
    }

    public function load()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $data['role'] = getSession('role');            
            $headers = array(
                'X-API-TOKEN:' . getEnvi('API_TOKEN'),
                'X-APP-KEY:' . getEnvi('API_APP_KEY'),
                'Authorization:' . getSession('token')
            );
            echo base64_encode($this->api->getData(getEnvi('schema') . '/master/user', $data, false, $headers));
        } else {
            error_404();
        }
    }

    public function role()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $data['role'] = getSession('role');
            echo base64_encode($this->api->getData(getEnvi('schema') . '/master/role', $data, false));
        } else {
            error_404();
        }
    }

    public function seksi()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            echo base64_encode($this->api->get(getEnvi('schema') . '/master/seksi', false));
        } else {
            error_404();
        }
    }

    public function perusahaan()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            echo base64_encode($this->api->get(getEnvi('schema') . '/master/seksi/perusahaan', false));
        } else {
            error_404();
        }
    }

    public function add()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $data['name']           = $this->input->post('nama');
            $data['username']       = $this->input->post('username');
            $data['email']          = $this->input->post('username');
            $data['no_hp']          = $this->input->post('no_hp');
            $data['password']       = $this->input->post('password');
            
            $this->api->set_headers(
                array(
                    'X-API-TOKEN:' . getEnvi('API_TOKEN'),
                    'X-APP-KEY:' . getEnvi('API_APP_KEY'),
                    'Authorization:' . getSession('token'),
                )
            );            
            $result = $this->api->post(getEnvi('schema') . '/master/user', $data, true);
            
            if (isset($result->success) && $result->success) {
                echo json_encode([
                    'status' => true,
                    'header' => getLangKey('user_add_success_header'),
                    'message' => getLangKey('user_add_success_message')
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'header' => getLangKey('user_add_failed_header'),
                    'message' => $result->error
                ]);
            }
        } else {
            error_404();
        }
    }

    public function edit()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $data['uid_user']        = $this->input->post('uid_user_edit');
            $data['name']           = $this->input->post('nama_edit');
            $data['username']       = $this->input->post('username_edit');
            $data['email']          = $this->input->post('username_edit');
            $data['no_hp']          = $this->input->post('no_hp_edit');
            $data['password']       = $this->input->post('password_edit');

            $this->api->set_headers(
                array(
                    'X-API-TOKEN:' . getEnvi('API_TOKEN'),
                    'X-APP-KEY:' . getEnvi('API_APP_KEY'),
                    'Authorization:' . getSession('token'),
                )
            );            
            $result = $this->api->put(getEnvi('schema') . '/master/user', $data, true);

            if (isset($result->success) && $result->success) {
                echo json_encode([
                    'status' => true,
                    'header' => getLangKey('user_edit_success_header'),
                    'message' => getLangKey('user_edit_success_message')
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'header' => getLangKey('user_edit_failed_header'),
                    'message' => $result->error
                ]);
            }
        } else {
            error_404();
        }
    }

    public function settings()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $data['id_user']        = getSession('token');
            $data['nama']           = getSession('nama');
            $data['username']       = getSession('username');
            $data['password']       = $this->input->post('password_settings');
            $data['id_role']        = getSession('role');
            $data['seksi']          = getSession('id_seksi');
            if ($data['id_role'] != 'RS003') {
                $data['email']          = $this->input->post('email_settings') . '@inalum.id';
            }
            $result = $this->api->put(getEnvi('schema') . '/master/user', $data, true);
            // echo $result;
            // exit();
            if (isset($result->success) && $result->success) {
                if ($data['id_role'] != 'RS003') {
                    $sess = (array) getAllSession();
                    $newSess = [
                        'email' => $data['email']
                    ];
                    $sess = array_merge($sess, $newSess);
                    setSession(AS_SESSION, (object) $sess, (3600 * 24));
                }
                echo json_encode([
                    'status' => true,
                    'header' => getLangKey('user_edit_success_header'),
                    'message' => getLangKey('user_edit_success_message')
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'header' => getLangKey('user_edit_failed_header'),
                    'message' => $result->error
                ]);
            }
        } else {
            error_404();
        }
    }

    public function update_status()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $data['uid_user'] = $this->input->post('id');
            $data['status'] = $this->input->post('status');

            $this->api->set_headers(
                array(
                    'X-API-TOKEN:' . getEnvi('API_TOKEN'),
                    'X-APP-KEY:' . getEnvi('API_APP_KEY'),
                    'Authorization:' . getSession('token'),
                )
            );   
            $result = $this->api->put(getEnvi('schema') . '/master/user/status', $data, true);
            if (isset($result->success) && $result->success) {
                echo json_encode([
                    'status' => true,
                    'header' => getLangKey('user_status_success_header'),
                    'message' => getLangKey('user_status_success_message')
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'header' => getLangKey('user_status_failed_header'),
                    'message' => getLangKey('user_status_failed_message')
                ]);
            }
        } else {
            error_404();
        }
    }

    public function delete()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $data['uid_user'] = $this->input->post('id');
            $result = $this->api->delete(getEnvi('schema') . '/master/user', $data, true);
            if (isset($result->success) && $result->success) {
                echo json_encode([
                    'status' => true,
                    'header' => getLangKey('user_delete_success_header'),
                    'message' => getLangKey('user_delete_success_message')
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'header' => getLangKey('user_delete_failed_header'),
                    'message' => getLangKey('user_delete_failed_message')
                ]);
            }
        } else {
            error_404();
        }
    }
    /**
     * End
     * Module User
     */
}



/* End of file Master_core.php */
/* Location: ./application/modules/Master/controllers/Master_core.php */