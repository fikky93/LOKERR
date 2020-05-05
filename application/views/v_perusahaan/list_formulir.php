<div class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo base_url(); ?>/asset/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-8 ftco-animate text-center text-md-left mb-5">
                <p class="breadcrumbs mb-0"><span class="mr-3"><a href="<?php echo base_url(); ?>c_perusahaan/HomePerusahaan">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Form</span></p>
                <h1 class="mb-3 bread">Info Form <?php echo $this->session->userdata('ses_nama'); ?> </h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="intro row text-center justify-content-center">

                    <div class="card-deck">
                        <?php foreach ($form as $fm) { ?>
                            <div class="card" style="width: 18rem;">
                                <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                <div class="card-body">
                                    <h5 class="card-title"><?= $fm->nama_pekerjaan ?></h5>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><b><?= $fm->nama_lengkap ?></b></li>
                                    <li class="list-group-item"><?= $fm->email_f ?></li>
                                    <li class="list-group-item"><?= $fm->no_telp_f ?></li>
                                </ul>
                                <div class="card-body">
                                    <a href="<?php echo base_url(); ?>c_perusahaan/list_form/detailForm/<?= $fm->id_form_pelamaran ?>/<?= $fm->id_pelamar ?>" class="btn btn-primary">Detail Form</a>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
</section>