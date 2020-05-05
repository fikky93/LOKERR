<!DOCTYPE html>
<html>

<head>
  <title>Data Perusahaan</title>
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
        <h2>Data Perusahaan</h2> <a href="<?php echo base_url(); ?>index.php/Page/tambahPerusahaan" class="btn btn-primary">Tambah</a> <br><br>
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Logo</th>
              <th>Nama</th>
              <th>Username</th>

              <th>Email</th>
              <th>Alamat</th>

              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($reg_perusahaan as $perusahaan) {
            ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td>
                  <center><img src="<?php echo base_url(); ?>foto_perusahaan/<?php echo $perusahaan->logo ?>" alt="" width="100"></center>
                </td>
                <td><?php echo $perusahaan->nama ?></td>
                <td><?php echo $perusahaan->username ?></td>

                <td><?php echo $perusahaan->email ?></td>
                <td><?php echo $perusahaan->alamat ?></td>

                <td>
                  <a href="<?php echo base_url(); ?>index.php/Page/detailPerusahaan/<?php echo $perusahaan->id_perusahaan ?>" class="btn btn-info">Detail</a>
                  <a href="<?php echo base_url(); ?>index.php/Page/hapusPerusahaan/<?php echo $perusahaan->id_perusahaan ?>" class="btn btn-danger">Hapus</a>
                  <a href="<?php echo base_url(); ?>index.php/Page/editPerusahaan/<?php echo $perusahaan->id_perusahaan ?>" class="btn btn-warning">Edit</a>
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