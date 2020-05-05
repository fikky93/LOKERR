<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomePerusahaan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('loker_model');
    }

    public function index()
    {
        $data['loker'] = $this->loker_model->GetLoker()->result();
        $data['title'] = 'JOBBLY - Home';
        $this->load->view('v_perusahaan/header', $data);
        $this->load->view('v_perusahaan/home');
        $this->load->view('v_perusahaan/footer');
    }
}
