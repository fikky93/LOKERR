<div class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo base_url(); ?>/asset/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-8 ftco-animate text-center text-md-left mb-5">
                <p class="breadcrumbs mb-0"><span class="mr-3"><a href="<?php echo base_url(); ?>c_perusahaan/HomePerusahaan">Home <i class="ion-ios-arrow-forward"></i></a></span> <a href="<?php echo base_url(); ?>c_perusahaan/list_form/index/<?php echo $this->session->userdata('ses_id'); ?>"><span>Form</span></a> <i class="ion-ios-arrow-forward"></i> <span>Deatil</span></p>
                <h1 class="mb-3 bread">Info Form <?php echo $this->session->userdata('ses_nama'); ?> </h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="intro row  justify-content-center">

                    <div class="card mb-3" style="width: 100%">
                        <div class="card-body">
                            <h3 class="card-title text-center"><?= $form->nama_pekerjaan ?></h3>
                            <hr>
                            <div class="form-row ">
                                <div class="form-group col-md-3">
                                    <img src="<?php echo base_url(); ?>foto_pelamar/<?php echo $pelamar[0]->foto_profil; ?>" alt="" width="80%">
                                </div>
                                <div class="form-group col-md-9">
                                    <p class="card-text"> Nama : <?= $form->nama_lengkap ?> </p>
                                    <p class="card-text"> Alamat : <?= $form->alamat_f ?> </p>
                                    <p class="card-text"> No.Hp : +62<?= $form->no_telp_f ?> </p>
                                    <p class="card-text"> Email : <a href="mailto:<?= $form->email_f ?>"><?= $form->email_f ?></a></p>
                                    <p class="card-text"> Alasan : <?= $form->alasan ?> </p>
                                </div>
                            </div>
                            <hr>

                            <div class="form-row text-center">
                                <div class="form-group col-md-6">
                                    <label><b>CV</b></label><br>
                                    <img src="<?php echo base_url(); ?>form/<?php echo $form->upload_cv ?>" alt="" width="100%">
                                </div>
                                <div class="form-group col-md-6">
                                    <label><b>IJAZAH</b></label><br>
                                    <img src="<?php echo base_url(); ?>form/<?php echo $form->upload_ijazah ?>" alt="" width="100%">
                                </div>
                            </div>
                            <hr>
                            <div class="text-right">
                                <label for="">@Copyright Jobpply</label>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
</section>