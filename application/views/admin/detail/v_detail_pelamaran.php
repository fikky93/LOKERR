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
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <b>Detail Data FORM</b>
                    </div>
                    <br>
                    <h3><?= $form->nama_pekerjaan ?></h3>
                    <img src="<?php echo base_url(); ?>foto_pelamar/<?php echo $pelamar[0]->foto_profil; ?>" alt="" width="70%" class="col-md-2">
                    <div class="card-body col-md-5">
                        <p class="card-text">Id : <?php echo $form->id_form_pelamaran ?></p>
                        <p class="card-text">Nama : <?= $form->nama_lengkap ?> </p>
                        <p class="card-text">Alamat : <?= $form->alamat_f ?> </p>
                        <p class="card-text">No.Hp : +62<?= $form->no_telp_f ?> </p>
                        <p class="card-text">Email : <a href="mailto:<?= $form->email_f ?>"><?= $form->email_f ?></a></p>
                        <p class="card-text">Alasan : <?= $form->alasan ?> </p>
                    </div>
                    <div class="card-body col-md-4">
                        <p class="card-text">id Pelamar : <?= $form->id_pelamar ?> </p>
                        <p class="card-text">id Perusahaan : <?= $form->id_perusahaan ?> </p>
                        <p class="card-text">id loker : <?= $form->id_loker ?> </p>
                        <a href="<?= base_url(); ?>index.php/page/data_pelamaran" class="btn btn-primary">Kembali</a>

                    </div>
                </div>

            </div>
            <hr>

            <div class="form-row text-center">
                <div class="form-group col-md-6">
                    <label><b>CV</b></label><br>
                    <img src="<?php echo base_url(); ?>form/<?php echo $form->upload_cv ?>" alt="" width="100%">
                    <?php echo $form->upload_cv ?>
                </div>
                <div class="form-group col-md-6">
                    <label><b>IJAZAH</b></label><br>
                    <img src="<?php echo base_url(); ?>form/<?php echo $form->upload_ijazah ?>" alt="" width="100%">
                    <?php echo $form->upload_ijazah ?>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url() . 'asset/admin/js/jquery.js' ?>"></script>
    <script src="<?php echo base_url() . 'asset/admin/js/bootstrap.min.js' ?>"></script>

</body>

</html>