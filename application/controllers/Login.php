<?php
class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}

	function index()
	{
		$data['title'] = 'JOBBLY - login';
		$this->load->view('header', $data);
		$this->load->view('login/v_login');
	}

	function auth()
	{
		$username = htmlspecialchars($this->input->post('username', TRUE), ENT_QUOTES);
		$password = htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES);

		$cek_admin = $this->login_model->auth_admin($username, $password);
		$cek_pelamar = $this->login_model->auth_pelamar($username, $password);
		$cek_perusahaan = $this->login_model->auth_perusahaan($username, $password);

		if ($cek_admin->num_rows() > 0) { //jika login sebagai dosen
			$data = $cek_admin->row_array();
			$this->session->set_userdata('masuk', TRUE);
			if ($data['level'] == '1') { //Akses admin
				$this->session->set_userdata('akses', '1');
				$this->session->set_userdata('ses_id', $data['id_admin']);
				$this->session->set_userdata('ses_nama', $data['username']);
				redirect('page');
			} else { //akses dosen
				$this->session->set_userdata('akses', '2');
				$this->session->set_userdata('ses_id', $data['id_admin']);
				$this->session->set_userdata('ses_nama', $data['username']);
				redirect('page');
			}
		} else if ($cek_pelamar->num_rows() > 0) { //jika login sebagai mahasiswa

			$data = $cek_pelamar->row_array();
			$this->session->set_userdata('masuk', TRUE);
			$this->session->set_userdata('akses', '3');
			$this->session->set_userdata('ses_id', $data['id_pelamar']);
			$this->session->set_userdata('ses_nama', $data['nama']);
			$this->session->set_userdata('ses_alamat', $data['alamat']);
			$this->session->set_userdata('ses_no_telp', $data['no_telp']);
			$this->session->set_userdata('ses_email', $data['email']);
			redirect('c_pelamar/HomePelamar');
		} else if ($cek_perusahaan->num_rows() > 0) { //jika login sebagai mahasiswa

			$data = $cek_perusahaan->row_array();
			$this->session->set_userdata('masuk', TRUE);
			$this->session->set_userdata('akses', '3');
			$this->session->set_userdata('ses_id', $data['id_perusahaan']);
			$this->session->set_userdata('ses_nama', $data['nama']);
			redirect('c_perusahaan/HomePerusahaan');
		} else {  // jika username dan password tidak ditemukan atau salah
			$url = base_url('login');
			echo $this->session->set_flashdata('msg', 'Username Atau Password Salah');
			redirect($url);
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		$url = base_url('');
		redirect($url);
	}
}
