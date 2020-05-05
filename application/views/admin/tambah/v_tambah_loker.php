<!DOCTYPE html>
<html>

<head>
    <title>Tambah Pelamar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="<?php echo base_url() . 'asset/admin/css/bootstrap.css' ?>" rel="stylesheet">

</head>

<body>

    <div class="container">
        <?php $this->load->view('admin/menu'); ?>

        <?php echo form_open_multipart('page/tambahDataLoker'); ?>

        <div class="form-group">
            <label for="gambar">Uploud gambar</label>
            <input type="file" class="form-control-file" id="gambar" name="gambar">
        </div>
        <div class="form-group">
            <label for="nama_loker">Nama Loker</label>
            <input type="teks" class="form-control" id="nama_loker" name="nama_loker">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="teks" class="form-control" id="alamat" name="alamat">
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi"></textarea>
        </div>
        <div class="form-group">
            <label for="kategori">Kategori</label>
            <select class="form-control" id="kategori" name="kategori">
                <option value="full time">full time</option>
                <option value="part time">part time</option>
                <option value="freelance">freelance</option>
                <option value="magang">magang</option>
                <option value="sementara">sementara</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <!-- </form> -->
        <?php echo form_close(); ?>

    </div>

    <script src="<?php echo base_url() . 'asset/admin/js/jquery.js' ?>"></script>
    <script src="<?php echo base_url() . 'asset/admin/js/bootstrap.min.js' ?>"></script>

</body>

</html>