    <div class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo base_url(); ?>asset/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5">
            <p class="breadcrumbs mb-0"><span class="mr-3"><a href="<?php echo base_url(); ?>c_perusahaan/HomePerusahaan">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>New Job Post</span></p>
            <h1 class="mb-3 bread">Tambahkan Lowongan</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="ftco-section bg-light">
      <div class="container">
        <div class="row">

          <div class="col-md-12 col-lg-8 mb-5">

            <?php echo form_open_multipart('c_perusahaan/new_post/tambahDataLoker'); ?>

            <div class="row form-group">
              <label class="font-weight-bold" for="gambar">Upload Poster</label>
              <div class="col-md-12">
                <input type="file" class="btn btn-primary" id="gambar" name="gambar">
              </div>
            </div>

            <div class="row form-group">
              <label class="font-weight-bold" for="nama_loker">Nama Pekerjaan</label>
              <div class="col-md-12 mb-3 mb-md-0">
                <input type="text" id="nama_loker" class="form-control" name="nama_loker">
              </div>
            </div>

            <div class="row form-group">
              <label class="font-weight-bold" for="kategori">Kategori</label>
              <div class="col-md-12 mb-3 mb-md-0">
                <label for="option-job-type-1">
                  <input type="radio" id="option-job-type-1" name="kategori" id="kategori" value="Full Time"> Full Time
                </label>
              </div>
              <div class="col-md-12 mb-3 mb-md-0">
                <label for="option-job-type-2">
                  <input type="radio" id="option-job-type-2" name="kategori" id="kategori" value="Part Time"> Part Time
                </label>
              </div>

              <div class="col-md-12 mb-3 mb-md-0">
                <label for="option-job-type-3">
                  <input type="radio" id="option-job-type-3" name="kategori" id="kategori" value="Freelance"> Freelance
              </div>
              <div class="col-md-12 mb-3 mb-md-0">
                <label for="option-job-type-4">
                  <input type="radio" id="option-job-type-4" name="kategori" id="kategori" value="magang"> magang
                </label>
              </div>
              <div class="col-md-12 mb-3 mb-md-0">
                <label for="option-job-type-4">
                  <input type="radio" id="option-job-type-4" name="kategori" id="kategori" value="Sementara"> Sementara
                </label>
              </div>

            </div>

            <div class="row form-group mb-4">
              <label class="font-weight-bold" for="alamat">Alamat</label>
              <div class="col-md-12 mb-3 mb-md-0">
                <input type="text" id="alamat" class="form-control" name="alamat">
              </div>
            </div>

            <div class="row form-group">
              <label class="font-weight-bold" for="dekripsi">Deskripsi</label>
              <div class="col-md-12 mb-3 mb-md-0">
                <textarea name="deskripsi" id="deskripsi" class="form-control" cols="10" rows="5"></textarea>
              </div>
            </div>

            <input type="hidden" name="id_perusahaan" id="id_perusahaan" value="<?php echo $this->session->userdata('ses_id'); ?>">

            <div class="row form-group">
              <div class="col-md-12">
                <input type="submit" value="Posting Lowongan Pekerjaan" class="btn btn-primary  py-2 px-5">
              </div>
            </div>


            <?php echo form_close(); ?>
          </div>

          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Info Kontak</h3>
              <p class="mb-0 font-weight-bold">Alamat</p>
              <p class="mb-4">Jl. MT Haryono Gg.22 no.11 Rt.05 Rw.05 Tegal Arum Kota Pasuruan</p>

              <p class="mb-0 font-weight-bold">Telepon</p>
              <p class="mb-4"><a href="#">+6283833424784</a></p>

              <p class="mb-0 font-weight-bold">Email</p>
              <p class="mb-0"><a href="#">jobpply@jobpply.com</a></p>

            </div>

            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">More Info</h3>
              <p>Anda dapat menemukan informasi terbaru mengenai kami pada website ini. JOBBLY terus berkembang dan berevolusi. Kami menyediakan beragam layanan. Misi kami adalah menyediakan Solusi Career terbaik yang dapat membantu semua orang.</p>
              <p><a href="<?php echo base_url(); ?>c_perusahaan/c_about" class="btn btn-primary  py-2 px-4">About</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>