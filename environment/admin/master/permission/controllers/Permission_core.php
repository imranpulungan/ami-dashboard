<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Master Controller
 *
 * Nah jadi ini fungsinya buat dipanggil di class utamanya nanti
 * Kenapa sih kok ribet? sebenernya enggak
 * cuman buat kalo ada yang nyoba utak atik codingnya tapi gak tau konsepnya bisa setres
 *
 * @package		Permission Core
 * @subpackage	Permission Core
 * @author		Alimstudio
 * @link		http://alimstudio.com
 */

class Permission_core extends CI_Controller
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

            $this->view['content']      = 'master/permission/v_permission';
            $this->view['css']          = [
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
                'file' => 'permission'
            ];

            loadTemplate('layout', $this->view);
        }
    }

    public function add()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $data['role']       = $this->input->post('role');
            $data['menu']       = base64_encode($this->input->post('menu'));

            if (gettype($data['menu']) !== 'NULL' && $data['menu'] !== '') {
                $temp = $this->api->post(getEnvi('schema') . '/master/permission/json', $data, true);
                if ($temp->success) {

                    $this->session->unset_userdata('MENU');
                    menuAccess();

                    $result['status'] = true;
                    $result['header'] = getLangKey('permission_add_success_header');
                    $result['message'] = getLangKey('permission_add_success_message');
                } else {
                    $result['status'] = false;
                    $result['header'] = getLangKey('permission_add_failed_header');
                    $result['message'] = getLangKey('permission_add_failed_message');
                }
            } else {
                $result['status'] = false;
                $result['header'] = getLangKey('permission_add_failed_header');
                $result['message'] = 'Role Permission belum dipilih!!';
            }
            echo json_encode($result);
        } else {
            error_404();
        }
    }

    public function add_old()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $data['role']       = $this->input->post('role');
            // $data['menu']       = json_encode($this->input->post('menu'));
            // $data['menu']       = json_decode($this->input->post('menu'), true);
            $menu  = json_decode($this->input->post('menu'), true);
            // $x = [];
            // echo gettype($menu);
            if (gettype($menu) !== 'NULL') {
                if (sizeof($menu) > 0) {
                    foreach ($menu as $menuParse) {
                        $data['id'] = uniqidReal(15);
                        $data['menu'] = $menuParse['menu'];
                        $data['akses'] = $menuParse['akses'];
                        $this->api->post(getEnvi('schema') . '/master/permission', $data, false, true);
                    }

                    menuAccess('reset');
                    $result['success'] = true;
                    $result['status'] = true;
                    $result['message'] = 'Permission berhasil ditambahkan';
                }
            } else {
                $result['success'] = false;
                $result['status'] = false;
                $result['message'] = 'Role Permission belum dipilih!!';
            }
            echo json_encode($result);
        } else {
            error_404();
        }
    }

    public function load()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            echo base64_encode($this->api->get(getEnvi('schema') . '/master/permission', false));
        } else {
            error_404();
        }
    }

    public function action()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            echo base64_encode($this->api->get(getEnvi('schema') . '/system/action', false));
        } else {
            error_404();
        }
    }

    public function action_edit()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $data['role'] = $this->input->post('role');
            echo base64_encode($this->api->getData(getEnvi('schema') . '/master/permission/action_edit', $data, false));
        } else {
            error_404();
        }
    }

    public function menu()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            echo base64_encode($this->api->get(getEnvi('schema') . '/system/menu/all', false));
        } else {
            error_404();
        }
    }

    public function role()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            echo base64_encode($this->api->get(getEnvi('schema') . '/master/permission/role', false));
        } else {
            error_404();
        }
    }

    public function tgl()
    {
        $date = DateTime::createFromFormat('Y-m-d', '2021-10-28');
        echo $date->format('d/m/Y');
    }

    public function edit()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $role           = $this->input->post('role_edit');
            $data['role']   = $role;
            $data['menu']   = base64_encode($this->input->post('menuEdit'));
            if (gettype($data['menu']) !== 'NULL' && $data['menu'] != '') {
                $temp = $this->api->delete(getEnvi('schema') . '/master/permission', ['id' => $role], true);
                if ($temp->success) {
                    $temp2 = $this->api->put(getEnvi('schema') . '/master/permission/json', $data, true);
                    if ($temp2->success) {

                        $this->session->unset_userdata('MENU');
                        menuAccess();

                        $result['status'] = true;
                        $result['header'] = getLangKey('permission_edit_success_header');
                        $result['message'] = getLangKey('permission_edit_success_message');
                    } else {
                        $result['status'] = false;
                        $result['header'] = getLangKey('permission_edit_failed_header');
                        $result['message'] = getLangKey('permission_edit_failed_message');
                    }
                } else {
                    $result['status'] = false;
                    $result['header'] = getLangKey('permission_edit_failed_header');
                    $result['message'] = getLangKey('permission_edit_failed_message');
                }
            } else {
                $result['status'] = false;
                $result['header'] = getLangKey('permission_edit_failed_header');
                $result['message'] = 'Permission belum dipilih!!';
            }
            echo json_encode($result);
        } else {
            error_404();
        }
    }

    public function edit_old()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $role           = $this->input->post('role_edit');
            $data['role']   = $role;
            $menu  = json_decode($this->input->post('menuEdit'), true);
            if (gettype($menu) !== 'NULL') {
                if (sizeof($menu) > 0) {
                    $temp = $this->api->delete(getEnvi('schema') . '/master/permission', ['id' => $role], true);
                    if ($temp->success) {
                        foreach ($menu as $menuParse) {
                            $data['id'] = uniqidReal(15);
                            $data['menu'] = $menuParse['menu'];
                            $data['akses'] = $menuParse['akses'];
                            $this->api->put(getEnvi('schema') . '/master/permission', $data, false);
                        }

                        menuAccess('reset');
                        $result['status'] = true;
                        $result['header'] = getLangKey('permission_edit_success_header');
                        $result['message'] = getLangKey('permission_edit_success_message');
                    } else {
                        $result['status'] = false;
                        $result['header'] = getLangKey('permission_edit_failed_header');
                        $result['message'] = getLangKey('permission_edit_failed_message');
                    }
                }
            } else {
                $result['status'] = false;
                $result['message'] = 'Permission belum dipilih!!';
            }
            echo json_encode($result);
        } else {
            error_404();
        }
    }

    public function delete()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $id = $this->input->post('id');
            $result = [];
            if ($id !== '') {
                $temp = $this->api->delete(getEnvi('schema') . '/master/permission', ['id' => $id], true);
                if ($temp->success) {
                    menuAccess('reset');
                    $result['status'] = true;
                    $result['header'] = getLangKey('permission_delete_success_header');
                    $result['message'] = getLangKey('permission_delete_success_message');
                } else {
                    $result['status'] = false;
                    $result['header'] = getLangKey('permission_delete_failed_header');
                    $result['message'] = getLangKey('permission_delete_failed_message');
                }
            }
            echo json_encode($result);
        }
    }


    // Private Permission
    public function private()
    {
        isHasAccessToModule();

        if (!isHeader404()) {
            $data['title']      = getLangKey('permission_private_title');
            $data['name']       = 'master/permission_private';
            $data['content']    = 'master/permission_private/v_private';
            $data['subheader']  = 'v_private_subheader';
            loadTemplate('layout', $data);
        }
    }

    public function add_private()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $data['user']       = $this->input->post('user');
            $menu  = json_decode($this->input->post('menu'), true);
            if (gettype($menu) !== 'NULL') {
                if (sizeof($menu) > 0) {
                    foreach ($menu as $menuParse) {
                        $data['id'] = uniqidReal(15);
                        $data['menu'] = $menuParse['menu'];
                        $data['akses'] = $menuParse['akses'];
                        $this->api->post(getEnvi('schema') . '/master/permission/private', $data, false, true);
                    }

                    menuAccess('reset');
                    $result['status'] = true;
                    $result['msg'] = 'Permission berhasil ditambahkan';
                }
            } else {
                $result['status'] = false;
                $result['msg'] = 'Permission belum dipilih!!';
            }
            echo json_encode($result);
        } else {
            error_404();
        }
    }

    public function load_private()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            echo $this->api->get(getEnvi('schema') . '/master/permission/private', false);
        } else {
            error_404();
        }
    }

    public function user_no_private() // get user dont have private permission
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            echo $this->api->get(getEnvi('schema') . '/master/permission/user_no_private', false);
        } else {
            error_404();
        }
    }

    public function action_edit_private()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $data['user'] = $this->input->post('user');
            echo $this->api->getData(getEnvi('schema') . '/master/permission/action_edit_private', $data, false);
        } else {
            error_404();
        }
    }

    public function action_edit_role_private()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $data['user'] = $this->input->post('user');
            echo $this->api->getData(getEnvi('schema') . '/master/permission/action_edit_role_private', $data, false);
        } else {
            error_404();
        }
    }

    public function edit_private()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $user           = $this->input->post('user_edit');
            $data['user']   = $user;
            $menu  = json_decode($this->input->post('menuEdit'), true);
            if (gettype($menu) !== 'NULL') {
                if (sizeof($menu) > 0) {
                    $temp = $this->api->delete(getEnvi('schema') . '/master/permission/private', ['id' => $user], true);
                    if ($temp->success) {
                        foreach ($menu as $menuParse) {
                            $data['id'] = uniqidReal(15);
                            $data['menu'] = $menuParse['menu'];
                            $data['akses'] = $menuParse['akses'];
                            $this->api->put(getEnvi('schema') . '/master/permission/private', $data, false);
                        }
                        menuAccess('reset');
                        $result['status'] = true;
                        $result['msg'] = 'Permission berhasil diupdate';
                    } else {
                        $result['status'] = false;
                        $result['msg'] = 'Permission gagal diupdate';
                    }
                }
            } else {
                $result['status'] = false;
                $result['msg'] = 'Permission belum dipilih!!';
            }
            echo json_encode($result);
        } else {
            error_404();
        }
    }

    public function delete_private()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $id = $this->input->post('id');
            $result = [];
            if ($id !== '') {
                $temp = $this->api->delete(getEnvi('schema') . '/master/permission/private', ['id' => $id], true);
                if ($temp->success) {
                    menuAccess('reset');
                    $result['success'] = true;
                    $result['msg'] = 'Berhasil Menghapus Menu';
                } else {
                    $result['success'] = false;
                    $result['msg'] = 'Gagal Menghapus Menu';
                }
            }
            echo json_encode($result);
        }
    }
}
