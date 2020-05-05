    <div class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo base_url(); ?>asset/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5">
            <p class="breadcrumbs mb-0"><span class="mr-3"><a href="<?php echo base_url(); ?>c_pelamar/HomePelamar">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Form Pelamaran</span></p>
            <h1 class="mb-3 bread">Form Pelamaran</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="ftco-section bg-light">
      <div class="container">
        <div class="row">

          <div class="col-md-12 col-lg-8 mb-5">

            <?php echo form_open_multipart('c_pelamar/c_form_pelamaran/tambahDataForm'); ?>

            <div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="nama_pekerjaan">Nama Pekerjaan</label>
                <input type="text" id="nama_pekerjaan" name="nama_pekerjaan" class="form-control" value="<?php echo $loker->nama_loker ?>" readonly>
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="nama_lengkap">Nama Lengkap</label>
                <input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control" value="<?php echo $this->session->userdata('ses_nama'); ?>">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="alamat_f">Alamat</label>
                <input type="text" id="alamat_f" name="alamat_f" class="form-control" value="<?php echo $this->session->userdata('ses_alamat'); ?>">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="no_telp_f">No Telp</label>
                <input type="text" class="form-control" id="no_telp_f" name="no_telp_f" value="<?php echo $this->session->userdata('ses_no_telp'); ?>">
              </div>
            </div>
            <div class="row form-group mb-4">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="email_f">Email</label>
                <input type="text" class="form-control" id="email_f" name="email_f" value="<?php echo $this->session->userdata('ses_email'); ?>">
              </div>
            </div>
            <div class="row form-group mb-4">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="alasan">Alasan Ingin bekerja </label><br>
                <textarea name="alasan" id="alasan" cols="77%" rows="10" style="resize: none;"></textarea>
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold" for="upload_cv">Upload CV </label>
                <input type="file" class="btn btn-primary" id="upload_cv" name="upload_cv">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold" for="upload_ijazah">Upload Ijazah </label>
                <input type="file" class="btn btn-primary" id="upload_ijazah" name="upload_ijazah">
              </div>
            </div>
            <input type="hidden" id="id_pelamar" name="id_pelamar" class="form-control" value="<?php echo $this->session->userdata('ses_id'); ?>">
            <input type="hidden" id="id_perusahaan" name="id_perusahaan" class="form-control" value="<?php echo $loker->id_perusahaan ?>">
            <input type="hidden" id="id_loker" name="id_loker" class="form-control" value="<?php echo $loker->id_loker ?>">


            <div class="row form-group">
              <div class="col-md-12">
                <input type="submit" value="Send" class="btn btn-primary  py-2 px-5">
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
