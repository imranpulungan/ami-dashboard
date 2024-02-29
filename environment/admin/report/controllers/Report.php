<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Report extends CI_Controller
{
    private $view = [];
    private $report_url;

    public function __construct()
    {
        parent::__construct();
        Initialized();

        $this->report_url = "http://localhost:81/smt/";
    }

    public function index()
    {
        isHasAccessToModule();

        if (!isHeader404()) {
            $this->view['title'] = getLangKey('title');
            $this->view['content'] = 'v_report';
            $this->view['css'] = [
                'libs/select2/css/select2.min.css'
            ];
            $this->view['javascript'] = [
                'libs/select2/js/select2.min.js',
                'libs/flatpickr/plugins/rangePlugin.js',
            ];

            $this->view['java'] = [
                'path' => 'report',
                'file' => 'report'
            ];

            $this->view['report_url'] = $this->report_url;

            $this->view['grup'] = $this->api->get('smt/master/group_kerja', true);

            loadTemplate('layout', $this->view);
        }
    }

    public function report_weekly()
    {
        $this->load->library('PHPExcel');
        $dari = $this->input->post('dari_weekly');
        $sampai = $this->input->post('sampai_weekly');
        if ($dari !== '' && $sampai !== '') {
            $month = [
                'January'   => 'Jan',
                'February'  => 'Feb',
                'March'     => 'Mar',
                'April'     => 'Apr',
                'May'       => 'Mei',
                'June'      => 'Jun',
                'July'      => 'Jul',
                'August'    => 'Agu',
                'September' => 'Sep',
                'October'   => 'Okt',
                'November'  => 'Nop',
                'December'  => 'Des',
            ];
            $pecDari = explode(' ', $dari);
            $pecSampai = explode(' ', $sampai);

            $this->view['data'] = [
                'dari' => $pecDari[0] . ' ' . $month[$pecDari[1]],
                'sampai' => $pecSampai[0] . ' ' . $month[$pecSampai[1]] . ' ' . $pecSampai[2],
            ];

            loadTemplate('v_weekly_excel', $this->view);
        } else {
            error_404();
        }
    }

    public function comp_report()
    {
        $this->load->library('PHPExcel');
        $dari = $this->input->post('dari_compi');
        $sampai = $this->input->post('sampai_compi');
        if ($dari !== '' && $sampai !== '') {
            $month = [
                'January'   => 'Jan',
                'February'  => 'Feb',
                'March'     => 'Mar',
                'April'     => 'Apr',
                'May'       => 'Mei',
                'June'      => 'Jun',
                'July'      => 'Jul',
                'August'    => 'Agu',
                'September' => 'Sep',
                'October'   => 'Okt',
                'November'  => 'Nop',
                'December'  => 'Des',
            ];
            $pecDari = explode(' ', $dari);
            $pecSampai = explode(' ', $sampai);

            $this->view['data'] = [
                'dari' => $pecDari[0] . ' ' . $month[$pecDari[1]],
                'sampai' => $pecSampai[0] . ' ' . $month[$pecSampai[1]] . ' ' . $pecSampai[2],
                'data' => $this->api->get('smt/report/lap_comp_report', true)
            ];

            loadTemplate('v_comp_report', $this->view);
        } else {
            error_404();
        }
    }

    public function comp_form()
    {
        $this->load->library('PHPExcel');
        $dari = $this->input->post('dari_weekly');
        $sampai = $this->input->post('sampai_weekly');
        if ($dari !== '' && $sampai !== '') {
            $month = [
                'January'   => 'Jan',
                'February'  => 'Feb',
                'March'     => 'Mar',
                'April'     => 'Apr',
                'May'       => 'Mei',
                'June'      => 'Jun',
                'July'      => 'Jul',
                'August'    => 'Agu',
                'September' => 'Sep',
                'October'   => 'Okt',
                'November'  => 'Nop',
                'December'  => 'Des',
            ];
            $pecDari = explode(' ', $dari);
            $pecSampai = explode(' ', $sampai);

            $this->view['data'] = [
                'dari' => $pecDari[0] . ' ' . $month[$pecDari[1]],
                'sampai' => $pecSampai[0] . ' ' . $month[$pecSampai[1]] . ' ' . $pecSampai[2],
            ];

            loadTemplate('v_weekly_excel', $this->view);
        } else {
            error_404();
        }
    }
}
