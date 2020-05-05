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

                        <?php echo form_open_multipart('registrasiPelamar/tambahDataPelamar'); ?>

                        <div class="form-group">
                            <label for="foto">Uploud foto</label><br><br>
                            <input type="file" class="form-control-file" id="foto" name="foto">
                        </div>
                        <div class="form-group">
                            <label for="nama"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="nama" id="nama" placeholder="Nama" />
                        </div>
                        <div class="form-group">
                            <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="username" id="username" placeholder="Username" />
                        </div>
                        <div class="form-group">
                            <label for="password"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" id="password" placeholder="Password" />
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir"></label>
                            <input type="teks" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal lahir">
                            <small id="#" class="form-text text-muted">* penulisan format (Tahun-Bulan-Tanggal)</small>
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="email" name="email" id="email" placeholder="Email" />
                        </div>
                        <div class="form-group">
                            <label for="no_telp" class="zmdi zmdi-account material-icons-name"></label>
                            <input type="teks" class="form-control" id="no_telp" name="no_telp" placeholder="No HP">
                        </div>
                        <div class="form-group">
                            <label for="tinggi_bdn" class="zmdi zmdi-account material-icons-name"></label>
                            <input type="number" class="form-control" id="tinggi_bdn" name="tinggi_bdn" placeholder="Tinggi Badan">
                        </div>
                        <div class="form-group">
                            <label for="berat_bdn" class="zmdi zmdi-account material-icons-name"></label>
                            <input type="number" class="form-control" id="berat_bdn" name="berat_bdn" placeholder="Berat Badan">
                        </div>
                        <div class="form-group">
                            <label for="alamat"></label>
                            <textarea class="form-control" id="alamat" rows="6" name="alamat" placeholder="Alamat"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="lulusan">Lulusan</label><br><br>
                            <select class="form-control" id="lulusan" name="lulusan">
                                <option value="SMA/SMK">SMA / SMK</option>
                                <option value="D3">D3</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label><br><br>
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