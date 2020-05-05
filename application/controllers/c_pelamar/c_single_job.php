<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_single_job extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('loker_model');
    }

    public function index($id, $id1)
    {
        $data['loker'] = $this->loker_model->GetLokerById($id);
        $data['prs'] = $this->loker_model->GetPerusahaanJoin($id1);
        $data['title'] = 'JOBBLY - Detail Pekerjaan';
        $this->load->view('v_pelamar/header', $data);
        $this->load->view('v_pelamar/single_job', $data);
        $this->load->view('v_pelamar/footer');
    }
}
