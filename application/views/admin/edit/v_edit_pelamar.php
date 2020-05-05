<!DOCTYPE html>
<html>

<head>
    <title>Edit Pelamar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="<?php echo base_url() . 'asset/admin/css/bootstrap.css' ?>" rel="stylesheet">

</head>

<body>

    <div class="container">
        <?php $this->load->view('admin/menu'); ?>
        <?php foreach ($pelamar as $plr) ?>
        <?php echo form_open_multipart('page/editDataPelamar'); ?>

        <input type="hidden" class="form-control-file" id="id" name="id" value="<?php echo $plr->id_pelamar ?>">
        <div class="form-group">
            <img src="<?php echo base_url(); ?>foto_pelamar/<?php echo $plr->foto_profil ?>" alt="" width="20%"><br>
            <label for="foto">Uploud foto</label>
            <input type="file" class="form-control-file" id="foto" name="foto">
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="teks" class="form-control" id="nama" name="nama" value="<?php echo $plr->nama ?>">
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="teks" class="form-control" id="username" name="username" value="<?php echo $plr->username ?>">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" value="<?php echo $plr->password ?>">
        </div>
        <div class="form-group">
            <label for="tgl_lahir">Tanggal Lahir</label>
            <input type="teks" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?php echo $plr->tgl_lahir ?>">
            <small id="#" class="form-text text-muted">* penulisan format (Tahun-Bulan-Tanggal)</small>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $plr->email ?>">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" id="alamat" rows="3" name="alamat"><?php echo $plr->alamat ?></textarea>
        </div>
        <div class="form-group">
            <label for="no_telp">No HP</label>
            <input type="teks" class="form-control" id="no_telp" name="no_telp" value="<?php echo $plr->no_telp ?>">
        </div>
        <div class="form-group">
            <label for="lulusan">Lulusan</label>
            <select class="form-control" id="lulusan" name="lulusan">
                <option value="<?php echo $plr->lulusan ?>"><?php echo $plr->lulusan ?></option>
                <option value="SMA/SMK">SMA / SMK</option>
                <option value="D3">D3</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
            </select>
        </div>
        <div class="form-group">
            <label for="tinggi_bdn">Tinggi Badan</label>
            <input type="number" class="form-control" id="tinggi_bdn" name="tinggi_bdn" value="<?php echo $plr->tinggi_bdn ?>">
        </div>
        <div class="form-group">
            <label for="berat_bdn">Berat Badan</label>
            <input type="number" class="form-control" id="berat_bdn" name="berat_bdn" value="<?php echo $plr->berat_bdn ?>">
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" aria-valuenow="<?php echo $plr->jenis_kelamin ?>">
                <option value="laki laki">Laki laki</option>
                <option value="perempuan">Perempuan</option>
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