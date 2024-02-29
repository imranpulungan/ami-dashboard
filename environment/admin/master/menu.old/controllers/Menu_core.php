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
            // echo $this->uri->segment(3);
            // exit();
            if ($current_menu->data[0]->level == 3) {
                $this->view['parent']   = $current_menu->data[0]->parent;
            }
            $this->view['menu']    = $this->api->get(getEnvi('schema') . '/system/menu/all', true);
            $this->view['title']        = $current_menu->data[0]->nm_menu;
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
                // 'libs/datatables/js/jquery.dataTables.min.js',
                // 'libs/datatables/js/dataTables.bootstrap5.min.js',
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
        echo $this->nm_model->get_by_id($id);
    }

    public  function getall()
    {
        echo $this->nm_model->get_all();
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
                    'status' => false,
                    'msg' => 'Nama Menu tidak boleh kosong'
                ];
                echo json_encode($msg);
            } elseif ($LINK_MENU == '') {
                $msg = [
                    'status' => false,
                    'msg' => 'Link Menu tidak boleh kosong'
                ];
                echo json_encode($msg);
            } else {
                $ICON = trim(preg_replace('/\s+/', ' ', preg_replace("/<!--.*?-->/", "", $ICON)));
                $data['nama']   = $NAMA;
                $data['link']   = $LINK_MENU;
                $data['icon']   = htmlspecialchars($ICON);
                $data['status'] = $STATUS;

                $temp = '';
                $msg = [
                    'status' => false,
                    'msg' => 'Menu Gagal Disimpan'
                ];

                if ($ID_MENU == '') {
                    $temp = $this->api->post(getEnvi('schema') . '/system/menu', $data, true);
                } else {
                    $data['id']     = $ID_MENU;
                    $temp = $this->api->put(getEnvi('schema') . '/system/menu', $data, true);
                }

                if ($temp !== '') {
                    if ($temp->success) {
                        menuAccess('reset');
                        $msg = [
                            'status' => true,
                            'msg' => 'Menu Berhasil Disimpan'
                        ];
                    } else {
                        $msg = [
                            'status' => false,
                            'msg' => $temp->message
                        ];
                    }
                }
                echo json_encode($data);
            }
        } else {
            error_404();
        }
    }

    public function update()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $MENU   = json_decode($this->input->post('menu'));

            if ($MENU !== '') {
                $this->update_all($MENU);
                menuAccess('reset');
            }

            $result['status'] = true;
            $result['msg'] = 'Menu berhasil diubah';
            echo json_encode($result);
        }
    }

    private function update_all($MENU)
    {
        foreach ($MENU as $m) {
            $data = [
                'id' => $m->id,
                'nama' => $m->nama,
                'link' => $m->link,
                'icon' => $m->ico,
                'status' => $m->status,
                'parent' => $m->parent,
                'level' => $m->depth,
                'urut' => $m->urut,
                'urut_global' => $m->urut_global
            ];

            $this->api->put(getEnvi('schema') . '/system/menu/all', $data, true);

            if ($m->children) {
                $children = $m->children;
                if (sizeof($children) > 0) {
                    $this->update_all($children);
                }
            }
        }
        return true;
    }

    public function delete()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $id = $this->input->post('id');

            if ($id !== '') {
                $temp = $this->api->delete(getEnvi('schema') . '/system/menu', ['id' => $id], true);
                if ($temp->success) {
                    $result['status'] = true;
                    $result['msg'] = 'Berhasil Menghapus Menu';
                } else {
                    $result['status'] = false;
                    $result['msg'] = 'Gagal Menghapus Menu';
                }
            }
            echo json_encode($result);
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
