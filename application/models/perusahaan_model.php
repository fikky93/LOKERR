<?php
defined('BASEPATH') or exit('No direct script access allowed');

class perusahaan_model extends CI_Model
{

    public function GetPerusahaan()
    {
        return $this->db->get('reg_perusahaan');
    }

    public function GetPerusahaanById($id)
    {
        return $this->db->get_where("reg_perusahaan", array('id_perusahaan' => $id))->row();
    }

    public function UpdateFile($id, $data)
    {
        $this->db->where('id_perusahaan', $id);
        return $this->db->update('reg_perusahaan', $data);
    }

    function updateDataPerusahaan($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function AddPerusahaan()
    {
        $foto = $this->input->post('nama');

        $config['upload_path']          = './foto_perusahaan';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 5000;
        $config['file_name']            = $foto;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('logo')) {
            if ($this->upload->display_errors()) {
                echo $this->session->set_flashdata('msg', 'BELUM MEMASUKKAN LOGO');
            }
        }

        $upload_data = $this->upload->data();
        $file_name = $upload_data['file_name'];

        $data = array(
            'logo' => $file_name,
            'nama' => $this->input->post('nama', TRUE),
            'username' => $this->input->post('username', TRUE),
            'password' => $this->input->post('password', TRUE),
            'email' => $this->input->post('email', TRUE),
            'alamat' => $this->input->post('alamat', TRUE),
            'no_telp' => $this->input->post('no_telp', TRUE),
            'fax' => $this->input->post('fax', TRUE),
            'website' => $this->input->post('website', TRUE),
            'deskripsi' => $this->input->post('deskripsi', TRUE),
            'contact_person' => $this->input->post('contact_person', TRUE),
            'level' => 0
        );

        $this->db->insert('reg_perusahaan', $data);
        echo $this->session->set_flashdata('msg', 'PERUSAHAAN BERHASIL MENDAFTAR');
    }

    public function deletePerusahaan($id)
    {
        $_id = $this->db->get_where('reg_perusahaan', ['id_perusahaan' => $id])->row();
        $query = $this->db->delete('reg_perusahaan', ['id_perusahaan' => $id]);
        if ($query) {
            unlink("foto_perusahaan/" . $_id->logo);
        }
    }
}
