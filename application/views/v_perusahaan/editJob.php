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

    <?php echo form_open_multipart('c_perusahaan/editJob/editPosterLoker') ?>
    <center>
      <input type="hidden" id="idL" class="form-control" name="idL" value="<?= $loker->id_loker ?>">
      <input type="hidden" id="nama" class="form-control" name="nama" value="<?= $loker->nama_loker ?>">
      <div class="mt-2">
        <label class="font-weight-bold" for="poster">Upload Poster </label>
        <input type="file" class="btn btn-primary" id="poster" name="poster">
        <button type="submit" class="btn btn-info" name="ubah">Ubah Poster</button>
      </div>
    </center>
    <?php echo form_close(); ?>

    <br>


    <div class="form-row">
      <div class="form-group col-md-12">
        <label for="nama_loker">Nama Loker</label>
        <input type="text" readonly class="form-control" id="nama_loker" name="nama_loker" placeholder="Email" value="<?= $loker->nama_loker ?>">
      </div>
      <div class="form-group col-md-12">
        <label for="alamat">Alamat</label>
        <input type="text" readonly class="form-control" id="alamat" name="alamat" placeholder="Username" value="<?= $loker->alamat_lkr ?>">
      </div>

      <div class="form-group col-md-12">
        <label for="kategori">Kategori</label><br>
        <input type="text" readonly class="form-control" id="alamat" name="alamat" placeholder="Username" value="<?= $loker->kategori ?>">
      </div>

      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="deskripsi">Deskripsi</label>
          <textarea name="deskripsi" id="deskripsi" cols="120" rows="5" style="resize: none;" readonly><?= $loker->deskripsi ?></textarea>
        </div>
      </div>
    </div>
    <center>
      <!-- <button type="submit" class="btn btn-primary mt-5">Ubah Data Job</button> -->
      <a href="<?php echo base_url(); ?>c_perusahaan/editJob/halDataLoker/<?php echo $loker->id_loker ?>" class="btn btn-primary">Edit Data</a>
    </center>


</section>