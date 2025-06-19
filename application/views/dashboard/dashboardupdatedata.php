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
<form action="<?= base_url('DataSubakTerdata/DashboardUpdateDataSubak') ?>" method="post">
    <input type="hidden" name="id_subak" value="<?php  ?>">

    <div class="form-group">
        <label>Nama Subak</label>
        <input type="text" class="form-control" name="nama_subak" value="<?php  ?>" required>
    </div>

        <a href="<?php echo base_url('DashboardSubakTerdata'); ?>" class="btn btn-primary">Kembali</a>
    <button type="submit" class="btn btn-primary mt-3">Update</button>
</form>
