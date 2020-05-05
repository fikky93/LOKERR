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
              <th>Nama</th>
              <th>Alamat</th>
              <th>No Telp</th>
              <th>Email</th>
              <th>CV</th>
              <th>Ijazah</th>
              <th></th>
              <th>Nama Perusahaan</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>

            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
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