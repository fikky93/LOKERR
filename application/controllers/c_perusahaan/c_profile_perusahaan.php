<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_profile_perusahaan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('perusahaan_model');
        $this->load->model('loker_model');
    }

    public function index($id)
    {
        $data['perusahaan'] = $this->perusahaan_model->GetPerusahaanById($id);
        $data['title'] = 'JOBBLY - Profil';
        $this->load->view('v_perusahaan/header', $data);
        $this->load->view('v_perusahaan/profile_perusahaan', $data);
        $this->load->view('v_perusahaan/footer');
    }

    public function HalEditData($id)
    {
        $data['perusahaan'] = $this->perusahaan_model->GetPerusahaanById($id);
        $data['title'] = 'JOBBLY - Data Profil';
        $this->load->view('v_perusahaan/header', $data);
        $this->load->view('v_perusahaan/profileData_perusahaan', $data);
        $this->load->view('v_perusahaan/footer');
    }

    function editDataLogoP()
    {
        $id = $this->input->post('idP');
        $data1 = $this->perusahaan_model->GetPerusahaanById($id);
        $nama = './foto_perusahaan/' . $data1->logo;

        if (is_readable($nama) && unlink($nama)) {

            $foto = $this->input->post('namaP');

            $config['upload_path']          = './foto_perusahaan/';
            $config['allowed_types']        = 'jpg|png|jpeg';
            $config['max_size']             = 5024;
            $config['file_name']            = $foto;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('logo')) {
                $error =  $this->upload->display_errors();
                echo $error;
            } else {

                $upload_data = $this->upload->data();
                $file_name = $upload_data['file_name'];

                $data = array(
                    'logo' => $file_name
                );
            }

            $where = array(
                'id_perusahaan' => $id
            );

            $this->perusahaan_model->updateDataPerusahaan($where, $data, 'reg_perusahaan');


            $data['loker'] = $this->loker_model->GetLoker()->result();
            $data['title'] = 'JOBBLY - Home';
            $this->load->view('v_perusahaan/header', $data);
            $this->load->view('v_perusahaan/home');
            $this->load->view('v_perusahaan/footer');
        }
    }

    public function editDataPerusahaan()
    {

        $id = $this->input->post('id');

        $data = array(
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'email' => $this->input->post('email'),
            'alamat' => $this->input->post('alamat'),
            'no_telp' => $this->input->post('no_telp'),
            'fax' => $this->input->post('fax'),
            'website' => $this->input->post('website'),
            'deskripsi' => $this->input->post('deskripsi'),
            'contact_person' => $this->input->post('contact_person'),
            'level' => 3
        );

        $where = array(
            'id_perusahaan' => $id
        );

        $this->perusahaan_model->updateDataPerusahaan($where, $data, 'reg_perusahaan');

        $data['loker'] = $this->loker_model->GetLoker()->result();
        $data['title'] = 'JOBBLY - Home';
        $this->load->view('v_perusahaan/header', $data);
        $this->load->view('v_perusahaan/home');
        $this->load->view('v_perusahaan/footer');
    }
}
