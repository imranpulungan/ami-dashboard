<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Template extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        Initialized();
    }

    function index()
    {
        $this->load->template('auth/v_auth');
    }
}
