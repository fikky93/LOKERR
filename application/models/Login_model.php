<?php
class Login_model extends CI_Model
{
	//cek nip dan password dosen
	function auth_admin($username, $password)
	{
		$query = $this->db->query("SELECT * FROM admin WHERE username='$username' AND password = '$password' LIMIT 1");
		return $query;
	}

	//cek nim dan password mahasiswa
	function auth_pelamar($username, $password)
	{
		$query = $this->db->query("SELECT * FROM reg_pelamar WHERE username='$username' AND password ='$password' ");
		return $query;
	}

	function auth_perusahaan($username, $password)
	{
		$query = $this->db->query("SELECT * FROM reg_perusahaan WHERE username='$username' AND password ='$password' ");
		return $query;
	}
}
