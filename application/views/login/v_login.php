<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $title ?></title>

  <!-- Font Icon -->
  <link rel="stylesheet" href="<?php echo base_url() . 'asset/login/fonts/material-icon/css/material-design-iconic-font.min.css' ?>">

  <!-- Main css -->
  <link rel="stylesheet" href="<?php echo base_url() . 'asset/login/css/style.css' ?>">
</head>

<body>

  <div class="main">
    <!-- Sing in  Form -->
    <section class="sign-in">
      <div class="container">
        <div class="signin-content">
          <div class="signin-image">
            <figure><img src="<?php echo base_url() . 'asset/login/images/signin-image.jpg' ?>" alt="sing up image"></figure>

            <a href="<?php echo base_url(); ?>registrasiPelamar" class="signup-image-link">
              <h6>Create applicant account</h6>
            </a>
            <a href="<?php echo base_url(); ?>registrasiPerusahaan" class="signup-image-link">
              <h6>Create a company account</h6>
            </a>

          </div>

          <div class="signin-form">
            <h2 class="form-title">Sign in</h2>
            <form method="POST" class="register-form" id="login-form" action="<?php echo base_url() . 'index.php/login/auth' ?>">
              <?php echo $this->session->flashdata('msg'); ?>
              <div class="form-group">

                <input type="text" name="username" id="username" class="form-control" placeholder="Username" />
              </div>
              <div class="form-group">

                <input type="password" name="password" id="password" class="form-control" placeholder="Password" />
              </div>

              <div class="form-group form-button">
                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
              </div>
            </form>

          </div>
        </div>
      </div>
    </section>

  </div>

  <!-- JS -->
  <script src="<?php echo base_url() . 'asset/login/vendor/jquery/jquery.min.js' ?>"></script>
  <script src="<?php echo base_url() . 'asset/login/js/main.js' ?>"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>