<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pelamar_model extends CI_Model
{

    public function GetPelamar()
    {
        return $this->db->get('reg_pelamar');
    }

    public function GetPelamarById($id)
    {
        return $this->db->get_where("reg_pelamar", array('id_pelamar' => $id))->row();
    }

    public function AddPelamar()
    {
        $foto = $this->input->post('nama');

        $config['upload_path']          = './foto_pelamar';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 5024;
        $config['file_name']            = $foto;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            $error =  $this->upload->display_errors();
            echo $error;
        }

        $upload_data = $this->upload->data();
        $file_name = $upload_data['file_name'];

        $data = array(
            'foto_profil' => $file_name,
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

        $this->db->insert('reg_pelamar', $data);

        // $error = $this->db->error();

        // if ($error != null) {
        //     echo "data belum lengkap";
        //     unlink($upload_data['full_path']);
        // } else {
        //     echo "berhasil";
        // }
    }

    function edit_TampilPelamar($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function updateDataPelamar($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function deletePelamar($id)
    {
        $_id = $this->db->get_where('reg_pelamar', ['id_pelamar' => $id])->row();
        $query = $this->db->delete('reg_pelamar', ['id_pelamar' => $id]);
        if ($query) {
            unlink("foto_pelamar/" . $_id->foto_profil);
        }
    }

    public function getPelamarKeyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('loker');
        $this->db->like('nama_loker', $keyword);
        // $this->db->or_like('harga', $keyword);
        return $this->db->get()->result();
    }

    public function UpdateFile($id, $data)
    {
        $this->db->where('id_pelamar', $id);
        return $this->db->update('reg_pelamar', $data);
    }

    public function AddForm()
    {

        $config['upload_path']          = './form';
        $config['allowed_types']        = 'jpg|png|jpeg|pdf';
        $config['max_size']             = 5024;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('upload_cv') && !$this->upload->do_upload('upload_ijazah')) {
            $error =  $this->upload->display_errors();
            echo $error;
        }

        $this->upload->do_upload('upload_cv');
        $upload_cv = $this->upload->data();
        $file_name1 = $upload_cv['file_name'];

        $this->upload->do_upload('upload_ijazah');
        $upload_ijazah = $this->upload->data();
        $file_name2 = $upload_ijazah['file_name'];

        $data = array(
            'nama_pekerjaan' => $this->input->post('nama_pekerjaan'),
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'alamat_f' => $this->input->post('alamat_f'),
            'no_telp_f' => $this->input->post('no_telp_f'),
            'email_f' => $this->input->post('email_f'),
            'alasan' => $this->input->post('alasan'),
            'upload_cv' => $file_name1,
            'upload_ijazah' => $file_name2,
            'id_pelamar' => $this->input->post('id_pelamar'),
            'id_perusahaan' => $this->input->post('id_perusahaan'),
            'id_loker' => $this->input->post('id_loker')
        );

        $this->db->insert('form_pelamaran', $data);
    }
}
