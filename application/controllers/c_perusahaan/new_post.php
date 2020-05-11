<?php
defined('BASEPATH') or exit('No direct script access allowed');

class new_post extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();

        $this->load->model('loker_model');
        $this->load->helper('url');
        $this->load->helper('form');
    }


    public function index()
    {
        $data['title'] = 'JOBBLY - Post Loker';
        $this->load->view('v_perusahaan/header', $data);
        $this->load->view('v_perusahaan/new_post');
        $this->load->view('v_perusahaan/footer');
    }

    function tambahDataLoker()
    {
        $this->form_validation->set_rules('nama_loker', 'Nama_loker', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');
        $this->form_validation->set_rules('alamat_lkr', 'Alamat_lkr', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() == true) {

            $this->loker_model->AddLoker();

            $data['loker'] = $this->loker_model->GetLoker()->result();
            $data['title'] = 'JOBBLY - List';
            $this->load->view('v_perusahaan/header', $data);
            $this->load->view('v_perusahaan/list', $data);
            $this->load->view('v_perusahaan/footer');
        } else {
            redirect('c_perusahaan/new_post');
        }
    }
}
