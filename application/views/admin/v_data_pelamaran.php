<!DOCTYPE html>
<html>

<head>
  <title>Data Pelamaran</title>
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
        <h2>Data Pelamaran</h2>
        <table class="table table-striped table-bordered table-sm">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Pekerjaan</th>
              <th>Nama lengkap</th>
              <th>Alamat</th>
              <th>No Telp</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($form as $f) {
            ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $f->nama_pekerjaan ?></td>
                <td><?= $f->nama_lengkap ?></td>
                <td><?= $f->alamat_f ?></td>
                <td><?= $f->no_telp_f ?></td>
                <td>
                  <a href="<?php echo base_url(); ?>index.php/Page/detailForm/<?= $f->id_form_pelamaran ?>/<?= $f->id_pelamar ?>" class="btn btn-info">Detail</a>
                  <a href="<?php echo base_url(); ?>index.php/Page/hapusForm/<?= $f->id_form_pelamaran  ?>" class="btn btn-danger">Hapus</a>
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