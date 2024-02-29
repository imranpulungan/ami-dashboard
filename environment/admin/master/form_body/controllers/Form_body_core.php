<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Form_body_core extends CI_Controller
{
    private $headers = [];

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

            $this->view['parent']   = $current_menu->data[0]->parent;
            if ($current_menu->data[0]->level == 3) {
                $this->view['grandparent']   = $current_menu->data[0]->grandparent;
            }
            $this->view['title']            = $current_menu->data[0]->nm_menu;
            $this->view['form_body_all']    = $this->api->get(getEnvi('schema') . '/master/form_body', true);
            // $this->view['title']      = getLangKey('menu');
            $this->view['content']          = 'master/form_body/v_form_body';
            $this->view['css'] = [
                'libs/datatables/css/dataTables.bootstrap5.min.css',
                'libs/datatables/css/responsive.bootstrap.min.css',
                'libs/datatables/css/buttons.dataTables.min.css',
                'libs/select2/css/select2.min.css'
            ];
            $this->view['javascript'] = [
                'libs/datatables/js/jquery-3.6.0.min.js',
                'js/netstable.js',
                'libs/sortablejs/Sortable.min.js',
                'js/pages/nestable.init.js',
                // 'libs/datatables/js/dataTables.responsive.min.js',
                // 'libs/datatables/js/dataTables.buttons.min.js',
                'libs/select2/js/select2.min.js'
            ];

            $this->view['java'] = [
                'path' => 'master',
                'file' => 'form_body'
            ];

            loadTemplate('layout', $this->view);
        }
    }

    public function refresh()
    {
        menuAccess('reset');
        redirect($_SESSION['before_redirect']);
    }

    public  function getedit()
    {
        $id = $this->input->post('id');
        echo base64_encode($this->api->get(getEnvi('schema') . '/master/form_body/' . $id, false));
    }

    public  function gettipe()
    {
        echo base64_encode($this->api->get(getEnvi('schema') . '/master/form_body/tipe', false));
    }

    public  function form_header()
    {
        echo base64_encode($this->api->get(getEnvi('schema') . '/master/form_header', false));
    }

    public  function getall()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            echo base64_encode($this->api->get(getEnvi('schema') . '/master/form_body/all', false));
        } else {
            error_404();
        }
    }

    public function add()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $ID_BODY    = $this->input->post('idbody');
            $NAMA       = $this->input->post('nama');
            $TIPE       = $this->input->post('tipe');
            $PARENT     = $this->input->post('parent');
            $REQ        = $this->input->post('required');
            $UP         = $this->input->post('upload');

            if ($NAMA == '') {
                $msg = [
                    'success' => false,
                    'status' => false,
                    'header' => 'Gagal',
                    'message' => 'Nama Menu tidak boleh kosong',
                ];
                echo json_encode($msg);
                // } elseif ($TIPE == '') {
                //     $msg = [
                //         'success' => false,
                //         'status' => false,
                //         'header' => 'Gagal',
                //         'message' => 'Link Menu tidak boleh kosong',
                //     ];
                //     echo json_encode($msg);
            } else {
                // $REQ = trim(preg_replace('/\s+/', ' ', preg_replace("/<!--.*?-->/", "", $REQ)));
                $data['nama']   = $NAMA;
                $data['tipe']   = $TIPE;
                $data['parent'] = $PARENT;
                $data['req']    = $REQ;
                $data['upload'] = $UP;

                $temp = '';
                $msg = [
                    'success' => false,
                    'status' => false,
                    'header' => 'Gagal',
                    'message' => 'Form Body Gagal Disimpan',
                ];

                if ($ID_BODY == '') {
                    $temp = $this->api->post(getEnvi('schema') . '/master/form_body', $data, true);
                } else {
                    $data['id']     = $ID_BODY;
                    $temp = $this->api->put(getEnvi('schema') . '/master/form_body', $data, true);
                }

                if ($temp !== '') {
                    if ($temp->success) {
                        $msg = [
                            'success' => true,
                            'status' => true,
                            'header' => 'Berhasil',
                            'message' => 'Form Body Berhasil Disimpan',
                        ];
                    } else {
                        $msg = [
                            'success' => false,
                            'status' => false,
                            'header' => 'Gagal',
                            'message' => $temp->error[0]->message,
                        ];
                    }
                }
                echo json_encode($msg);
            }
        } else {
            error_404();
        }
    }

    public function edit()
    {
        $this->add();
    }

    public function update_all()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $data['form_body'] = base64_encode($this->input->post('form_body'));
            if ($data['form_body'] != '' && $data['form_body'] != null) {

                $temp = $this->api->put(getEnvi('schema') . '/master/form_body/json', $data, true);
                if (isset($temp->success) && $temp->success) {
                    echo json_encode([
                        'status' => true,
                        'success' => true,
                        'header' => 'Berhasil',
                        'message' => 'Berhasil Mengupdate Form Body'
                    ]);
                } else {
                    echo json_encode([
                        'status' => false,
                        'success' => false,
                        'header' => 'Gagal',
                        'message' => 'Gagal Mengupdate Form Body'
                    ]);
                    echo $temp;
                    exit();
                }
            } else {
                $result['success'] = false;
                $result['status'] = false;
                $result['header'] = 'Terjadi Kesalahan';
                $result['message'] = 'Tidak ada perubahan!!';
                echo json_encode($result);
            }
        }
    }

    public function delete()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $id = $this->input->post('id');

            if ($id !== '') {
                $temp = $this->api->delete(getEnvi('schema') . '/master/form_body', ['id' => $id], true);
                if ($temp->success) {

                    echo json_encode([
                        'status' => true,
                        'success' => true,
                        'header' => 'Berhasil',
                        'message' => 'Berhasil Menghapus Form Body'
                    ]);
                } else {
                    echo json_encode([
                        'status' => false,
                        'success' => false,
                        'header' => 'Gagal',
                        'message' => 'Gagal Menghapus Form Body'
                    ]);
                }
            }
            // echo json_encode($result);
        }
    }
}
