<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_single_job extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('loker_model');
    }

    public function index($id)
    {
        $data['loker'] = $this->loker_model->GetLokerById($id);
        $data['title'] = 'JOBBLY - Detail Pekerjaan';
        $this->load->view('v_perusahaan/header', $data);
        $this->load->view('v_perusahaan/single_job', $data);
        $this->load->view('v_perusahaan/footer');
    }
}
