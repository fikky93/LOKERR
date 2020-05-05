<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_contact extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'JOBBLY - Contact';
        $this->load->view('v_perusahaan/header', $data);
        $this->load->view('v_perusahaan/contact');
        $this->load->view('v_perusahaan/footer');
    }
}
