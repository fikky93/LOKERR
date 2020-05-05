<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_contact extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'JOBBLY - Contact';
        $this->load->view('header', $data);
        $this->load->view('contact');
        $this->load->view('footer');
    }
}
