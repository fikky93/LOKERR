<div class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo base_url(); ?>asset/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-start">
      <div class="col-md-8 ftco-animate text-center text-md-left mb-5">
        <p class="breadcrumbs mb-0"><span class="mr-3"><a href="<?php echo base_url(); ?>c_perusahaan/HomePerusahaan">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Edit Job</span></p>
        <h1 class="mb-3 bread">Edit Job <?php echo $this->session->userdata('ses_nama'); ?></h1>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section contact-section bg-light">
  <div class="container">

    <img src="<?= base_url(); ?>foto_loker/<?= $loker->gambar ?>" class="rounded mx-auto d-block" width="40%">

    <br>


    <?php echo form_open_multipart('c_perusahaan/editJob/editDataLoker') ?>
    <div class="form-row">
      <div class="form-group col-md-12">
        <label for="nama_loker">Nama Loker</label>
        <input type="text" class="form-control" id="nama_loker" name="nama_loker" placeholder="Nama" value="<?= $loker->nama_loker ?>">
      </div>
      <div class="form-group col-md-12">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="<?= $loker->alamat_lkr ?>">
      </div>

      <div class="form-group col-md-12">
        <label for="kategori">Kategori</label><br>
        <select name="kategori" id="kategori">
          <option value="<?= $loker->kategori ?>" hidden><?= $loker->kategori ?></option>
          <option value="Full Time">Full Time</option>
          <option value="Part Time"> Part Time</option>
          <option value="Freelance"> Freelance</option>
          <option value="magang"> magang</option>
          <option value="Sementara"> Sementara</option>
        </select>
      </div>

      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="deskripsi">Deskripsi</label>
          <textarea name="deskripsi" id="deskripsi" cols="120" rows="5" style="resize: none;"><?= $loker->deskripsi ?></textarea>
        </div>
      </div>

      <input type="hidden" id="id_perusahaan" name="id_perusahaan" value="<?= $loker->id_perusahaan ?>">
      <input type="hidden" id="id" name="id" value="<?= $loker->id_loker ?>">
    </div>
    <center>
      <button type="submit" class="btn btn-primary mt-5">Ubah Data Job</button>
    </center>
    <?php form_close(); ?>

</section>