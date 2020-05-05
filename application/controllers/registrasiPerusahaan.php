<?php
class registrasiPerusahaan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('perusahaan_model');
        $this->load->helper('url');
        $this->load->helper('form');
    }

    function index()
    {
        $data['title'] = 'Registrasi perusahaan';
        $this->load->view('registrasi/v_perusahaan_registrasi', $data);
    }

    function tambahDataPerusahaan()
    {
        $this->perusahaan_model->AddPerusahaan();

        $data['title'] = 'JOBBLY - login';
        $this->load->view('header', $data);
        $this->load->view('login/v_login');
    }
}
