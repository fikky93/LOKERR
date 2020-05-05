<!DOCTYPE html>
<html>

<head>
    <title>Tambah Perusahaan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="<?php echo base_url() . 'asset/admin/css/bootstrap.css' ?>" rel="stylesheet">

</head>

<body>

    <div class="container">
        <?php $this->load->view('admin/menu'); ?>

        <?php echo form_open_multipart('page/tambahDataPerusahaan'); ?>

        <div class="form-group">
            <label for="logo">Uploud logo</label>
            <input type="file" class="form-control-file" id="logo" name="logo">
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="teks" class="form-control" id="nama" name="nama">
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="teks" class="form-control" id="username" name="username">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" id="alamat" rows="3" name="alamat"></textarea>
        </div>
        <div class="form-group">
            <label for="no_telp">No telp</label>
            <input type="teks" class="form-control" id="no_telp" name="no_telp">
        </div>
        <div class="form-group">
            <label for="fax">fax</label>
            <input type="teks" class="form-control" id="fax" name="fax">
        </div>
        <div class="form-group">
            <label for="website">Website</label>
            <input type="teks" class="form-control" id="website" name="website">
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi"></textarea>
        </div>
        <div class="form-group">
            <label for="contact_person">Contact Person</label>
            <input type="teks" class="form-control" id="contact_person" name="contact_person">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <!-- </form> -->
        <?php echo form_close(); ?>

    </div>

    <script src="<?php echo base_url() . 'asset/admin/js/jquery.js' ?>"></script>
    <script src="<?php echo base_url() . 'asset/admin/js/bootstrap.min.js' ?>"></script>

</body>

</html>