<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_profile_pelamar extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('pelamar_model');
        $this->load->model('perusahaan_model');
        $this->load->model('loker_model');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    public function index($id)
    {
        $data['pelamar'] = $this->pelamar_model->GetPelamarById($id);
        $data['title'] = 'JOBBLY - Profil';
        $this->load->view('v_pelamar/header', $data);
        $this->load->view('v_pelamar/profile_pelamar', $data);
        $this->load->view('v_pelamar/footer');
    }
    public function halData($id)
    {
        $data['pelamar'] = $this->pelamar_model->GetPelamarById($id);
        $data['title'] = 'JOBBLY - Data Profil';
        $this->load->view('v_pelamar/header', $data);
        $this->load->view('v_pelamar/profileData_pelamar', $data);
        $this->load->view('v_pelamar/footer');
    }

    public function editDataFotoPelamar()
    {
        $id = $this->input->post('idP');
        $data1 = $this->pelamar_model->GetPelamarById($id);
        $nama = './foto_pelamar/' . $data1->foto_profil;

        if (is_readable($nama) && unlink($nama)) {

            $foto = $this->input->post('namaP');

            $config['upload_path']          = './foto_pelamar/';
            $config['allowed_types']        = 'jpg|png|jpeg';
            $config['max_size']             = 5024;
            $config['file_name']            = $foto;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto')) {
                $error =  $this->upload->display_errors();
                echo $error;
            } else {
                # code...
                $upload_data = $this->upload->data();
                $file_name = $upload_data['file_name'];

                $data = array(
                    'foto_profil' => $file_name
                );
            }

            $where = array(
                'id_pelamar' => $id
            );

            $this->pelamar_model->updateDataPelamar($where, $data, 'reg_pelamar');

            $data['reg_pelamar'] = $this->pelamar_model->GetPelamar()->result();

            $data['loker'] = $this->loker_model->GetLoker()->result();
            $data['prs'] = $this->perusahaan_model->GetPerusahaan()->result();
            $data['title'] = 'JOBBLY - Home';
            $this->load->view('v_pelamar/header', $data);
            $this->load->view('v_pelamar/home', $data);
            $this->load->view('v_pelamar/footer');
        }
    }

    public function editDataPelamar()
    {
        $id = $this->input->post('id');

        $data = array(

            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'email' => $this->input->post('email'),
            'alamat' => $this->input->post('alamat'),
            'no_telp' => $this->input->post('no_telp'),
            'lulusan' => $this->input->post('lulusan'),
            'tinggi_bdn' => $this->input->post('tinggi_bdn'),
            'berat_bdn' => $this->input->post('berat_bdn'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'level' => 2
        );

        $where = array(
            'id_pelamar' => $id
        );

        $this->pelamar_model->updateDataPelamar($where, $data, 'reg_pelamar');

        $data['reg_pelamar'] = $this->pelamar_model->GetPelamar()->result();

        $data['loker'] = $this->loker_model->GetLoker()->result();
        $data['prs'] = $this->perusahaan_model->GetPerusahaan()->result();
        $data['title'] = 'JOBBLY - Home';
        $this->load->view('v_pelamar/header', $data);
        $this->load->view('v_pelamar/home', $data);
        $this->load->view('v_pelamar/footer');
    }
}
