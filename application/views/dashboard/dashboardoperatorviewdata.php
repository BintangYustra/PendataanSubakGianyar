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
            <h5 class="mb-0 ">Informasi Subak <i class="fas fa-info-circle "></i>    </h5>
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
                        $badge_class = 'bg-warning text-dark';
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
                    <div class="fw-bold"><?= $subak->id_subak; ?></div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class=""><strong>Nama Subak</strong></label>
                    <div class="fw-bold"><?= $subak->nama_subak; ?></div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class=""><strong>Kriteria</strong></label>
                    <div><?= !empty ($subak->kriteria_subak) ? $subak->kriteria_subak: '-' ?></div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class=""><strong>No Akte</strong></label>
                    <div><?= $subak->nomor_akte_notaris; ?></div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class=""><strong>NPWP</strong></label>
                    <div><?= $subak->npwp; ?></div>
                </div>
            </div>

            <hr>

            <div class="row text-center">
                <div class="col-md-4">
                    <strong>Dibuat</strong><br>
                    <?= $subak->dibuat_oleh ?><br>
                    <?= date('d M Y H:i', strtotime($subak->dibuat_pada)) ?>
                </div>

                <div class="col-md-4">
                    <strong>Diperbarui</strong><br>
                    <?= $subak->diperbaharui_oleh ?><br>
                    <?= date('d M Y H:i', strtotime($subak->diperbaharui_pada)) ?>
                </div>

                <div class="col-md-4">
                    <strong>Diverifikasi</strong><br>
                    <?= $subak->diverifikasi_oleh ?><br>
                    <?= $subak->diverifikasi_pada ? date('d M Y H:i', strtotime($subak->diverifikasi_pada)) : '-' ?>
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
                    <div class="fw-bold"><?php echo $alamat->br_lingkungan_subak; ?></div>
                </div>    

                <div class="col-md-3 mb-3">
                    <strong><label class="">Desa</label></strong>
                    <div class="fw-bold"><?php echo $alamat->desa_subak; ?></div>
                </div>    

                <div class="col-md-3 mb-3">
                    <strong><label class="">Kecamatan</label></strong>
                    <div class="fw-bold"><?php echo $alamat->kecamatan_subak; ?></div>
                </div>    

                <div class="col-md-3 mb-3">
                    <strong><label class="">Kode Pos</label></strong>
                    <div class="fw-bold"><?php echo $alamat->kode_pos; ?></div>
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
                    <div class="border rounded-5">
                        <i class="fas fa-user-tie fa-lg text-warning mt-3"></i>
                        <h3 class="">Pekaseh</h3>
                        <hr>
                        <div class="fw-bold">Nama:</div>
                        <div class="fw-bold mb-3"><?= !empty($prajuru->pekaseh_nama) ? $prajuru->pekaseh_nama : '-' ?></div>
                        <div class="fw-bold">NPWP:</div>
                        <div class="fw-bold mb-3"><?php echo $prajuru->pekaseh_npwp; ?></div>
                        <div class="fw-bold">HP/Wa:</div>
                        <div class="fw-bold mb-3"><?php echo $prajuru->pekaseh_hp_wa; ?></div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="border rounded">
                        <i class="fas fa-user fa-lg text-primary mt-3"></i>
                        <h3 class="">Petajuh</h3>
                        <hr>
                        <div class="fw-bold">Nama:</div>
                        <div class="fw-bold mb-3"><?= !empty($prajuru->petajuh_nama) ? $prajuru->petajuh_nama : '-' ?></div>
                        <div class="fw-bold">NPWP:</div>
                        <div class="fw-bold mb-3"><?php echo $prajuru->petajuh_npwp; ?></div>
                        <div class="fw-bold">HP/Wa:</div>
                        <div class="fw-bold mb-3"><?php echo $prajuru->petajuh_hp_wa; ?></div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="border rounded">
                        <i class="fas fa-file-alt fa-lg text-success mt-3"></i>
                        <h3 class="">Penyarikan</h3>
                        <hr>
                        <div class="fw-bold">Nama:</div>
                        <div class="fw-bold mb-3"><?= !empty($prajuru->penyarikan_nama) ? $prajuru->penyarikan_nama : '-' ?></div>
                        <div class="fw-bold">NPWP:</div>
                        <div class="fw-bold mb-3"><?php echo $prajuru->penyarikan_npwp; ?></div>
                        <div class="fw-bold">HP/Wa:</div>
                        <div class="fw-bold mb-3"><?php echo $prajuru->penyarikan_hp_wa; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header text-white" style="background-color: #06D6A0;">
            <strong>Data Perahyangan</strong>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header text-white" style="background-color: #9D4EDD;">
            <strong>Data Pawongan</strong>
        </div>
        <div class="card-body">
            <div class="row g-3 text-center">
                <div class="col-md-6 mb-3">
                    <div class="border rounded">
                        <i class="fas fa-user fa-lg  text-success mt-3"></i>
                        <div class="fw-bold mt-3">Jumlah Krama Pemilik Lahan</div>
                        <div class="w-bold mb-3"><?php echo $pawongan->jumlah_krama_pemilik_lahan; ?></div>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="border rounded">
                        <i class="fas fa-user fa-lg text-success mt-3"></i>
                        <div class="fw-bold mt-3">Jumlah Krama Pemilik Lahan</div>
                        <div class="w-bold mb-3"><?php echo $pawongan->jumlah_krama_pemilik_lahan; ?></div>
                    </div>
                </div>
            </div>

            <div class="row g-3 text-center">
                <div class="col-md-4">
                    <div class="border rounded">
                        <i class="fas fa-user fa-lg text-success mt-3"></i>
                        <div class="fw-bold mt-3">Awig-Awig</div>
                        <div class="w-bold mb-3"><?php echo !empty($pawongan->awig_awig) ? $pawongan->awig_awig : '-'; ?></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="border rounded">
                        <i class="fas fa-user fa-lg text-success mt-3"></i>
                        <div class="fw-bold mt-3">Perarem</div>
                        <div class="w-bold mb-3"><?php echo !empty($pawongan->perarem) ? $pawongan->perarem : '-'; ?></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="border rounded">
                        <i class="fas fa-user fa-lg text-success mt-3"></i>
                        <div class="fw-bold mt-3">Perarem Alih Fungsi</div>
                        <div class="w-bold mb-3"><?php echo !empty($pawongan->perarem_alih_fungsi) ? $pawongan->perarem_alih_fungsi : '-'; ?></div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="mt-4">
                <h6 class="mb-2"><i class="fa fa-graduation-cap" aria-hidden="true"></i><strong> Informasi Penyakap & Tingkat Pendidikan</strong></h6>
                <div class="border rounded">
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
                    <div class="border rounded">
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
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Luas Lahan Awal</th>
                <td><?php echo $palemahan->luas_lahan_awal_ha; ?> Ha</td>
            </tr>
            <tr>
                <th>Luas Lahan Sekarang (Sesuai LSD Dinas Pertanian)</th>
                <td><?php echo $palemahan->luas_lahan_sekarang_ha; ?> Ha</td>
            </tr>
            <tr>
                <th>Panjang Saluran Irigasi Tersier</th>
                <td><?php echo $palemahan->panjang_saluran_irigasi_tersier_ml; ?> M1</td>
            </tr>
            <tr>
                <th>Panjang Jalan Usaha Tani</th>
                <td><?php echo $palemahan->panjang_jalan_usaha_tani_ml; ?> M1</td>
            </tr>
            <tr>
                <th>Bale Timbang</th>
                <td><?php echo $palemahan->bale_timbang; ?></td>
            </tr>
            <tr>
                <th>Batas Wilayah Subak</th>
                <td>
                    <p><strong>Utara: <?php echo $palemahan->batas_wilayah_subak_utara; ?></strong></p>
                    <p><strong>Timur: <?php echo $palemahan->batas_wilayah_subak_timur; ?></strong></p>
                    <p><strong>Selatan: <?php echo $palemahan->batas_wilayah_subak_selatan; ?></strong></p>
                    <p><strong>Barat: <?php echo $palemahan->batas_wilayah_subak_barat; ?></strong></p>
                </td>
            </tr>
            <tr>
                <th>Sumber Aliran Air (DAS)</th>
                <td><?php echo $palemahan->sumber_aliran_air_das; ?></td>
            </tr>
            <tr>
                <th>Jumlah DAM</th>
                <td><?php echo $palemahan->jumlah_dam; ?></td>
            </tr>
            <tr>
                <th>Lokasi DAM</th>
                <td><?php echo $palemahan->lokasi_dam; ?></td>
            </tr>
            <tr>
                <th>Jumlah Temukuaya</th>
                <td><?php echo $palemahan->jumlah_temukuaya; ?></td>
            </tr>
            <tr>
                <th>Lokasi Temukuaya</th>
                <td><?php echo $palemahan->lokasi_temukuaya; ?></td>
            </tr>
            <tr>
                <th>Masa Musim Tanam Setiap Tahun</th>
                <td><?php echo $palemahan->masa_musim_tanam_pertahun; ?> Kali</td>
            </tr>
            <tr>
                <th>Tanaman Penyela</th>
                <td><?php echo $palemahan->tanaman_penyela; ?></td>
            </tr>
        </table>


            <div class="mt-4">
                <h6 class="mb-2"><strong>Tanaman Pokok</strong></h6>
                <table class="table table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th>Nama Tanaman Pokok</th>
                        </tr>
                    </thead>
                        <tbody>
                            <?php if (!empty($palemahantanamanpokok) && is_array($palemahantanamanpokok)): ?>
                                <?php foreach ($palemahantanamanpokok as $tanaman_pokok): ?>
                                    <tr>
                                        <td><?= $tanaman_pokok->tanaman_pokok; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="3">Tidak ada data tanaman pokok</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                </table>
            </div>

            <div class="mt-4">
                <h6 class="mb-2"><strong>Jenis Tanaman Pokok</strong></h6>
                <table class="table table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th>Nama Jenis Tanaman Pokok</th>
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

            <div class="mt-4">
                <h6 class="mb-2"><strong>Nama Hama</strong></h6>
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

            <div class="mt-4">
                <h6 class="mb-2"><strong>Bantuan Pemerintah</strong></h6>
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
    <hr>

    <div class="card mb-4">
        <div class="card-header text-white" style="background-color: #3BEBFF;">
            <h5 class="mb-0"><strong>Komentar Tambahan</strong></h5>
        </div>
        <div class="card-body">
            <p class="card-body border"><?php echo $subak->usul_saran_komentar; ?></p>
        </div>
    </div>

    <div class="container mb-4">
        <a href="<?php echo base_url('DashboardOperatorListSubak'); ?>" class="btn btn-primary">Kembali</a>
    </div>