<!DOCTYPE html>
<html>

<head>
    <title>Edit Perusahaan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="<?php echo base_url() . 'asset/admin/css/bootstrap.css' ?>" rel="stylesheet">

</head>

<body>

    <div class="container">
        <?php $this->load->view('admin/menu'); ?>
        <?php foreach ($pers as $lkr) ?>
        <?php echo form_open_multipart('page/editDataPerusahaan'); ?>

        <input type="hidden" class="form-control-file" id="id" name="id" value="<?php echo $lkr->id_perusahaan; ?>">
        <div class="form-group">
            <img src="<?php echo base_url(); ?>foto_perusahaan/<?php echo $lkr->logo ?>" alt="" width="20%"><br>
        </div>
        <div class="form-group">
            <label for="nama">Nama Perusahaan</label>
            <input type="teks" class="form-control" id="nama" name="nama" value="<?php echo $lkr->nama ?>">
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="teks" class="form-control" id="username" name="username" value="<?php echo $lkr->username ?>">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="teks" class="form-control" id="password" name="password" value="<?php echo $lkr->password ?>">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="teks" class="form-control" id="email" name="email" value="<?php echo $lkr->email ?>">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="teks" class="form-control" id="alamat" name="alamat" value="<?php echo $lkr->alamat ?>">
        </div>
        <div class="form-group">
            <label for="no_telp">No Telp</label>
            <input type="teks" class="form-control" id="no_telp" name="no_telp" value="<?php echo $lkr->no_telp ?>">
        </div>
        <div class="form-group">
            <label for="fax">fax</label>
            <input type="teks" class="form-control" id="fax" name="fax" value="<?php echo $lkr->fax ?>">
        </div>
        <div class="form-group">
            <label for="website">website</label>
            <input type="teks" class="form-control" id="website" name="website" value="<?php echo $lkr->website ?>">
        </div>
        <div class="form-group">
            <label for="dekripsi">Deskripsi</label><br>
            <textarea name="deskripsi" id="deskripsi" cols="70" rows="10"><?php echo $lkr->deskripsi ?></textarea>
        </div>
        <div class="form-group">
            <label for="contact_person">Contact Person</label>
            <input type="teks" class="form-control" id="contact_person" name="contact_person" value="<?php echo $lkr->contact_person ?>">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <!-- </form> -->
        <?php echo form_close(); ?>

    </div>

    <script src="<?php echo base_url() . 'asset/admin/js/jquery.js' ?>"></script>
    <script src="<?php echo base_url() . 'asset/admin/js/bootstrap.min.js' ?>"></script>

</body>

</html>