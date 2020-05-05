<div class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo base_url(); ?>asset/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-8 ftco-animate text-center text-md-left mb-5">
                <p class="breadcrumbs mb-0"><span class="mr-3"><a href="<?php echo base_url(); ?>c_pelamar/HomePelamar">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Profil</span></p>
                <h1 class="mb-3 bread">Profil Pelamar</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section contact-section bg-light">
    <div class="container">
        <div class="col-md-12 heading-section ftco-animate">
            <h2 class="mb-4">Profil</h2>
        </div>
        <img src="<?= base_url(); ?>foto_pelamar/<?= $pelamar->foto_profil ?>" class="rounded mx-auto d-block" width="20%">
        <?php echo form_open_multipart('c_pelamar/c_profile_pelamar/editDataFotoPelamar') ?>
        <center>
            <input type="hidden" class="form-control" id="idP" name="idP" value="<?= $pelamar->id_pelamar ?>">
            <input type="hidden" class="form-control" id="namaP" name="namaP" value="<?= $pelamar->nama ?>">
            <div class="mt-2">
                <label class="font-weight-bold" for="foto_profil">Upload Foto </label>
                <input type="file" class="btn btn-primary" id="foto" name="foto">
                <button type="submit" class="btn btn-info">Ubah Foto</button>
            </div>
        </center>
        <br>
        <?php form_close(); ?>



        <input type="hidden" id="id" name="id" value="<?= $pelamar->id_pelamar ?>">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nama">Nama</label>
                <input type="text" readonly class="form-control" id="nama" name="nama" placeholder="Nama" value="<?= $pelamar->nama ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="username">Username</label>
                <input type="text" readonly class="form-control" id="username" name="username" placeholder="Username" value="<?= $pelamar->username ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" readonly class="form-control" id="email" name="email" placeholder="Email" value="<?= $pelamar->email ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="password">Password</label>
                <input type="password" readonly class="form-control" id="password" name="password" placeholder="Password" value="<?= $pelamar->password ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" readonly class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="<?= $pelamar->alamat ?>">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="tgl_lahir">Tanggal lahir</label>
                <input type="text" readonly class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="tgl_lahir" value="<?= $pelamar->tgl_lahir ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="no_telp">No Telp</label>
                <input type="text" readonly class="form-control" id="no_telp" name="no_telp" placeholder="No Telp" value="<?= $pelamar->no_telp ?>">
            </div>

        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <input type="text" readonly class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="jenis_kelamin" value="<?= $pelamar->jenis_kelamin ?>">
            </div>
            <div class="form-group col-md-4">
                <label for="lulusan">Lulusan</label>
                <input type="text" readonly class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="jenis_kelamin" value="<?= $pelamar->lulusan ?>">
            </div>
            <div class="form-group col-md-2">
                <label for="berat_bdn">Berat Badan (kg)</label>
                <input type="text" readonly class="form-control" id="berat_bdn" name="berat_bdn" placeholder="Berat Badan" value="<?= $pelamar->berat_bdn ?>">
            </div>
            <div class="form-group col-md-2">
                <label for="tinggi_bdn">Tinggi Badan (cm)</label>
                <input type="text" readonly class="form-control" id="tinggi_bdn" name="tinggi_bdn" placeholder="Tinggi Badan" value="<?= $pelamar->tinggi_bdn ?>">
            </div>
        </div>
        <center>
            <a href="<?php echo base_url(); ?>c_pelamar/c_profile_pelamar/halData/<?php echo $this->session->userdata('ses_id'); ?>" class="btn btn-primary">Edit Data</a>
        </center>


</section>