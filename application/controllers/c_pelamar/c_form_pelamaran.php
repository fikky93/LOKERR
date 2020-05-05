<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_form_pelamaran extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('pelamar_model');
        $this->load->model('loker_model');

        $this->load->helper('form');
        $this->load->helper('url');
    }

    public function index($id)
    {
        $data['loker'] = $this->loker_model->GetLokerById($id);
        $data['title'] = 'JOBBLY - Form Pelamaran';
        $this->load->view('v_pelamar/header', $data);
        $this->load->view('v_pelamar/form_pelamaran', $data);
        $this->load->view('v_pelamar/footer');
    }

    public function tambahDataForm()
    {
        $this->pelamar_model->AddForm();

        $data['loker'] = $this->loker_model->GetLoker()->result();
        $data['title'] = 'JOBBLY - Home';
        $this->load->view('v_pelamar/header', $data);
        $this->load->view('v_pelamar/home');
        $this->load->view('v_pelamar/footer');
    }
}
