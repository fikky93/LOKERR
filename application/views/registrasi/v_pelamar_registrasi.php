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
                        <h2 class="form-title">Sign up Pelamar</h2>
                        <?php echo validation_errors(); ?>

                        <?php echo form_open_multipart('registrasiPelamar/tambahDataPelamar'); ?>

                        <div class="form-group">
                            <h6>Foto</h6>
                            <input type="file" class="form-control" id="foto" name="foto">
                        </div>
                        <div class="form-group">
                            <h6>Nama</h6>
                            <input type="text" name="nama" id="nama" class="form-control" />
                        </div>
                        <div class="form-group">
                            <h6>Username</h6>
                            <input type="text" name="username" id="username" class="form-control" />
                        </div>
                        <div class="form-group">
                            <h6>Password</h6>
                            <input type="password" name="password" id="password" class="form-control" />
                        </div>
                        <div class="form-group">
                            <h6>Tanggal lahir</h6>
                            <input type="teks" class="form-control" id="tgl_lahir" name="tgl_lahir">
                            <small id="#" class="form-text text-muted">* penulisan format (Tahun-Bulan-Tanggal)</small>
                        </div>
                        <div class="form-group">
                            <h6>Email</h6>
                            <input type="email" name="email" id="email" class="form-control" />
                        </div>
                        <div class="form-group">
                            <h6>No Telp</h6>
                            <input type="teks" class="form-control" id="no_telp" name="no_telp">
                        </div>
                        <div class="form-group">
                            <h6>Tinggi Badan</h6>
                            <input type="number" class="form-control" id="tinggi_bdn" name="tinggi_bdn">
                        </div>
                        <div class="form-group">
                            <h6>Berat Badan</h6>
                            <input type="number" class="form-control" id="berat_bdn" name="berat_bdn">
                        </div>
                        <div class="form-group">
                            <h6>Alamat</h6>
                            <textarea class="form-control" id="alamat" rows="6" name="alamat" style="resize: none; width: 100%; height: 100px;"></textarea>
                        </div>
                        <div class="form-group">
                            <h6>Lulusan</h6>
                            <select class="form-control" id="lulusan" name="lulusan">
                                <option value="SMA/SMK">SMA / SMK</option>
                                <option value="D3">D3</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Jenis Kelamin</h6>
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                <option value="laki laki">Laki laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
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