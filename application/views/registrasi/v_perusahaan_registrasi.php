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

        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up Perusahaan</h2>
                        <?php echo validation_errors(); ?>

                        <?php echo form_open_multipart('registrasiPerusahaan/tambahDataPerusahaan'); ?>

                        <div class="form-group">
                            <h6>LOGO</h6>
                            <input type="file" class="form-control" id="logo" name="logo" placeholder="LOGO">
                        </div>
                        <div class="form-group">
                            <h6>Nama Perusahaan</h6>
                            <input type="teks" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="form-group">
                            <h6>Username login</h6>
                            <input type="teks" class="form-control" id="username" name="username">
                        </div>
                        <div class="form-group">
                            <h6>Password</h6>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="form-group">
                            <h6>Email</h6>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <h6>Alamat Perusahaan</h6>
                            <textarea class="form-control" id="alamat" style="resize: none; width: 100%; height: 100px;" name="alamat"></textarea>
                        </div>
                        <div class="form-group">
                            <h6>No Telp</h6>
                            <input type="teks" class="form-control" id="no_telp" name="no_telp">
                        </div>
                        <div class="form-group">
                            <h6>Fax</h6>
                            <input type="teks" class="form-control" id="fax" name="fax">
                        </div>
                        <div class="form-group">
                            <h6>Website</h6>
                            <input type="teks" class="form-control" id="website" name="website">
                        </div>
                        <div class="form-group">
                            <h6>Contact Person</h6>
                            <input type="teks" class="form-control" id="contact_person" name="contact_person">
                        </div>
                        <div class="form-group">
                            <h6>Deskripsi</h6>
                            <textarea class="form-control" id="deskripsi" style="resize: none; width: 100%; height: 100px;" name="deskripsi"></textarea>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                        </div>

                        <?php echo form_close(); ?>
                    </div>

                </div>
            </div>
        </section>

        <!-- JS -->
        <script src="<?php echo base_url() . 'asset/login/vendor/jquery/jquery.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'asset/login/js/main.js' ?>"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>