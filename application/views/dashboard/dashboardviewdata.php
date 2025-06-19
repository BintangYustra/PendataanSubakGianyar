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
    <h2 class="mb-4 text-center">Detail Subak (<?php echo $subak->nama_subak; ?>)</h2>

    <!-- Informasi Umum Subak -->
    <div class="card mb-4">
        <div class="card-header text-white" style="background-color: #FF6B6B;">
            <strong>Informasi Umum Subak</strong>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>ID Subak</th>
                        <td><?php echo $subak->id_subak; ?></td>
                    </tr>
                    <tr>
                        <th>Nama Subak</th>
                        <td><?php echo $subak->nama_subak; ?></td>
                    </tr>
                    <tr>
                        <th>Kriteria Subak</th>
                        <td><?php echo $subak->kriteria_subak; ?></td>
                    </tr>
                    <tr>
                        <th>Verifikasi</th>
                        <td><?php echo $subak->verifikasi; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Alamat Subak -->
    <div class="card mb-4">
        <div class="card-header text-white" style="background-color: #3A86FF;">
            <strong>Alamat Subak</strong>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Br/Lingkungan</th>
                        <td><?php echo $alamat->br_lingkungan_subak; ?></td>
                    </tr>
                    <tr>
                        <th>Desa</th>
                        <td><?php echo $alamat->desa_subak; ?></td>
                    </tr>
                    <tr>
                        <th>Kecamatan</th>
                        <td><?php echo $alamat->kecamatan_subak; ?></td>
                    </tr>
                    <tr>
                        <th>Kabupaten</th>
                        <td><?php echo $alamat->kabupaten_subak; ?></td>
                    </tr>
                    <tr>
                        <th>Kode Pos</th>
                        <td><?php echo $alamat->kode_pos; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Data Prajuru Subak -->
    <div class="card mb-4">
        <div class="card-header text-white" style="background-color: #FFB703;">
            <strong>Data Prajuru Subak</strong>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Masa Bhakti Ayahan</th>
                        <td><?php echo $prajuru->masa_bhakti_ayahan_start; ?> sampai <?php echo $prajuru->masa_bhakti_ayahan_end; ?></td>
                    </tr>
                </tbody>
            </table>

            <h6 class="mt-4"><strong>Pekaseh</strong></h6>
            <table class="table table-bordered table-sm">
                <tbody>
                    <tr><th>Nama</th><td><?php echo $prajuru->pekaseh_nama; ?></td></tr>
                    <tr><th>NPWP</th><td><?php echo $prajuru->pekaseh_npwp; ?></td></tr>
                    <tr><th>HP/WA</th><td><?php echo $prajuru->pekaseh_hp_wa; ?></td></tr>
                </tbody>
            </table>

            <h6 class="mt-4"><strong>Petajuh</strong></h6>
            <table class="table table-bordered table-sm">
                <tbody>
                    <tr><th>Nama</th><td><?php echo $prajuru->petajuh_nama; ?></td></tr>
                    <tr><th>NPWP</th><td><?php echo $prajuru->petajuh_npwp; ?></td></tr>
                    <tr><th>HP/WA</th><td><?php echo $prajuru->petajuh_hp_wa; ?></td></tr>
                </tbody>
            </table>

            <h6 class="mt-4"><strong>Penyarikan</strong></h6>
            <table class="table table-bordered table-sm">
                <tbody>
                    <tr><th>Nama</th><td><?php echo $prajuru->penyarikan_nama; ?></td></tr>
                    <tr><th>NPWP</th><td><?php echo $prajuru->penyarikan_npwp; ?></td></tr>
                    <tr><th>HP/WA</th><td><?php echo $prajuru->penyarikan_hp_wa; ?></td></tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Data Perahyangan -->
    <div class="card mb-4">
        <div class="card-header text-white" style="background-color: #06D6A0;">
            <strong>Data Perahyangan</strong>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Ketersediaan Pura Bedugul</th>
                        <td><?php echo $perahyangan->ketersediaan_pura_bedugul; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Pura Bedugul Ada -->
    <div class="card mb-4">
        <div class="card-header text-white" style="background-color: #06D6A0;">
            <strong>Data Perahyangan (Pura Bedugul Ada)</strong>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Ketersediaan Pura Bedugul</th>
                        <td><?php echo $perahyangan->ketersediaan_pura_bedugul; ?></td>
                    </tr>
                    <tr>
                        <th>Nama Pura Bedugul</th>
                        <td><?php echo $perahyanganpurabedugulada->nama_pura; ?></td>
                    </tr>
                    <tr>
                        <th>Pura Ini Disungsung Oleh</th>
                        <td><?php echo $perahyanganpurabedugulada->pura_bedugul_disungsung; ?></td>
                    </tr>
                    <tr>
                        <th>Nama Subak Penyungsung Lain</th>
                        <td><?php echo $perahyanganpurabedugulada->pura_bedugul_disungsung_lain; ?></td>
                    </tr>
                    <tr>
                        <th>Alamat Pura Bedugul</th>
                        <td><?php echo $perahyanganpurabedugulada->alamat_pura_bedugul; ?></td>
                    </tr>
                    <tr>
                        <th>Piodalan/Wali dalam Setahun</th>
                        <td><?php echo $perahyanganpurabedugulada->piodalan_wali_pertahun; ?> Kali</td>
                    </tr>
                    <tr>
                        <th>Hari Piodalan/Wali</th>
                        <td><?php echo $perahyanganpurabedugulada->hari_piodalan_wali; ?></td>
                    </tr>
                    <tr>
                        <th>Jumlah Pelinggih</th>
                        <td><?php echo $perahyanganpurabedugulada->jumlah_pelinggih; ?></td>
                    </tr>
                </tbody>
            </table>
            <div>
                <p><strong>Foto Pura</strong></p>
            </div>
        </div>
    </div>

    <!-- Pura Bedugul Tidak Ada -->
    <div class="card mb-4" >
        <div class="card-header text-white" style="background-color: #06D6A0;">
            <strong>Data Perahyangan (Pura Bedugul Tidak Ada)</strong>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Ketersediaan Pura Bedugul</th>
                        <td><?php echo $perahyangan->ketersediaan_pura_bedugul; ?></td>
                    </tr>
                        <th>Nama Pura Bedugul</th>
                        <td><?php echo $perahyanganpurabedugultidakada->nama_pura2; ?></td>
                    </tr>
                    <tr>
                        <th>Pura Ini Disungsung Oleh</th>
                        <td><?php echo $perahyanganpurabedugultidakada->pura_bedugul_disungsung2; ?></td>
                    </tr>
                    <tr>
                        <th>Nama Subak Penyungsung Lain</th>
                        <td><?php echo $perahyanganpurabedugultidakada->pura_bedugul_disungsung_lain2; ?></td>
                    </tr>
                    <tr>
                        <th>Alamat Pura Bedugul</th>
                        <td><?php echo $perahyanganpurabedugultidakada->alamat_pura_bedugul2; ?></td>
                    </tr>
                    <tr>
                        <th>Piodalan/Wali dalam Setahun</th>
                        <td><?php echo $perahyanganpurabedugultidakada->piodalan_wali_pertahun2; ?> Kali</td>
                    </tr>
                    <tr>
                        <th>Hari Piodalan/Wali</th>
                        <td><?php echo $perahyanganpurabedugultidakada->hari_piodalan_wali2; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <div class="card mb-4">
        <div class="card-header text-white" style="background-color: #9D4EDD;">
            <strong>Data Pawongan</strong>
        </div>
        <div class="card-body">

            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Jumlah Krama Pemilik Lahan</th>
                        <td><?php echo $pawongan->jumlah_krama_pemilik_lahan; ?></td>
                    </tr>
                    <tr>
                        <th>Jumlah Krama Penyakap</th>
                        <td><?php echo $pawongan->jumlah_krama_penyakap; ?></td>
                    </tr>
                    <tr>
                        <th>Awig-Awig</th>
                        <td><?php echo $pawongan->awig_awig; ?></td>
                    </tr>
                    <tr>
                        <th>Perarem</th>
                        <td><?php echo $pawongan->perarem; ?></td>
                    </tr>
                    <tr>
                        <th>Perarem Alih Fungsi</th>
                        <td><?php echo $pawongan->perarem_alih_fungsi; ?></td>
                    </tr>
                </tbody>
            </table>

            <div class="mt-4">
                <h6 class="mb-2"><strong>Nama Penyakap & Tingkat Pendidikan</strong></h6>
                <table class="table table-bordered">
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
                <h6 class="mb-2"><strong>Nama Perarem</strong></h6>
                <table class="table table-bordered">
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
                                <td colspan="2">Tidak ada data penyakap</td>
                            </tr>
                        <?php endif; ?>
                    
                    </tbody>
                </table>
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
                <th>Tanaman Pokok</th>
                <td>
                    <?php foreach ($palemahantanamanpokok as $row): ?>
                        <?= $row->tanaman_pokok ?>,
                    <?php endforeach; ?>
                </td>
            </tr>
            <tr>
                <th>Jenis Tanaman Pokok</th>
                <td>
                    <?php foreach ($palemahanjenistanamanpokok as $row): ?>
                        <?= $row->jenis_tanaman_pokok ?>,
                    <?php endforeach; ?>
                </td>
            </tr>
            <tr>
                <th>Masa Musim Tanam Setiap Tahun</th>
                <td><?php echo $palemahan->masa_musim_tanam_pertahun; ?> Kali</td>
            </tr>
            <tr>
                <th>Tanaman Penyela</th>
                <td><?php echo $palemahan->tanaman_penyela; ?></td>
            </tr>
            <tr>
                <th>Hama</th>
                <td>
                    <?php foreach ($palemahanhama as $row): ?>
                        <?= $row->nama_hama ?>,
                    <?php endforeach; ?>
                </td>
            </tr>
        </table>
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
    <div class="container mb-4">
        <a href="<?php echo base_url('DashboardSubakTerdata'); ?>" class="btn btn-primary">Kembali</a>
        <a href="<?php  ?>" class="btn btn-success">Print Data</a>
    </div>
</div>
