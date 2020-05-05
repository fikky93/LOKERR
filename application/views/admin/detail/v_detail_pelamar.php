<!DOCTYPE html>
<html>

<head>
    <title>Data Detail Pelamar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="<?php echo base_url() . 'asset/admin/css/bootstrap.css' ?>" rel="stylesheet">


</head>

<body>

    <div class="container">
        <?php $this->load->view('admin/menu'); ?>
        <div class="row mt-3">
            <div class="col-md-6">

                <div class="card">
                    <div class="card-header">
                        <b>Detail Data Pelamar</b>
                    </div>
                    <br>
                    <img src="<?php echo base_url(); ?>foto_pelamar/<?php echo $pelamar->foto_profil ?>" alt="" width="20%" class="col-md-5">
                    <div class="card-body col-md-6">
                        <p class="card-title">Id : <?php echo $pelamar->id_pelamar ?></p>
                        <h5 class="card-title">Nama : <?= $pelamar->nama ?></h5>
                        <h6 class="card-text">Username : <?= $pelamar->username ?></h6>
                        <p class="card-text">Password : <?= $pelamar->password ?></p>
                        <p class="card-text">Tgl Lahir : <?= $pelamar->tgl_lahir ?></p>
                        <p class="card-text">Email : <?= $pelamar->email ?></p>
                        <p class="card-text">Alamat : <?= $pelamar->alamat ?></p>
                        <p class="card-text">No Telp : <?= $pelamar->no_telp ?></p>
                        <p class="card-text">Lulusan : <?= $pelamar->lulusan ?></p>
                        <p class="card-text">Tinggi badan : <?= $pelamar->tinggi_bdn ?></p>
                        <p class="card-text">Berat badan : <?= $pelamar->berat_bdn ?></p>
                        <p class="card-text">Jenis Kelamin : <?= $pelamar->jenis_kelamin ?></p>
                        <p class="card-text">Level : <?= $pelamar->level ?></p>
                        <a href="<?= base_url(); ?>index.php/page/data_pelamar" class="btn btn-primary">Kembali</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="<?php echo base_url() . 'asset/admin/js/jquery.js' ?>"></script>
    <script src="<?php echo base_url() . 'asset/admin/js/bootstrap.min.js' ?>"></script>

</body>

</html>