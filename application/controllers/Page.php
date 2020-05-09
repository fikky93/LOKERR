<?php
class Page extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('masuk') != TRUE) {
      $url = base_url();
      redirect($url);
    }

    $this->load->model('pelamar_model');
    $this->load->model('perusahaan_model');
    $this->load->model('loker_model');
    $this->load->model('form_model');
    $this->load->helper('url');
    $this->load->helper('form');
  }

  function index()
  {
    $this->load->view('admin/v_dashboard');
  }

  //===========================================================================================================================//

  function data_pelamar()
  {
    $data['reg_pelamar'] = $this->pelamar_model->GetPelamar()->result();

    if ($this->session->userdata('akses') == '1') {
      $this->load->view('admin/v_data_pelamar', $data);
    } else {
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  function detailPelamar($id)
  {
    $data['pelamar'] = $this->pelamar_model->GetPelamarById($id);
    $this->load->view('admin/detail/v_detail_pelamar', $data);
  }

  function tambahPelamar()
  {
    $this->load->view('admin/tambah/v_tambah_pelamar');
  }

  function tambahDataPelamar()
  {
    $this->pelamar_model->AddPelamar();

    $data['reg_pelamar'] = $this->pelamar_model->GetPelamar()->result();

    if ($this->session->userdata('akses') == '1') {
      $this->load->view('admin/v_data_pelamar', $data);
    } else {
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  function hapusPelamar($id)
  {
    $this->pelamar_model->deletePelamar($id);

    $data['reg_pelamar'] = $this->pelamar_model->GetPelamar()->result();

    if ($this->session->userdata('akses') == '1') {
      $this->load->view('admin/v_data_pelamar', $data);
    } else {
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  function editPelamar($id)
  {
    $where = array('id_pelamar' => $id);
    $data['pelamar'] = $this->pelamar_model->edit_TampilPelamar($where, 'reg_pelamar')->result();
    $this->load->view('admin/edit/v_edit_pelamar', $data);
  }

  function editDataPelamar()
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

    echo $this->data_pelamar();
  }

  //===========================================================================================================================//
  function data_perusahaan()
  {
    $data['reg_perusahaan'] = $this->perusahaan_model->GetPerusahaan()->result();

    if ($this->session->userdata('akses') == '1') {
      $this->load->view('admin/v_data_perusahaan', $data);
    } else {
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  function detailPerusahaan($id)
  {
    $data['perusahaan'] = $this->perusahaan_model->GetPerusahaanById($id);
    $this->load->view('admin/detail/v_detail_perusahaan', $data);
  }

  function editLevel()
  {
    $id = $this->input->post('id');

    $data = array(
      'level' => $this->input->post('level')
    );

    $where = array(
      'id_perusahaan' => $id
    );

    $this->perusahaan_model->updateDataPerusahaan($where, $data, 'reg_perusahaan');

    redirect('Page/data_perusahaan');
  }

  function tambahPerusahaan()
  {
    $this->load->view('admin/tambah/v_tambah_perusahaan');
  }

  function tambahDataPerusahaan()
  {
    $this->perusahaan_model->AddPerusahaan();

    $data['reg_perusahaan'] = $this->perusahaan_model->GetPerusahaan()->result();

    if ($this->session->userdata('akses') == '1') {
      $this->load->view('admin/v_data_perusahaan', $data);
    } else {
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  function hapusPerusahaan($id)
  {
    $this->perusahaan_model->deletePerusahaan($id);

    $data['reg_perusahaan'] = $this->perusahaan_model->GetPerusahaan()->result();

    if ($this->session->userdata('akses') == '1') {
      $this->load->view('admin/v_data_perusahaan', $data);
    } else {
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  function editPerusahaan($id)
  {

    $where = array('id_perusahaan' => $id);
    $data['pers'] = $this->perusahaan_model->edit_TampilPerusahaan($where, 'reg_perusahaan')->result();

    if ($this->session->userdata('akses') == '1') {
      $this->load->view('admin/edit/v_edit_perusahaan', $data);
    } else {
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  function editDataPerusahaan()
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

    echo $this->data_perusahaan();
  }

  //===========================================================================================================================//

  function data_loker()
  {
    $data['loker'] = $this->loker_model->GetLoker()->result();

    if ($this->session->userdata('akses') == '1') {
      $this->load->view('admin/v_data_loker', $data);
    } else {
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  function detailLoker($id)
  {
    $data['loker'] = $this->loker_model->GetLokerById($id);
    $this->load->view('admin/detail/v_detail_loker', $data);
  }

  function tambahLoker()
  {
    $this->load->view('admin/tambah/v_tambah_loker');
  }

  function tambahDataLoker()
  {
    $this->loker_model->AddLoker();

    $data['loker'] = $this->loker_model->GetLoker()->result();

    if ($this->session->userdata('akses') == '1') {
      $this->load->view('admin/v_data_loker', $data);
    } else {
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  function hapusLoker($id)
  {
    $this->loker_model->deleteLoker($id);

    $data['loker'] = $this->loker_model->GetLoker()->result();

    if ($this->session->userdata('akses') == '1') {
      $this->load->view('admin/v_data_loker', $data);
    } else {
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  function editLoker($id)
  {
    $where = array('id_loker' => $id);
    $data['loker'] = $this->loker_model->edit_TampilLoker($where, 'loker')->result();
    $this->load->view('admin/edit/v_edit_loker', $data);
  }

  function editDataLoker()
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

    if ($this->session->userdata('akses') == '1') {
      $this->load->view('admin/v_data_loker', $data);
    } else {
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  //===========================================================================================================================//

  function data_pelamaran()
  {
    $data['form'] = $this->form_model->GetFormAll()->result();

    if ($this->session->userdata('akses') == '1') {
      $this->load->view('admin/v_data_pelamaran', $data);
    } else {
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  function detailForm($id, $id1)
  {
    $data['form'] = $this->form_model->GetFormById($id);
    $data['pelamar'] = $this->form_model->GetFormJoinFoto($id1);

    if ($this->session->userdata('akses') == '1') {
      $this->load->view('admin/detail/v_detail_pelamaran', $data);
    } else {
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
  function hapusForm($id)
  {
    $this->form_model->deleteFormAdmin($id);

    echo $this->data_pelamaran();
  }
}
