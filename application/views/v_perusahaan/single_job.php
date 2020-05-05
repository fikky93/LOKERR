<section class="ftco-section contact-section bg-light">
  <div class="container">
    <div class="row d-flex mb-5 contact-info">
      <p class="breadcrumbs mb-0"><span class="mr-3"><a href="<?php echo base_url(); ?>c_perusahaan/HomePerusahaan">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Detail Pekerjaan</span></p>
      <div class="col-md-12 mb-4">
        <h2 class="h3" Info</h2> </div> <div class="w-100">
          <center>
            <p style="font-size: xx-large"><b><?php echo $loker->nama_loker ?></b></p>
            <img class="img-fluid" src="<?php echo base_url(); ?>foto_loker/<?php echo $loker->gambar ?>" alt="" width="70%">
          </center>
      </div>
      <div class="col mt-4" style="text-align: center; font-size: large">
        <center>
          <p><span>Alamat : </span> <?php echo $loker->alamat_lkr ?> </p>
          <p><span>Deskripsi : </span> <?php echo $loker->deskripsi ?> </p>
          <p><span>Kategori : </span> <?php echo $loker->kategori ?> </p>
        </center>
      </div>
    </div>
</section>