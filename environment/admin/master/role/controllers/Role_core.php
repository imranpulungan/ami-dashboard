<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Master Controller
 *
 * Nah jadi ini fungsinya buat dipanggil di class utamanya nanti
 * Kenapa sih kok ribet? sebenernya enggak
 * cuman buat kalo ada yang nyoba utak atik codingnya tapi gak tau konsepnya bisa setres
 *
 * @package		Role Core
 * @subpackage	Role Core
 * @author		Alimstudio
 * @link		http://alimstudio.com
 */

class Role_core extends CI_Controller
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
            $data['link_menu'] = "admin/" . $this->uri->segment(2) . "/" . $this->uri->segment(3);
            $current_menu = json_decode($this->api->getData(getEnvi('schema') . '/system/menu/current', $data, false));
            // echo $this->uri->segment(3);
            // exit();
            if ($current_menu->data[0]->level == 3) {
                $this->view['parent']   = $current_menu->data[0]->parent;
            }
            $this->view['title']        = $current_menu->data[0]->nm_menu;

            $this->view['content']    = 'master/role/v_role';
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
                'file' => 'role'
            ];

            loadTemplate('layout', $this->view);
        }
    }

    public function load()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $data['role'] = getSession('role');
            echo base64_encode($this->api->getData(getEnvi('schema') . '/master/role', $data, false));
        } else {
            error_404();
        }
    }

    public function add()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $data['nm_role']    = $this->input->post('nm_role');
            echo $this->api->post(getEnvi('schema') . '/master/role', $data, false, true);
        } else {
            error_404();
        }
    }

    public function edit()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $data['id_role']    = $this->input->post('id_role_edit');
            $data['nm_role']    = $this->input->post('nm_role_edit');
            $result = $this->api->put(getEnvi('schema') . '/master/role', $data, true);
            if (isset($result->success) && $result->success) {
                echo json_encode([
                    'status' => true,
                    'header' => getLangKey('role_edit_success_header'),
                    'message' => getLangKey('role_edit_success_message')
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'header' => getLangKey('role_edit_failed_header'),
                    'message' => getLangKey('role_edit_failed_message')
                ]);
            }
        } else {
            error_404();
        }
    }

    public function delete()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $data['id_role'] = $this->input->post('id');
            $result = $this->api->delete(getEnvi('schema') . '/master/role', $data, true);
            if (isset($result->success) && $result->success) {
                echo json_encode([
                    'status' => true,
                    'header' => getLangKey('role_delete_success_header'),
                    'message' => getLangKey('role_delete_success_message')
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'header' => getLangKey('role_delete_failed_header'),
                    'message' => getLangKey('role_delete_failed_message')
                ]);
            }
        } else {
            error_404();
        }
    }
    /**
     * End
     * Module Role
     */
}



/* End of file Master_core.php */
/* Location: ./application/modules/Master/controllers/Master_core.php */