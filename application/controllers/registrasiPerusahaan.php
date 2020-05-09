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
        $this->load->view('header', $data);
        $this->load->view('registrasi/v_perusahaan_registrasi', $data);
    }

    function tambahDataPerusahaan()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_telp', 'No_telp', 'required');
        $this->form_validation->set_rules('fax', 'Fax', 'required');
        $this->form_validation->set_rules('website', 'Website', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        $this->form_validation->set_rules('contact_person', 'Contact_person', 'required');

        if ($this->form_validation->run() == true) {
            $this->perusahaan_model->AddPerusahaan();
        } else {
            $data['title'] = 'Registrasi perusahaan';
            $this->load->view('registrasi/v_perusahaan_registrasi', $data);
        }


        $data['title'] = 'JOBBLY - login';
        $this->load->view('header', $data);
        $this->load->view('login/v_login');
    }
}
