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

            <a href="<?php echo base_url(); ?>registrasiPelamar" class="signup-image-link">Create applicant account</a>
            <a href="<?php echo base_url(); ?>registrasiPerusahaan" class="signup-image-link">Create a company account</a>

          </div>

          <div class="signin-form">
            <h2 class="form-title">Sign in</h2>
            <form method="POST" class="register-form" id="login-form" action="<?php echo base_url() . 'index.php/login/auth' ?>">
              <?php echo $this->session->flashdata('msg'); ?>
              <div class="form-group">
                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                <input type="text" name="username" id="username" placeholder="Username" />
              </div>
              <div class="form-group">
                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                <input type="password" name="password" id="password" placeholder="Password" />
              </div>

              <div class="form-group form-button">
                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
              </div>
            </form>
            <div class="social-login">
              <span class="social-label">Or login with</span>
              <ul class="socials">
                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
              </ul>
            </div>
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