<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Detail Subak</title>

    <script
    src="https://code.jquery.com/jquery-3.7.1.js"
    integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url()?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url()?>assets/css/sb-admin-2.css" rel="stylesheet">


</head>
<form action="<?= base_url('DashboardSubakTerdata/DashboardUpdateDataSubak/' . $subak->id_subak) ?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_subak" value="<?= $subak->id_subak ?>">

    <div class="form-group mb-3">
        <label>Nama Subak</label>
        <input type="text" class="form-control" name="nama_subak" value="<?= $subak->nama_subak ?>">
    </div>

    <input type="hidden" name="id_subak" value="<?= $subak->verifikasi ?>">


    <div class="mb-3">
        <label class="form-label d-block">Kriteria Subak</label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="kriteria_subak" value="Subak Basah"
                <?= ($subak->kriteria_subak == 'Subak Basah') ? 'checked' : '' ?>>
            <label class="form-check-label">Subak Basah</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="kriteria_subak" value="Subak Abian"
                <?= ($subak->kriteria_subak == 'Subak Abian') ? 'checked' : '' ?>>
            <label class="form-check-label">Subak Abian</label>
        </div>
    </div>

    <div class="form-group mb-3">
        <label>Nomor Akte Notaris</label>
        <input type="text" class="form-control" name="nomor_akte_notaris" value="<?= $subak->nomor_akte_notaris ?>">
    </div>

    <div class="form-group mb-3">
        <label>NPWP</label>
        <input type="text" class="form-control" name="npwp" value="<?= $subak->npwp ?>">
    </div>


<hr>

    <div class="form-group mb-3">
        <label>Br/Lingkungan</label>
        <input type="text" class="form-control" name="br_lingkungan_subak" value="<?= $alamat_subak->br_lingkungan_subak ?>">
    </div>

    <div class="form-group mb-3">
        <label>Desa</label>
        <input type="text" class="form-control" name="br_lingkungan_subak" value="<?= $alamat_subak->desa_subak ?>">
    </div>

    <div class="form-group mb-3">
        <label>Kecamatan</label>
        <input type="text" class="form-control" name="br_lingkungan_subak" value="<?= $alamat_subak->kecamatan_subak ?>">
    </div>

    <div class="form-group mb-3">
        <label>Kabupaten</label>
        <input type="text" class="form-control" name="br_lingkungan_subak" value="<?= $alamat_subak->kabupaten_subak ?>">
    </div>

    <div class="form-group mb-3">
        <label>Kode Pos</label>
        <input type="text" class="form-control" name="br_lingkungan_subak" value="<?= $alamat_subak->kode_pos ?>">
    </div>


    
    <div class="form-group mb-3">
        <label>Kode Pos</label>
        <input type="text" class="form-control" name="br_lingkungan_subak" value="<?= $alamat_subak->kode_pos ?>">
    </div>

    <!-- Tombol -->
    <a href="<?= base_url('DashboardSubakTerdata'); ?>" class="btn btn-secondary">Kembali</a>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
