<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_list extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('loker_model');
        $this->load->model('form_model');
    }


    public function index($id)
    {
        $data['loker'] = $this->loker_model->GetLokerJoin($id);
        $data['title'] = 'JOBBLY - List';
        $this->load->view('v_perusahaan/header', $data);
        $this->load->view('v_perusahaan/list', $data);
        $this->load->view('v_perusahaan/footer');
    }

    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['loker'] = $this->loker_model->getLokerKeyword($keyword);

        $data['title'] = 'JOBBLY - Home';
        $this->load->view('v_perusahaan/header', $data);
        $this->load->view('v_perusahaan/list_search', $data);
        $this->load->view('v_perusahaan/footer');
    }

    public function deleteLoker($id)
    {
        $this->loker_model->deleteLoker($id);
        $this->form_model->deleteForm($id);

        redirect('c_perusahaan/HomePerusahaan');
    }
}
