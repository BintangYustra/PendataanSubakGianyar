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
<div class="container mt-5">
    <strong><h2 class="mb-4 text-center">Detail Subak (<?php echo $subak->nama_subak; ?>)</h2></strong>
    <hr>
    <div class="card shadow-sm mb-4">
        <div class="card-header d-flex justify-content-between align-items-center" style="background: linear-gradient(45deg, #FF6B6B, #ff8e8e); color: white;">
            <h5 class="mb-0 ">Informasi Subak <i class="fas fa-info-circle "></i></h5>
        </div>

        <div class="card-body text-center">
            <div class="row">
                <?php
                $verifikasi = strtolower(trim($subak->verifikasi));

                $badge_class = '';
                $icon = '';
                $text = '';

                switch($verifikasi) {
                    case 'terverifikasi':
                    case 'diterima':
                        $badge_class = 'bg-success text-light';
                        $icon = '<i class="bi bi-check-circle-fill me-1"></i>';
                        $text = 'Terverifikasi';
                        break;

                    case 'data ditolak':
                    case 'ditolak':
                        $badge_class = 'bg-danger text-light';
                        $icon = '<i class="bi bi-x-circle-fill me-1"></i>';
                        $text = 'Data Ditolak';
                        break;

                    case 'data tidak valid':
                    case 'tidak valid':
                        $badge_class = 'bg-secondary text-light';
                        $icon = '<i class="bi bi-exclamation-circle-fill me-1"></i>';
                        $text = 'Data Tidak Valid';
                        break;

                    case 'data diperbarui':
                    case 'diperbarui':
                        $badge_class = 'bg-info text-light';
                        $icon = '<i class="bi bi-arrow-repeat me-1"></i>';
                        $text = 'Data Diperbarui';
                        break;

                    default:
                        $badge_class = 'bg-warning text-light';
                        $icon = '<i class="bi bi-clock-fill me-1"></i>';
                        $text = 'Belum Terverifikasi';
                        break;
                }
                ?>
                <div class="col-md-6 mb-3">
                    <label><strong>Status Verifikasi</strong></label>
                    <div class="">
                        <span class="badge <?= $badge_class ?>">
                            <?= $icon ?> <?= $text ?>
                        </span>
                    </div>
                </div>
                
                <div class="col-md-6 mb-3">
                    <label class=""><strong>ID Subak</strong></label>
                    <div class="fw-bold"><?php echo !empty($subak->id_subak) ? $subak->id_subak : '-'; ?></div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class=""><strong>Nama Subak</strong></label>
                    <div class="fw-bold"><?php echo !empty($subak->nama_subak) ? $subak->nama_subak : '-'; ?></div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class=""><strong>Kriteria</strong></label>
                    <div><?= !empty ($subak->kriteria_subak) ? $subak->kriteria_subak: '-' ?></div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class=""><strong>No Akte</strong></label>
                    <div><?= !empty ($subak->nomor_akte_notaris) ? $subak->nomor_akte_notaris: '-' ?></div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class=""><strong>NPWP</strong></label>
                    <div><?= !empty ($subak->npwp) ? $subak->npwp: '-' ?></div>
                </div>
            </div>

            <hr>

            <div class="row text-center">
                <div class="col-md-4">
                    <strong>Dibuat</strong><br>
                    <?= !empty ($subak->dibuat_oleh) ? $subak->dibuat_oleh: '-' ?><br>
                    <?= date('d M Y H:i', strtotime($subak->dibuat_pada)) ?>
                </div>

                <div class="col-md-4">
                    <strong>Diperbarui</strong><br>
                    <?= !empty ($subak->diperbaharui_oleh) ? $subak->diperbaharui_oleh: '-' ?><br>
                    <?= date('d M Y H:i', strtotime($subak->diperbaharui_pada)) ?>
                </div>

                <div class="col-md-4">
                    <strong>Diverifikasi</strong><br>
                    <?= !empty ($subak->diverifikasi_oleh) ? $subak->diverifikasi_oleh: '-' ?><br>
                    <?= $subak->diverifikasi_pada ? date('d M Y H:i', strtotime($subak->diverifikasi_pada)) : '-' ?>
                </div>
            </div>

            <hr>
            
            <div class="row">
                <div class="col m-3">
                    <div class="border rounded shadow-sm p-3">
                        <strong>Usul dan Saran atau Komentar</strong><br>
                        <?= !empty ($subak->usul_saran_komentar) ? $subak->usul_saran_komentar: '-' ?><br>
                    </div>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col m-3">
                    <div class="border rounded shadow-sm p-3">
                        <strong>Komentar Verifikator</strong><br>
                        <?= !empty ($subak->komentar_verifikator) ? $subak->komentar_verifikator: '-' ?><br>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Alamat Subak -->
    <div class="card shadow-sm mb-4">
        <div class="card-header d-flex justify-content-between align-items-center" style="background: linear-gradient(45deg, #5998fc, #74a8fb); color: white;">
            <h5 class="mb-0">Alamat Subak <i class="fas fa-map"></i></h5>
        </div>

        <div class="card-body text-center">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <strong><label class="">Br/Lingkungan</label></strong>
                    <div class="fw-bold"><?php echo !empty($alamat->br_lingkungan_subak) ? $alamat->br_lingkungan_subak : '-'; ?></div>
                </div>    

                <div class="col-md-3 mb-3">
                    <strong><label class="">Desa</label></strong>
                    <div class="fw-bold"><?php echo !empty($alamat->desa_subak) ? $alamat->desa_subak : '-'; ?></div>
                </div>    

                <div class="col-md-3 mb-3">
                    <strong><label class="">Kecamatan</label></strong>
                    <div class="fw-bold"><?php echo !empty($alamat->kecamatan_subak) ? $alamat->kecamatan_subak : '-'; ?></div>
                </div>    

                <div class="col-md-3 mb-3">
                    <strong><label class="">Kode Pos</label></strong>
                    <div class="fw-bold"><?php echo !empty($alamat->kode_pos) ? $alamat->kode_pos : '-'; ?></div>
                </div> 
            </div>
        </div>
    </div>
 


    <div class="card shadow-sm mb-4">
        <div class="card-header d-flex justify-content-between align-items-center" style="background: linear-gradient(45deg, #FFB703, #ffdd86); color: white;">
            <h5 class="mb-0">Prajuru Subak <i class="fas fa-users"></i></h5>
        </div>

        <div class="card-body">
            <div class="text-center">
                <i class="fas fa-calendar fa-lg text-success"></i>
                <strong><label class="">Masa Bakti Ayahan</label></strong>
                <div class="fw-bold"><?php echo $prajuru->masa_bhakti_ayahan_start; ?> sampai <?php echo $prajuru->masa_bhakti_ayahan_end; ?></div>
            </div>  

            <hr>    
            
            <div class="row g-3 text-center">
                <div class="col-md-4 mb-3">
                    <div class="border rounded shadow-sm">
                        <i class="fas fa-user-tie fa-lg text-warning mt-3"></i>
                        <h3 class="">Pekaseh</h3>
                        <hr>
                        <strong><div class="">Nama:</div></strong>
                        <div class="mb-3"><?= !empty($prajuru->pekaseh_nama) ? $prajuru->pekaseh_nama : '-' ?></div>
                        <strong><div class="">NPWP:</div></strong>
                        <div class="mb-3"><?= !empty($prajuru->pekaseh_npwp) ? $prajuru->pekaseh_npwp : '-' ?></div>
                        <strong><div class="">HP/Wa:</div></strong>
                        <div class="mb-3"><?= !empty($prajuru->pekaseh_hp_wa) ? $prajuru->pekaseh_hp_wa : '-' ?></div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="border rounded shadow-sm">
                        <i class="fas fa-user fa-lg text-primary mt-3"></i>
                        <h3 class="">Petajuh</h3>
                        <hr>
                        <strong><div class="">Nama:</div></strong>
                        <div class="mb-3"><?= !empty($prajuru->petajuh_nama) ? $prajuru->petajuh_nama : '-' ?></div>
                        <strong><div class="">NPWP:</div></strong>
                        <div class="mb-3"><?= !empty($prajuru->petajuh_npwp) ? $prajuru->petajuh_npwp : '-' ?></div>
                        <strong><div class="">HP/Wa:</div></strong>
                        <div class="mb-3"><?= !empty($prajuru->petajuh_hp_wa) ? $prajuru->petajuh_hp_wa : '-' ?></div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="border rounded shadow-sm">
                        <i class="fas fa-file-alt fa-lg text-success mt-3"></i>
                        <h3 class="">Penyarikan</h3>
                        <hr>
                        <strong><div class="">Nama:</div></strong>
                        <div class="mb-3"><?= !empty($prajuru->penyarikan_nama) ? $prajuru->penyarikan_nama : '-' ?></div>
                        <strong><div class="">NPWP:</div></strong>
                        <div class="mb-3"><?= !empty($prajuru->penyarikan_npwp) ? $prajuru->penyarikan_npwp : '-' ?></div>
                        <strong><div class="">HP/Wa:</div></strong>
                        <div class="mb-3"><?= !empty($prajuru->penyarikan_hp_wa) ? $prajuru->penyarikan_hp_wa : '-' ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header text-white" style="background-color: #06D6A0;">
            <h5 class="mb-0">Data Perahyangan</h5>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header text-white" style="background-color: #9D4EDD;">
            <h5 class="mb-0">Data Pawongan <i class="fas fa-users"></i></h5>
        </div>
        <div class="card-body">
            <div class="row g-3 text-center">
                <div class="col-md-6 mb-3">
                    <div class="border rounded shadow-sm">
                        <i class="fas fa-user fa-lg  text-success mt-3"></i>
                        <strong><div class="mt-3">Jumlah Krama Pemilik Lahan</div></strong>
                        <div class="w-bold mb-3"><?php echo !empty($pawongan->jumlah_krama_pemilik_lahan) ? $pawongan->jumlah_krama_pemilik_lahan : '-'; ?></div>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="border rounded shadow-sm">
                        <i class="fas fa-user fa-lg text-success mt-3"></i>
                        <strong><div class="mt-3">Jumlah Krama Penyakap</div></strong>
                        <div class="w-bold mb-3"><?php echo !empty($pawongan->jumlah_krama_penyakap) ? $pawongan->jumlah_krama_penyakap : '-'; ?></div>
                    </div>
                </div>
            </div>

            <div class="row g-3 text-center">
                <div class="col-md-4">
                    <div class="border rounded shadow-sm">
                        <i class="fas fa-user fa-lg text-success mt-3"></i>
                        <strong><div class="mt-3">Awig-Awig</div></strong>
                        <div class="w-bold mb-3"><?php echo !empty($pawongan->awig_awig) ? $pawongan->awig_awig : '-'; ?></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="border rounded shadow-sm">
                        <i class="fas fa-user fa-lg text-success mt-3"></i>
                        <strong><div class="mt-3">Perarem</div></strong>
                        <div class="w-bold mb-3"><?php echo !empty($pawongan->perarem) ? $pawongan->perarem : '-'; ?></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="border rounded shadow-sm">
                        <i class="fas fa-user fa-lg text-success mt-3"></i>
                        <strong><div class="mt-3">Perarem Alih Fungsi</div></strong>
                        <div class="w-bold mb-3"><?php echo !empty($pawongan->perarem_alih_fungsi) ? $pawongan->perarem_alih_fungsi : '-'; ?></div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="mt-4">
                <h6 class="mb-2"><i class="fa fa-graduation-cap" aria-hidden="true"></i><strong> Informasi Penyakap & Tingkat Pendidikan</strong></h6>
                <div class="border rounded shadow-sm">
                <table class="table ">
                    <thead class="table-light">
                        <tr>
                            <th>Nama Penyakap</th>
                            <th>Tingkat Pendidikan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($pawongannamapenyakap) && is_array($pawongannamapenyakap)): ?>
                            <?php foreach ($pawongannamapenyakap as $penyakap): ?>
                                <?php if (is_object($penyakap)): ?>
                                    <tr>
                                        <td><?= $penyakap->nama_penyakap; ?></td>
                                        <td><?= $penyakap->tingkat_pendidikan_penyakap; ?></td>
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="2">Tidak ada data penyakap</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

            <div class="mt-4">
                <h6 class="mb-2"><strong><i class="fa fa-table" aria-hidden="true"></i> Informasi Perarem</strong></h6>
                    <div class="border rounded shadow-sm">
                        <table class="table">
                            <thead class="table-light">
                                <tr>
                                    <th>Nama Perarem (Jika Ada)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($pawongannamaperarem) && is_array($pawongannamaperarem)): ?>
                                    <?php foreach ($pawongannamaperarem as $perarem): ?>
                                        <?php if (is_object($perarem)): ?>
                                            <tr>
                                                <td><?= $perarem->nama_perarem; ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="2">Tidak ada data perarem</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="card mb-4">
    <div class="card-header text-white" style="background-color: #3BEBFF;">
        <h5 class="mb-0"><strong>Data Palemahan</strong></h5>
    </div>
    <div class="card-body text-center">
        <strong><label class=""><i class="fa fa-leaf text-success" aria-hidden="true"></i> Lahan</label></strong>
        <div class="border rounded shadow-sm">
            <div class="row">
                <div class="col-md-6">
                    <strong><div class="mt-3">Luas Lahan Awal</div></strong>
                    <div class="w-bold mb-3"><?php echo !empty($palemahan->luas_lahan_awal_ha) ? $palemahan->luas_lahan_awal_ha : '-'; ?></div>
                </div>
                <div class="col-md-6">
                    <strong><div class="mt-3">Luas Lahan Sekarang (Sesuai LSD Dinas Pertanian)</div></strong>
                    <div class="w-bold mb-3"><?php echo !empty($palemahan->luas_lahan_sekarang_ha) ? $palemahan->luas_lahan_sekarang_ha : '-'; ?></div>
                </div>
                <div class="col-md-6">
                    <strong><div class="mt-3">Panjang Saluran Irigasi Tersier</div></strong>
                    <div class="w-bold mb-3"><?php echo !empty($palemahan->panjang_saluran_irigasi_tersier_ml) ? $palemahan->panjang_saluran_irigasi_tersier_ml : '-'; ?></div>
                </div>
                <div class="col-md-6">
                    <strong><div class="mt-3">Panjang Jalan Usaha Tani</div></strong>
                    <div class="w-bold mb-3"><?php echo !empty($palemahan->panjang_jalan_usaha_tani_ml) ? $palemahan->panjang_jalan_usaha_tani_ml : '-'; ?></div>
                </div>
                    <div class="col">
                    <strong><div class="mt-3">Ketersediaan Bale Timbang</div></strong>
                    <div class="w-bold mb-3"><?php echo !empty($palemahan->bale_timbang) ? $palemahan->bale_timbang : '-'; ?></div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body text-center">
        <strong><label class=""><i class="fa fa-compass text-success" aria-hidden="true"></i> Batas Wilayah Subak</label></strong>
        <div class="row g-3 text-center">
            <div class="col-md-6 mb-3">
                <div class="border rounded shadow-sm">
                    <i class="fa fa-arrow-up text-warning mt-3"></i>
                    <strong><div class="mt-3">Utara</div></strong>
                    <div class="w-bold mb-3"><?php echo !empty($palemahan->batas_wilayah_subak_utara) ? $palemahan->batas_wilayah_subak_utara : '-'; ?></div>
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="border rounded shadow-sm">
                    <i class="fa fa-arrow-right text-warning mt-3"></i>
                    <strong><div class="mt-3">Timur</div></strong>
                    <div class="w-bold mb-3"><?php echo !empty($palemahan->batas_wilayah_subak_timur) ? $palemahan->batas_wilayah_subak_timur : '-'; ?></div>
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="border rounded shadow-sm">
                    <i class="fa fa-arrow-down text-warning mt-3"></i>
                    <strong><div class="mt-3">Selatan</div></strong>
                    <div class="w-bold mb-3"><?php echo !empty($palemahan->batas_wilayah_subak_selatan) ? $palemahan->batas_wilayah_subak_selatan : '-'; ?></div>
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="border rounded shadow-sm">
                    <i class="fa fa-arrow-left text-warning mt-3"></i>
                    <strong><div class="mt-3">Barat</div></strong>
                    <div class="w-bold mb-3"><?php echo !empty($palemahan->batas_wilayah_subak_barat) ? $palemahan->batas_wilayah_subak_barat : '-'; ?></div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body text-center">
        <strong><label class=""><i class="fa fa-tint text-primary" aria-hidden="true"></i> Pengairan</label></strong>
        <div class="border rounded shadow-sm">
            <div class="row g-3 text-center">
                <div class="col-md-4">
                    <div class="card-body">
                        <div class="border rounded shadow-sm">
                            <strong><div class="mt-3">Sumber Aliran Air (DAS)</div></strong>
                            <div class="w-bold mb-3"><?php echo !empty($palemahan->sumber_aliran_air_das) ? $palemahan->sumber_aliran_air_das : '-'; ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-body">
                        <div class="border rounded shadow-sm">
                            <strong><div class="mt-3">Jumlah DAM</div></strong>
                            <div class="w-bold mb-3"><?php echo !empty($palemahan->jumlah_dam) ? $palemahan->jumlah_dam : '-'; ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-body">
                        <div class="border rounded shadow-sm">
                            <strong><div class="mt-3">Lokasi DAM</div></strong>
                            <div class="w-bold mb-3"><?php echo !empty($palemahan->lokasi_dam) ? $palemahan->lokasi_dam : '-'; ?></div>        
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-3 text-center">
                <div class="col-md-6">
                    <div class="card-body">
                        <div class="border rounded shadow-sm">
                            <strong><div class="mt-3">Jumlah Temukuaya</div></strong>
                            <div class="w-bold mb-3"><?php echo !empty($palemahan->jumlah_temukuaya) ? $palemahan->jumlah_temukuaya : '-'; ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <div class="border rounded shadow-sm">
                            <strong><div class="mt-3">Lokasi Temukuaya</div></strong>
                            <div class="w-bold mb-3"><?php echo !empty($palemahan->lokasi_temukuaya) ? $palemahan->lokasi_temukuaya : '-'; ?></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="card-body">
        <h6 class="text-center"><i class="fa fa-leaf text-success" aria-hidden="true"></i><strong> Informasi Tanaman</strong></h6>
        <div class="border rounded shadow-sm">
            <div class="row text-center">
                <div class="col-md-6">
                    <div class="card-body">
                        <div class="border rounded shadow-sm">
                            <table class="table">
                                <thead class="table-light">
                                    <tr>
                                        <th>Tanaman Pokok</th>                      
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($palemahantanamanpokok) && is_array($palemahantanamanpokok)): ?>
                                        <?php foreach ($palemahantanamanpokok as $palemahan_tanaman_pokok): ?>
                                            <?php if (is_object($palemahan_tanaman_pokok)): ?>
                                                <tr>
                                                    <td><?= $palemahan_tanaman_pokok->tanaman_pokok; ?></td>
                                                </tr>
                                            <?php endif; ?>                            
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="2">Tidak ada data tanaman pokok</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card-body">
                        <div class="border rounded shadow-sm">
                            <table class="table">
                                <thead class="table-light">
                                    <tr>
                                        <th>Jenis Tanaman Pokok</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($palemahanjenistanamanpokok) && is_array($palemahanjenistanamanpokok)): ?>
                                        <?php foreach ($palemahanjenistanamanpokok as $jenis_tanaman_pokok): ?>
                                            <tr>
                                                <td><?= $jenis_tanaman_pokok->jenis_tanaman_pokok; ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="3">Tidak ada data jenis tanaman pokok</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card-body">
                        <div class="border rounded shadow-sm">
                            <strong><div class="mt-3">Masa Musim Tanam Setiap Tahun</div></strong>
                            <div class="w-bold mb-3"><?php echo !empty($palemahan->masa_musim_tanam_pertahun) ? $palemahan->masa_musim_tanam_pertahun : '-'; ?></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card-body">
                        <div class="border rounded shadow-sm">
                            <strong><div class="mt-3">Tanaman Penyela</div></strong>
                            <div class="w-bold mb-3"><?php echo !empty($palemahan->tanaman_penyela) ? $palemahan->tanaman_penyela : '-'; ?></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card-body">
                        <div class="border rounded shadow-sm">
                            <table class="table table-bordered">
                                <thead class="table-light">
                                    <tr>
                                        <th>Nama Hama</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                        <?php if (!empty($palemahanhama) && is_array($palemahanhama)): ?>
                                            <?php foreach ($palemahanhama as $hama): ?>
                                                <tr>
                                                    <td><?= $hama->nama_hama; ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <tr>
                                                <td colspan="3">Tidak ada data hama</td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="card-body">
        <h6 class="text-center"><i class="fa fa-table" aria-hidden="true"></i><strong> Bantuan Pemerintah</strong></h6>
            <div class="border rounded shadow-sm">
                <table class="table table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th>Nama Bantuan</th>
                            <th>Tahun</th>
                            <th>Nilai</th>
                        </tr>
                    </thead>
                        <tbody>
                            <?php if (!empty($palemahanbantaunpemerintah) && is_array($palemahanbantaunpemerintah)): ?>
                                <?php foreach ($palemahanbantaunpemerintah as $bantuan): ?>
                                    <tr>
                                        <td><?= $bantuan->nama_bantuan; ?></td>
                                        <td><?= $bantuan->tahun_bantuan; ?></td>
                                        <td><?= $bantuan->nilai_rp_bantuan; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="3">Tidak ada data bantuan</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                </table>
            </div>
    </div>
</div>


<div class="container mb-4">
    <a href="<?php echo base_url('DashboardOperatorListSubak'); ?>" class="btn btn-primary">Kembali</a>
</div>