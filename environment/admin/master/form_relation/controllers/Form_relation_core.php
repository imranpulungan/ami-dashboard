<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Master Controller
 *
 * Nah jadi ini fungsinya buat dipanggil di class utamanya nanti
 * Kenapa sih kok ribet? sebenernya enggak
 * cuman buat kalo ada yang nyoba utak atik codingnya tapi gak tau konsepnya bisa setres
 *
 * @package		Form_relation Core
 * @subpackage	Form_relation Core
 * @author		Alimstudio
 * @link		http://alimstudio.com
 */

class Form_relation_core extends CI_Controller
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

            $this->view['content']      = 'master/form_relation/v_form_relation';
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
                'file' => 'form_relation'
            ];

            loadTemplate('layout', $this->view);
        }
    }

    public function add()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $data['form_header']       = $this->input->post('form_header');
            // $data['form_body']       = json_encode($this->input->post('form_body'));
            // $data['form_body']       = json_decode($this->input->post('form_body'), true);
            $form_body  = base64_encode($this->input->post('form_body'));
            // $x = [];
            // echo gettype($form_body);
            if (gettype($form_body) !== 'NULL' && $form_body !== '') {
                $data['form_body'] = $form_body;
                $temp = $this->api->post(getEnvi('schema') . '/master/form_relation/json', $data, true);

                if (isset($temp->success) && $temp->success) {
                    $result['success'] = true;
                    $result['status'] = true;
                    $result['header'] = 'Berhasil';
                    $result['message'] = 'Form relation berhasil ditambahkan';
                } else {
                    $result['success'] = false;
                    $result['status'] = false;
                    $result['header'] = 'Gagal';
                    $result['message'] = 'Form relation gagal ditambahkan';
                }
            } else {
                $result['success'] = false;
                $result['status'] = false;
                $result['header'] = 'Gagal';
                $result['message'] = 'Role Form relation belum dipilih!!';
            }
            echo json_encode($result);
        } else {
            error_404();
        }
    }

    public function add_old()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $data['form_header']       = $this->input->post('form_header');
            // $data['form_body']       = json_encode($this->input->post('form_body'));
            // $data['form_body']       = json_decode($this->input->post('form_body'), true);
            $form_body  = json_decode($this->input->post('form_body'), true);
            // $x = [];
            // echo gettype($form_body);
            if (gettype($form_body) !== 'NULL') {
                if (sizeof($form_body) > 0) {
                    foreach ($form_body as $form_bodyParse) {
                        $data['id'] = uniqidReal(15);
                        $data['form_body'] = $form_bodyParse['form_body'];
                        $data['jenis'] = $form_bodyParse['jenis'];
                        $this->api->post(getEnvi('schema') . '/master/form_relation', $data, false, true);
                    }

                    // form_bodyAccess('reset');
                    $result['success'] = true;
                    $result['status'] = true;
                    $result['message'] = 'Form relation berhasil ditambahkan';
                }
            } else {
                $result['success'] = false;
                $result['status'] = false;
                $result['message'] = 'Role Form relation belum dipilih!!';
            }
            echo json_encode($result);
        } else {
            error_404();
        }
    }

    public function load()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            echo base64_encode($this->api->get(getEnvi('schema') . '/master/form_relation', false));
        } else {
            error_404();
        }
    }

    public function jenis()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            echo base64_encode($this->api->get(getEnvi('schema') . '/master/jenis', false));
        } else {
            error_404();
        }
    }

    public function jenis_edit()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $data['form_header'] = $this->input->post('form_header');
            echo base64_encode($this->api->getData(getEnvi('schema') . '/master/form_relation/jenis_edit', $data, false));
        } else {
            error_404();
        }
    }

    public function form_body($id = '')
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            if ($id == '') {
                echo base64_encode($this->api->get(getEnvi('schema') . '/master/form_body', false));
            } else {
                echo base64_encode($this->api->get(getEnvi('schema') . '/master/form_body/' . $id, false));
            }
        } else {
            error_404();
        }
    }

    public function form_header()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            echo base64_encode($this->api->get(getEnvi('schema') . '/master/form_relation/form_header', false));
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
            $form_header           = $this->input->post('form_header_edit');
            $data['form_header']   = $form_header;
            $form_body  = base64_encode($this->input->post('form_bodyEdit'));
            if (gettype($form_body) !== 'NULL' && $form_body !== '') {
                $temp = $this->api->delete(getEnvi('schema') . '/master/form_relation', ['id' => $form_header], true);
                if (isset($temp->success) && $temp->success) {
                    $data['form_body'] = $form_body;
                    $temp2 = $this->api->put(getEnvi('schema') . '/master/form_relation/json', $data, true);

                    if (isset($temp2->success) && $temp2->success) {
                        $result['status'] = true;
                        $result['header'] = getLangKey('form_relation_edit_success_header');
                        $result['message'] = getLangKey('form_relation_edit_success_message');
                    } else {
                        $result['status'] = false;
                        $result['header'] = getLangKey('form_relation_edit_failed_header');
                        $result['message'] = getLangKey('form_relation_edit_failed_message');
                    }
                } else {
                    $result['status'] = false;
                    $result['header'] = getLangKey('form_relation_edit_failed_header');
                    $result['message'] = getLangKey('form_relation_edit_failed_message');
                }
            } else {
                $result['status'] = false;
                $result['message'] = 'Form relation belum dipilih!!';
            }
            echo json_encode($result);
        } else {
            error_404();
        }
    }

    public function edit_old()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $form_header           = $this->input->post('form_header_edit');
            $data['form_header']   = $form_header;
            $form_body  = json_decode($this->input->post('form_bodyEdit'), true);
            if (gettype($form_body) !== 'NULL') {
                // echo 'form_body not null';
                // exit();
                if (sizeof($form_body) > 0) {
                    // echo 'form_body size > 0';
                    // echo 'form_header = ' . $form_header;
                    // exit();
                    $temp = $this->api->delete(getEnvi('schema') . '/master/form_relation', ['id' => $form_header], true);
                    if ($temp->success) {
                        // echo 'temp success';
                        // exit();
                        foreach ($form_body as $form_bodyParse) {
                            $data['id'] = uniqidReal(15);
                            $data['form_body'] = $form_bodyParse['form_body'];
                            $data['jenis'] = $form_bodyParse['jenis'];
                            $this->api->put(getEnvi('schema') . '/master/form_relation', $data, false);
                        }

                        // form_bodyAccess('reset');
                        $result['status'] = true;
                        $result['header'] = getLangKey('form_relation_edit_success_header');
                        $result['message'] = getLangKey('form_relation_edit_success_message');
                    } else {
                        $result['status'] = false;
                        $result['header'] = getLangKey('form_relation_edit_failed_header');
                        $result['message'] = getLangKey('form_relation_edit_failed_message');
                    }
                }
            } else {
                $result['status'] = false;
                $result['message'] = 'Form relation belum dipilih!!';
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
                $temp = $this->api->delete(getEnvi('schema') . '/master/form_relation', ['id' => $id], true);
                if ($temp->success) {
                    // form_bodyAccess('reset');
                    $result['status'] = true;
                    $result['header'] = getLangKey('form_relation_delete_success_header');
                    $result['message'] = getLangKey('form_relation_delete_success_message');
                } else {
                    $result['status'] = false;
                    $result['header'] = getLangKey('form_relation_delete_failed_header');
                    $result['message'] = getLangKey('form_relation_delete_failed_message');
                }
            }
            echo json_encode($result);
        }
    }


    // Private Form relation
    public function private()
    {
        isHasAccessToModule();

        if (!isHeader404()) {
            $data['title']      = getLangKey('form_relation_private_title');
            $data['name']       = 'master/form_relation_private';
            $data['content']    = 'master/form_relation_private/v_private';
            $data['subheader']  = 'v_private_subheader';
            loadTemplate('layout', $data);
        }
    }

    public function add_private()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $data['user']       = $this->input->post('user');
            $form_body  = json_decode($this->input->post('form_body'), true);
            if (gettype($form_body) !== 'NULL') {
                if (sizeof($form_body) > 0) {
                    foreach ($form_body as $form_bodyParse) {
                        $data['id'] = uniqidReal(15);
                        $data['form_body'] = $form_bodyParse['form_body'];
                        $data['jenis'] = $form_bodyParse['jenis'];
                        $this->api->post(getEnvi('schema') . '/master/form_relation/private', $data, false, true);
                    }

                    // form_bodyAccess('reset');
                    $result['status'] = true;
                    $result['msg'] = 'Form relation berhasil ditambahkan';
                }
            } else {
                $result['status'] = false;
                $result['msg'] = 'Form relation belum dipilih!!';
            }
            echo json_encode($result);
        } else {
            error_404();
        }
    }

    public function load_private()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            echo $this->api->get(getEnvi('schema') . '/master/form_relation/private', false);
        } else {
            error_404();
        }
    }

    public function user_no_private() // get user dont have private form_relation
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            echo $this->api->get(getEnvi('schema') . '/master/form_relation/user_no_private', false);
        } else {
            error_404();
        }
    }

    public function jenis_edit_private()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $data['user'] = $this->input->post('user');
            echo $this->api->getData(getEnvi('schema') . '/master/form_relation/jenis_edit_private', $data, false);
        } else {
            error_404();
        }
    }

    public function jenis_edit_form_header_private()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $data['user'] = $this->input->post('user');
            echo $this->api->getData(getEnvi('schema') . '/master/form_relation/jenis_edit_form_header_private', $data, false);
        } else {
            error_404();
        }
    }

    public function edit_private()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $user           = $this->input->post('user_edit');
            $data['user']   = $user;
            $form_body  = json_decode($this->input->post('form_bodyEdit'), true);
            if (gettype($form_body) !== 'NULL') {
                if (sizeof($form_body) > 0) {
                    $temp = $this->api->delete(getEnvi('schema') . '/master/form_relation/private', ['id' => $user], true);
                    if ($temp->success) {
                        foreach ($form_body as $form_bodyParse) {
                            $data['id'] = uniqidReal(15);
                            $data['form_body'] = $form_bodyParse['form_body'];
                            $data['jenis'] = $form_bodyParse['jenis'];
                            $this->api->put(getEnvi('schema') . '/master/form_relation/private', $data, false);
                        }
                        // form_bodyAccess('reset');
                        $result['status'] = true;
                        $result['msg'] = 'Form relation berhasil diupdate';
                    } else {
                        $result['status'] = false;
                        $result['msg'] = 'Form relation gagal diupdate';
                    }
                }
            } else {
                $result['status'] = false;
                $result['msg'] = 'Form relation belum dipilih!!';
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
                $temp = $this->api->delete(getEnvi('schema') . '/master/form_relation/private', ['id' => $id], true);
                if ($temp->success) {
                    // form_bodyAccess('reset');
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
