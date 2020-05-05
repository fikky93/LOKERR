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

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>

                        <?php echo form_open_multipart('registrasiPerusahaan/tambahDataPerusahaan'); ?>

                        <div class="form-group">
                            <label for="logo">Upload logo</label><br><br>
                            <input type="file" class="form-control-file" id="logo" name="logo">
                        </div>
                        <div class="form-group">

                            <input type="teks" class="form-control" id="nama" name="nama" placeholder="Nama">
                        </div>
                        <div class="form-group">

                            <input type="teks" class="form-control" id="username" name="username" placeholder="Username">
                        </div>
                        <div class="form-group">

                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">

                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">

                            <textarea class="form-control" id="alamat" style="resize: none; width: 290px; height: 100px;" name="alamat" placeholder="Alamat"></textarea>
                        </div>
                        <div class="form-group">

                            <input type="teks" class="form-control" id="no_telp" name="no_telp" placeholder="No Telepon">
                        </div>
                        <div class="form-group">

                            <input type="teks" class="form-control" id="fax" name="fax" placeholder="Fax">
                        </div>
                        <div class="form-group">

                            <input type="teks" class="form-control" id="website" name="website" placeholder="Website">
                        </div>
                        <div class="form-group">

                            <textarea class="form-control" id="deskripsi" style="width: 290px; height: 100px;" name="deskripsi" placeholder="Deskripsi"></textarea>
                        </div>
                        <div class="form-group">

                            <input type="teks" class="form-control" id="contact_person" name="contact_person" placeholder="Contact Person">
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                        </div>

                        <?php echo form_close(); ?>
                    </div>
                    <div class="signup-image">
                        <figure><img src="<?php echo base_url() . 'asset/login/images/signup-image.jpg' ?>" alt="sing up image"></figure>

                    </div>
                </div>
            </div>
        </section>

        <!-- JS -->
        <script src="<?php echo base_url() . 'asset/login/vendor/jquery/jquery.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'asset/login/js/main.js' ?>"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>