<!DOCTYPE html>
<html>

<head>
  <title>Data Pelamar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="<?php echo base_url() . 'asset/admin/css/bootstrap.css' ?>" rel="stylesheet">


</head>

<body>

  <div class="container">
    <?php $this->load->view('admin/menu'); ?>
    <!--Include menu-->
    <div class="col-md-12">
      <div class="row">
        <h2>Data Pelamar</h2> <a href="<?php echo base_url(); ?>index.php/Page/tambahPelamar" class="btn btn-primary">Tambah</a> <br><br>
        <table class="table table-striped table-bordered ">
          <thead>
            <tr>
              <th>No</th>
              <th>Foto profil</th>
              <th>Nama</th>
              <th>Username</th>
              <th>Alamat</th>
              <th>Tgl lahir</th>
              <th>Email</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($reg_pelamar as $pelamar) {
            ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td>
                  <center><img src="<?php echo base_url(); ?>foto_pelamar/<?php echo $pelamar->foto_profil ?>" alt="" width="100"></center>
                </td>
                <td><?php echo $pelamar->nama ?></td>
                <td><?php echo $pelamar->username ?></td>
                <td><?php echo $pelamar->alamat ?></td>
                <td><?php echo $pelamar->tgl_lahir ?></td>
                <td><?php echo $pelamar->email ?></td>

                <td>
                  <a href="<?php echo base_url(); ?>index.php/Page/detailPelamar/<?php echo $pelamar->id_pelamar ?>" class="btn btn-info">Detail</a>
                  <a href="<?php echo base_url(); ?>index.php/Page/hapusPelamar/<?php echo $pelamar->id_pelamar ?>" class="btn btn-danger">Hapus</a>
                  <a href="<?php echo base_url(); ?>index.php/Page/editPelamar/<?php echo $pelamar->id_pelamar ?>" class="btn btn-warning">Edit</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div> <!-- /container -->




  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="<?php echo base_url() . 'asset/admin/js/jquery.js' ?>"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="<?php echo base_url() . 'asset/admin/js/bootstrap.min.js' ?>"></script>


</body>

</html>