<?php
class registrasiPelamar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('pelamar_model');
        $this->load->helper('url');
        $this->load->helper('form');
    }

    function index()
    {
        $data['title'] = 'Registrasi Pelamar';
        $this->load->view('registrasi/v_pelamar_registrasi', $data);
    }

    function tambahDataPelamar()
    {
        $this->pelamar_model->AddPelamar();

        $data['title'] = 'JOBBLY - login';
        $this->load->view('header', $data);
        $this->load->view('login/v_login');
    }
}
