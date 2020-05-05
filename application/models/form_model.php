<?php
class form_model extends CI_Model
{
    public function GetFormJoin($id)
    {
        $this->db->select('*');
        $this->db->from('form_pelamaran');
        $this->db->join('reg_perusahaan', 'reg_perusahaan.id_perusahaan = form_pelamaran.id_perusahaan', 'left');
        $this->db->where('reg_perusahaan.id_perusahaan', $id);
        return $this->db->get()->result();
    }

    public function GetFormJoinFoto($id1)
    {
        $this->db->select('foto_profil');
        $this->db->from('form_pelamaran');
        $this->db->join('reg_pelamar', 'reg_pelamar.id_pelamar = form_pelamaran.id_pelamar');
        $this->db->where('reg_pelamar.id_pelamar', $id1);
        return $this->db->get()->result();
    }

    public function GetFormById($id)
    {
        return $this->db->get_where("form_pelamaran", array('id_form_pelamaran' => $id))->row();
    }

    public function deleteForm($id)
    {
        $_id = $this->db->get_where('form_pelamaran', ['id_loker' => $id])->row();
        $query = $this->db->delete('form_pelamaran', ['id_loker' => $id]);
        if ($query) {
            unlink("form/" . $_id->upload_cv);
            unlink("form/" . $_id->upload_ijazah);
        }
    }
}
