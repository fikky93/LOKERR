<!DOCTYPE html>
<html>

<head>
    <title>Edit Loker</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="<?php echo base_url() . 'asset/admin/css/bootstrap.css' ?>" rel="stylesheet">

</head>

<body>

    <div class="container">
        <?php $this->load->view('admin/menu'); ?>
        <?php foreach ($loker as $lkr) ?>
        <?php echo form_open_multipart('page/editDataLoker'); ?>

        <input type="hidden" class="form-control-file" id="id" name="id" value="<?php echo $lkr->id_loker ?>">
        <div class="form-group">
            <img src="<?php echo base_url(); ?>foto_loker/<?php echo $lkr->gambar ?>" alt="" width="20%"><br>
            <label for="gambar">Upload foto</label>
            <input type="file" class="form-control-file" id="gambar" name="gambar" value="<?php echo $lkr->gambar ?>">
        </div>
        <div class="form-group">
            <label for="nama_loker">Nama Loker</label>
            <input type="teks" class="form-control" id="nama_loker" name="nama_loker" value="<?php echo $lkr->nama_loker ?>">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" id="alamat" rows="3" name="alamat"><?php echo $lkr->alamat_lkr ?></textarea>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi"><?php echo $lkr->deskripsi ?></textarea>
        </div>
        <div class="form-group">
            <label for="kategori">Kategori</label>
            <select class="form-control" id="kategori" name="kategori">
                <option value="<?php echo $lkr->kategori ?>"><?php echo $lkr->kategori ?></option>
                <option value="full time">full time</option>
                <option value="part time">part time</option>
                <option value="freelance">freelance</option>
                <option value="magang">magang</option>
                <option value="sementara">sementara</option>
            </select>
        </div>

        <div class="form-group">
            <label for="nama_loker">Id Perusahaan</label>
            <input type="teks" class="form-control" id="id_perusahaan" name="id_perusahaan" value="<?php echo $lkr->id_perusahaan ?>">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <!-- </form> -->
        <?php echo form_close(); ?>

    </div>

    <script src="<?php echo base_url() . 'asset/admin/js/jquery.js' ?>"></script>
    <script src="<?php echo base_url() . 'asset/admin/js/bootstrap.min.js' ?>"></script>

</body>

</html>