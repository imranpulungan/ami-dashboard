<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    private $view = [];
    private $routers;

    public function __construct()
    {
        parent::__construct();

        Initialized();
    }

    public function index()
    {
        isHasAccessToModule();

        if (!isHeader404()) {
            $this->view['title'] = getLangKey('title');
            $this->view['content'] = 'v_dashboard';
            $this->view['css'] = [
                'libs/datatables2/css/dataTables.bootstrap5.min.css',
                'libs/datatables2/css/responsive.bootstrap.min.css',
                'libs/datatables2/css/select.dataTables.min.css',
                'libs/datatables2/css/buttons.dataTables.min.css',
                'libs/flatpickr/flatpickr.min.css',
                'libs/jsvectormap/css/jsvectormap.min.css',
                'libs/swiper/swiper-bundle.min.css'
            ];
            $this->view['javascript'] = [
                'libs/datatables2/js/jquery-3.6.3.min.js',
                'libs/moment/moment.js',
                'libs/datatables2/js/jquery.dataTables.min.js',
                'libs/select2/js/select2.min.js',
                'libs/datatables2/js/dataTables.select.min.js',
                'libs/datatables2/js/dataTables.bootstrap5.min.js',
                'libs/datatables2/js/dataTables.responsive.min.js',
                'libs/datatables2/js/dataTables.buttons.min.js',
                'libs/datatables2/js/jszip.min.js',
                'libs/select2/js/select2.min.js',
                'libs/datatables2/js/buttons.html5.min.js',
                'libs/datatables2/js/buttons.print.min.js',
                'libs/datatables2/js/dataTables.fixedColumns.min.js',
                'libs/apexcharts/apexcharts.min.js',
                'libs/jsvectormap/js/jsvectormap.min.js',
                'libs/jsvectormap/maps/world-merc.js',
                'libs/swiper/swiper-bundle.min.js',
                'js/pages/dashboard-ecommerce.init.js'
            ];

            $this->view['java'] = [
                'path' => 'dashboard',
                'file' => 'dashboard'
            ];

            loadTemplate('layout', $this->view);
        }
    }

    public function dashboard()
    {
        error_404();
    }

    public function asset()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $result = $this->api->getData(getEnvi('schema') . '/dashboard/asset', null, true);
            echo base64_encode(json_encode($result));        
        } else {
            error_404();
        }
    }

    public function load()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            // $data['tahun'] = $this->input->post('tahun');
            // $data['bulan'] = $this->input->post('bulan');
            // $data['role'] = getSession('role');
            // $data['id_user'] = getSession('token');
            $result = $this->api->getData(getEnvi('schema') . '/dashboard/dashboard', $data, true);
            echo base64_encode(json_encode($result));
            // echo json_encode($result);
        } else {
            error_404();
        }
    }

    public function reportToday(){
        // if ($this->input->post('scrty') == true && hasOwnProgram()) {            
            $result = $this->api->getData(getEnvi('schema') . '/report/today?today='. $this->input->get('today'), null, true);
            echo json_encode($result);
        // } else {
        //     error_404();
        // }
    }

    public function historyReport()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $data['id'] = 'table';
            $data['start'] = $this->input->post('start');
            $data['end'] = $this->input->post('end');
            $data['status'] = $this->input->post('status');
            $data['jenis'] = $this->input->post('jenis');
            $result = $this->api->getData(getEnvi('schema') . '/dashboard/dashboard', $data, true);
            echo base64_encode(json_encode($result));
        } else {
            error_404();
        }
    }
}
