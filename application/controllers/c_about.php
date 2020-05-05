<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_about extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'JOBBLY - About';
        $this->load->view('header', $data);
        $this->load->view('about');
        $this->load->view('footer');
    }
}
