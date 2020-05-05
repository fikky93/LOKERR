<?php
defined('BASEPATH') or exit('No direct script access allowed');

class editJob extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('perusahaan_model');
        $this->load->model('loker_model');
    }

    public function edit($id)
    {
        $data['loker'] = $this->loker_model->GetLokerById($id);
        $data['title'] = 'JOBBLY - Edit Job';
        $this->load->view('v_perusahaan/header', $data);
        $this->load->view('v_perusahaan/editJob', $data);
        $this->load->view('v_perusahaan/footer');
    }

    public function halDataLoker($id)
    {
        $data['loker'] = $this->loker_model->GetLokerById($id);
        $data['title'] = 'JOBBLY - Edit Data Job';
        $this->load->view('v_perusahaan/header', $data);
        $this->load->view('v_perusahaan/editDataJob', $data);
        $this->load->view('v_perusahaan/footer');
    }

    public function editPosterLoker()
    {
        $id = $this->input->post('idL');
        $data = $this->loker_model->GetLokerById($id);
        $nama = './foto_loker/' . $data->gambar;

        if (is_readable($nama) && unlink($nama)) {

            $foto = $this->input->post('nama');

            $config['upload_path']          = './foto_loker';
            $config['allowed_types']        = 'jpg|png|jpeg';
            $config['max_size']             = 5028;
            $config['file_name']            = $foto;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('poster')) {
                $error =  $this->upload->display_errors();
                echo $error;
            } else {

                $upload_data = $this->upload->data();
                $file_name = $upload_data['file_name'];

                $data = array(
                    'gambar' => $file_name
                );
            }

            $where = array(
                'id_loker' => $id
            );

            $this->loker_model->updateDataLoker($where, $data, 'loker');

            $data['loker'] = $this->loker_model->GetLoker()->result();
            $data['title'] = 'JOBBLY - Home';
            $this->load->view('v_perusahaan/header', $data);
            $this->load->view('v_perusahaan/home');
            $this->load->view('v_perusahaan/footer');
        }
    }

    public function editDataLoker()
    {
        $id = $this->input->post('id');

        $data = array(
            'nama_loker' => $this->input->post('nama_loker'),
            'alamat_lkr' => $this->input->post('alamat'),
            'deskripsi' => $this->input->post('deskripsi'),
            'kategori' => $this->input->post('kategori'),
            'id_perusahaan' => $this->input->post('id_perusahaan')
        );

        $where = array(
            'id_loker' => $id
        );

        $this->loker_model->updateDataLoker($where, $data, 'loker');

        $data['loker'] = $this->loker_model->GetLoker()->result();
        $data['title'] = 'JOBBLY - Home';
        $this->load->view('v_perusahaan/header', $data);
        $this->load->view('v_perusahaan/home');
        $this->load->view('v_perusahaan/footer');
    }
}
