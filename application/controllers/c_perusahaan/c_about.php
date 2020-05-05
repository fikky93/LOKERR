<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_about extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'JOBBLY - About';
        $this->load->view('v_perusahaan/header', $data);
        $this->load->view('v_perusahaan/about');
        $this->load->view('v_perusahaan/footer');
    }
}
