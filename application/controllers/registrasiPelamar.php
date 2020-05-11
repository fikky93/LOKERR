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
        $this->load->view('header', $data);
        $this->load->view('registrasi/v_pelamar_registrasi', $data);
    }

    function tambahDataPelamar()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tgl_lahir', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('no_telp', 'No_telp', 'required');
        $this->form_validation->set_rules('tinggi_bdn', 'Tinggi_bdn', 'required');
        $this->form_validation->set_rules('berat_bdn', 'Berat_bdn', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('lulusan', 'Lulusan', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis_kelamin', 'required');

        if ($this->form_validation->run() == true) {
            $this->pelamar_model->AddPelamar();

            $data['title'] = 'JOBBLY - login';
            $this->load->view('header', $data);
            $this->load->view('login/v_login');
        } else {
            $data['title'] = 'Registrasi Pelamar';
            $this->load->view('header', $data);
            $this->load->view('registrasi/v_pelamar_registrasi', $data);
        }
    }
}
