<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomePelamar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('loker_model');
        $this->load->model('perusahaan_model');
        $this->load->helper('form');
    }

    public function index()
    {
        $data['loker'] = $this->loker_model->GetLoker()->result();
        $data['prs'] = $this->perusahaan_model->GetPerusahaan()->result();
        $data['title'] = 'JOBBLY - Home';
        $this->load->view('v_pelamar/header', $data);
        $this->load->view('v_pelamar/home', $data);
        $this->load->view('v_pelamar/footer');
    }

    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['loker'] = $this->loker_model->getLokerKeyword($keyword);
        $data['prs'] = $this->perusahaan_model->GetPerusahaan()->result();
        $data['title'] = 'JOBBLY - Home';
        $this->load->view('v_pelamar/header', $data);
        $this->load->view('v_pelamar/home_search', $data);
        $this->load->view('v_pelamar/footer');
    }

    public function searchh()
    {
        $keyword = $this->input->post('keyword');
        $data['loker'] = $this->loker_model->getLokerKeyword($keyword);
        $data['prs'] = $this->perusahaan_model->GetPerusahaan()->result();
        $data['title'] = 'JOBBLY - Home';
        $this->load->view('v_pelamar/header', $data);
        $this->load->view('v_pelamar/job_postSearch', $data);
        $this->load->view('v_pelamar/footer');
    }
}
