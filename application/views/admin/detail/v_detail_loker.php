<!DOCTYPE html>
<html>

<head>
    <title>Data Detail Loker</title>
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
                        <b>Detail Data LOKER</b>
                    </div>
                    <br>
                    <img src="<?php echo base_url(); ?>foto_loker/<?php echo $loker->gambar ?>" alt="" width="70%" class="col-md-5">
                    <div class="card-body col-md-6">
                        <p class="card-title">Id : <?php echo $loker->id_loker ?></p>
                        <h5 class="card-title">Nama loker : <?= $loker->nama_loker ?></h5>
                        <h6 class="card-text">Alamat : <?= $loker->alamat_lkr ?></h6>
                        <p class="card-text">Deskripsi : <?= $loker->deskripsi ?></p>
                        <p class="card-text">Kategori : <?= $loker->kategori ?></p>
                        <p class="card-text">id_perusahaan : <?= $loker->id_perusahaan ?></p>
                        <a href="<?= base_url(); ?>index.php/page/data_loker" class="btn btn-primary">Kembali</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="<?php echo base_url() . 'asset/admin/js/jquery.js' ?>"></script>
    <script src="<?php echo base_url() . 'asset/admin/js/bootstrap.min.js' ?>"></script>

</body>

</html>