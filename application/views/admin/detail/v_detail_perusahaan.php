<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Detail Data Perusahaan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="<?php echo base_url() . 'asset/admin/css/bootstrap.css' ?>" rel="stylesheet">
</head>

<body>

    <div class="container">
        <?php $this->load->view('admin/menu'); ?>
        <div class="row mt-3">
            <div class="col-md-6">

                <div class="card">
                    <div class="card-header">
                        <b>Detail Data Perusahaan</b>
                    </div>
                    <img src="<?php echo base_url(); ?>foto_perusahaan/<?php echo $perusahaan->logo ?>" alt="" width="30%" class="col-md-5">
                    <div class="card-body col-md-6">
                        <p class="card-title">Id : <?php echo $perusahaan->id_perusahaan ?></p>
                        <h5 class="card-title">Nama : <?= $perusahaan->nama ?></h5>
                        <h6 class="card-text">Username : <?= $perusahaan->username ?></h6>
                        <p class="card-text">Password : <?= $perusahaan->password ?></p>
                        <p class="card-text">Email : <?= $perusahaan->email ?></p>
                        <p class="card-text">Alamat : <?= $perusahaan->alamat ?></p>
                        <p class="card-text">No Telp : <?= $perusahaan->no_telp ?></p>
                        <p class="card-text">fax : <?= $perusahaan->fax ?></p>
                        <p class="card-text">Website : <?= $perusahaan->website ?></p>
                        <p class="card-text">Deskripsi : <?= $perusahaan->deskripsi ?></p>
                        <p class="card-text">Contact Person : <?= $perusahaan->contact_person ?></p>
                        <p class="card-text">Level : <?= $perusahaan->level ?></p>
                        <a href="<?= base_url(); ?>index.php/page/data_perusahaan" class="btn btn-primary">Kembali</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="<?php echo base_url() . 'asset/admin/js/jquery.js' ?>"></script>
    <script src="<?php echo base_url() . 'asset/admin/js/bootstrap.min.js' ?>"></script>

</body>

</html>