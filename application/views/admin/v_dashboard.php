<!DOCTYPE html>
<html>

<head>
  <title>Masuk</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="<?php echo base_url() . 'asset/admin/css/bootstrap.css' ?>" rel="stylesheet">


</head>

<body>

  <div class="container">
    <?php $this->load->view('admin/menu'); ?>
    <!--Include menu-->
    <div class="container">
      <div class="row">
        <h2>Welcome back <?php echo $this->session->userdata('ses_nama'); ?></h2>
      </div>
    </div>
  </div> <!-- /container -->


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="<?php echo base_url() . 'asset/admin/js/jquery.js' ?>"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="<?php echo base_url() . 'asset/adminjs/bootstrap.min.js' ?>"></script>

</body>

</html>