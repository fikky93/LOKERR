<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeControl extends CI_Controller
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
        $this->load->view('header', $data);
        $this->load->view('home');
        $this->load->view('footer');
    }

    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['loker'] = $this->loker_model->getLokerKeyword($keyword);
        $data['prs'] = $this->perusahaan_model->GetPerusahaan()->result();
        $data['title'] = 'JOBBLY - Home';
        $this->load->view('header', $data);
        $this->load->view('home_search', $data);
        $this->load->view('footer');
    }
}
