<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Menu_core extends CI_Controller
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
            $this->view['title']        = $current_menu->data[0]->nm_menu;
            $this->view['menu_all']    = $this->api->get(getEnvi('schema') . '/system/menu/all', true);
            // $this->view['title']      = getLangKey('menu');
            $this->view['content']    = 'master/menu/v_menu';
            $this->view['css']    = [
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
                // 'libs/select2/js/select2.min.js'
            ];

            $this->view['java'] = [
                'path' => 'master',
                'file' => 'menu'
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
        echo base64_encode($this->api->get(getEnvi('schema') . '/system/menu/' . $id, false));
    }

    public  function getall()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            echo base64_encode($this->api->get(getEnvi('schema') . '/system/menu/all', false));
        } else {
            error_404();
        }
    }

    public function add()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $ID_MENU    = $this->input->post('idmenu');
            $NAMA       = $this->input->post('nama');
            $LINK_MENU  = $this->input->post('link_menu');
            $ICON       = $this->input->post('icon');
            $STATUS     = $this->input->post('status');

            if ($STATUS == '') {
                $STATUS = 'N';
            }

            if ($NAMA == '') {
                $msg = [
                    'success' => false,
                    'status' => false,
                    'header' => 'Gagal',
                    'message' => 'Nama Menu tidak boleh kosong',
                ];
                echo json_encode($msg);
                // } elseif ($LINK_MENU == '') {
                //     $msg = [
                //         'success' => false,
                //         'status' => false,
                //         'header' => 'Gagal',
                //         'message' => 'Link Menu tidak boleh kosong',
                //     ];
                //     echo json_encode($msg);
            } else {
                // $ICON = trim(preg_replace('/\s+/', ' ', preg_replace("/<!--.*?-->/", "", $ICON)));
                $data['nama']   = $NAMA;
                $data['link']   = $LINK_MENU;
                $data['icon']   = $ICON;
                $data['status'] = $STATUS;

                $temp = '';
                $msg = [
                    'success' => false,
                    'status' => false,
                    'header' => 'Gagal',
                    'message' => 'Menu Gagal Disimpan',
                ];

                if ($ID_MENU == '') {
                    $temp = $this->api->post(getEnvi('schema') . '/system/menu', $data, true);
                } else {
                    $data['id']     = $ID_MENU;
                    $temp = $this->api->put(getEnvi('schema') . '/system/menu', $data, true);
                }

                if ($temp !== '') {
                    if ($temp->success) {

                        $this->session->unset_userdata('MENU');
                        menuAccess();

                        $msg = [
                            'success' => true,
                            'status' => true,
                            'header' => 'Berhasil',
                            'message' => 'Menu Berhasil Disimpan',
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
            $data['menu'] = base64_encode($this->input->post('menu'));
            if ($data['menu'] != '' && $data['menu'] != null) {
                $temp = $this->api->put(getEnvi('schema') . '/system/menu/json', $data, true);
                if ($temp->success) {

                    $this->session->unset_userdata('MENU');
                    menuAccess();

                    echo json_encode([
                        'status' => true,
                        'success' => true,
                        'header' => 'Berhasil',
                        'message' => 'Berhasil Mengupdate Menu'
                    ]);
                } else {
                    echo json_encode([
                        'status' => false,
                        'success' => false,
                        'header' => 'Gagal',
                        'message' => 'Gagal Mengupdate Menu'
                    ]);
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
                $temp = $this->api->delete(getEnvi('schema') . '/system/menu', ['id' => $id], true);
                if ($temp->success) {

                    $this->session->unset_userdata('MENU');
                    menuAccess();

                    echo json_encode([
                        'status' => true,
                        'success' => true,
                        'header' => 'Berhasil',
                        'message' => 'Berhasil Menghapus Menu'
                    ]);
                } else {
                    echo json_encode([
                        'status' => false,
                        'success' => false,
                        'header' => 'Gagal',
                        'message' => 'Gagal Menghapus Menu'
                    ]);
                }
            }
            // echo json_encode($result);
        }
    }

    function svgicon()
    {
        loadTemplate('master/menu/v_icon_svg', [], 'admin', false);
    }

    function flaticon()
    {
        loadTemplate('master/menu/v_icon_flaticon', [], 'admin', false);
    }

    function FontAwesomeicon()
    {
        loadTemplate('master/menu/v_icon_font_awesome', [], 'admin', false);
    }

    function LineAwesomeicon()
    {
        loadTemplate('master/menu/v_icon_line_awesome', [], 'admin', false);
    }

    function socialicon()
    {
        loadTemplate('master/menu/v_icon_social', [], 'admin', false);
    }

    function customicon()
    {
        loadTemplate('master/menu/v_icon_custom', [], 'admin', false);
    }
}
