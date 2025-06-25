<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Update Subak</title>

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

    <div class="container mt-5">
        <h2 class="mb-4 text-center">Update Subak (<?= $subak->nama_subak ?>)</h2>

        <!-- Informasi Subak -->
        <div class="card mb-4">
            <div class="card-header text-white" style="background-color: #FF6B6B;">Informasi Subak</div>
            <div class="card-body">
                <div class="form-group mb-3">
                    <label>Nama Subak</label>
                    <input type="text" class="form-control" name="nama_subak" value="<?= $subak->nama_subak ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label d-block">Kriteria Subak</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="kriteria_subak" value="Subak Basah"  >
                        <label class="form-check-label">Subak Basah</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="kriteria_subak" value="Subak Abian" <?= ($subak->kriteria_subak == 'Subak Abian') ? 'checked' : '' ?>>
                        <label class="form-check-label">Subak Abian</label>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label>Nomor Akte Notaris</label>
                    <input type="text" class="form-control" name="nomor_akte_notaris" value="<?= $subak->nomor_akte_notaris ?>">
                </div>

                <div class="form-group">
                    <label>NPWP</label>
                    <input type="text" class="form-control" name="npwp" value="<?= $subak->npwp ?>">
                </div>
            </div>
        </div>

        <!-- Alamat Subak -->
        <div class="card mb-4">
            <div class="card-header text-white" style="background-color: #3A86FF;">Alamat Subak</div>
            <div class="card-body">
                <?php if (isset($alamat)) : ?>
                    <div class="form-group mb-3">
                        <label>Br/Lingkungan</label>
                        <input type="text" class="form-control" name="br_lingkungan_subak" value="<?= $alamat->br_lingkungan_subak ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label>Desa</label>
                        <input type="text" class="form-control" name="desa_subak" value="<?= $alamat->desa_subak ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label>Kecamatan</label>
                        <input type="text" class="form-control" name="kecamatan_subak" value="<?= $alamat->kecamatan_subak ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label>Kabupaten</label>
                        <input type="text" class="form-control" name="kabupaten_subak" value="<?= $alamat->kabupaten_subak ?>">
                    </div>
                    <div class="form-group">
                        <label>Kode Pos</label>
                        <input type="number" class="form-control" name="kode_pos" value="<?= $alamat->kode_pos ?>">
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- Prajuru -->
        <div class="card mb-4">
            <div class="card-header text-white" style="background-color: #FFB703;">Prajuru Subak</div>
            <div class="card-body">
                <!-- Ayahan -->
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Masa Bhakti Ayahan Dimulai</label>
                        <input type="date" class="form-control" name="masa_bhakti_ayahan_start" value="<?= $prajuru->masa_bhakti_ayahan_start ?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Masa Bhakti Ayahan Berakhir</label>
                        <input type="date" class="form-control" name="masa_bhakti_ayahan_end" value="<?= $prajuru->masa_bhakti_ayahan_end ?>">
                    </div>
                </div>

                <!-- Pekaseh -->
                <h6 class="mt-3">Pekaseh</h6>
                <div class="form-group mb-2">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="pekaseh_nama" value="<?= $prajuru->pekaseh_nama ?>">
                </div>
                <div class="form-group mb-2">
                    <label>NPWP</label>
                    <input type="number" class="form-control" name="pekaseh_npwp" value="<?= $prajuru->pekaseh_npwp ?>">
                </div>
                <div class="form-group mb-3">
                    <label>HP/WA</label>
                    <input type="number" class="form-control" name="pekaseh_hp_wa" value="<?= $prajuru->pekaseh_hp_wa ?>">
                </div>

                <!-- Petajuh -->
                <h6>Petajuh</h6>
                <div class="form-group mb-2">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="petajuh_nama" value="<?= $prajuru->petajuh_nama ?>">
                </div>
                <div class="form-group mb-2">
                    <label>NPWP</label>
                    <input type="number" class="form-control" name="petajuh_npwp" value="<?= $prajuru->petajuh_npwp ?>">
                </div>
                <div class="form-group mb-3">
                    <label>HP/WA</label>
                    <input type="number" class="form-control" name="petajuh_hp_wa" value="<?= $prajuru->petajuh_hp_wa ?>">
                </div>

                <!-- Penyarikan -->
                <h6>Penyarikan</h6>
                <div class="form-group mb-2">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="penyarikan_nama" value="<?= $prajuru->penyarikan_nama ?>">
                </div>
                <div class="form-group mb-2">
                    <label>NPWP</label>
                    <input type="number" class="form-control" name="penyarikan_npwp" value="<?= $prajuru->penyarikan_npwp ?>">
                </div>
                <div class="form-group mb-0">
                    <label>HP/WA</label>
                    <input type="number" class="form-control" name="penyarikan_hp_wa" value="<?= $prajuru->penyarikan_hp_wa ?>">
                </div>
            </div>
        </div>

        <!-- Perahyangan -->
        <div class="card mb-4">
            <div class="card-header text-white" style="background-color: #06D6A0;">Perahyangan</div>
            <div class="card-body">
                <label class="form-label d-block">Ketersediaan Pura Bedugul</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ketersediaan_pura_bedugul" value="Ada" <?= ($perahyangan->ketersediaan_pura_bedugul == 'Ada') ? 'checked' : '' ?>>
                    <label class="form-check-label">Ada</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ketersediaan_pura_bedugul" value="Tidak Ada" <?= ($perahyangan->ketersediaan_pura_bedugul == 'Tidak Ada') ? 'checked' : '' ?>>
                    <label class="form-check-label">Tidak Ada</label>
                </div>
            </div>
        </div>
        <p><i>Note: Jika Anda Mengganti Ketersediaan Dari "Ada" ke "Tidak Ada" Harap Menghapus Data Pada Salah Satu Kotak Ada atau Tidak Ada</i></p>
        <!-- Pura Bedugul Ada -->
        <div class="card mb-4">
            <div class="card-header text-white" style="background-color: #06D6A0;">Perahyangan Pura Bedugul Ada</div>
            <div class="card-body">
                <div class="form-group mb-2">
                    <label>Nama Pura</label>
                    <input type="text" class="form-control" name="nama_pura" value="<?= $perahyanganpurabedugulada->nama_pura ?>">
                </div>
                <div class="form-group mb-2">
                <label class="form-label d-block">Pura Bedugul di Sungsung oleh</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pura_bedugul_disungsung" value="Satu Subak" <?= ($perahyanganpurabedugulada->pura_bedugul_disungsung == 'Satu Subak') ? 'checked' : '' ?>>
                    <label class="form-check-label">Satu Subak</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pura_bedugul_disungsung" value="Lebih dari Satu Subak" <?= ($perahyanganpurabedugulada->pura_bedugul_disungsung == 'Lebih dari Satu Subak') ? 'checked' : '' ?>>
                    <label class="form-check-label">Lebih dari Satu Subak</label>
                </div>    
                <div class="form-group mb-2">
                    <label>Nama Subak Lain</label>
                    <input type="text" class="form-control" name="pura_bedugul_disungsung_lain" value="<?= $perahyanganpurabedugulada->pura_bedugul_disungsung_lain ?>">
                </div>            
                <div class="form-group mb-2">
                    <label>Alamat Pura Bedugul</label>
                    <input type="text" class="form-control" name="alamat_pura_bedugul" value="<?= $perahyanganpurabedugulada->alamat_pura_bedugul ?>">
                </div>            
                <div class="form-group mb-2">
                    <label>Piodalan/Wali pertahun</label>
                    <input type="number" class="form-control" name="piodalan_wali_pertahun" value="<?= $perahyanganpurabedugulada->piodalan_wali_pertahun ?>">
                </div>            
                <div class="form-group mb-2">
                    <label>Hari Pioadaln</label>
                    <input type="text" class="form-control" name="piodalan_wali_pertahun" value="<?= $perahyanganpurabedugulada->hari_piodalan_wali ?>">
                </div>            
                <div class="form-group mb-2">
                    <label>Jumlah Pelinggih</label>
                    <input type="text" class="form-control" name="jumlah_pelinggih" value="<?= $perahyanganpurabedugulada->jumlah_pelinggih ?>">
                </div>      
                <div class="mb-3">
                    <label class="form-label">Aci-Aci yang Selalu Dilaksanakan di Pesubakan (Menurut Dresta)</label>
                    <div id="aciAciWrapper">
                        <div class="input-group mb-2">
                            <input type="text" class="form-control" name="aci_aci_subak[]">
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary btn-sm" onclick="tambahAciAci()">Tambah Aci-Aci</button>
                </div>   
                <script>
                function tambahAciAci() {
                    const wrapper = document.getElementById('aciAciWrapper');
                    const newRow = document.createElement('div');
                    newRow.className = 'input-group mb-2';
                    newRow.innerHTML = `
                        <input type="text" class="form-control" name="aci_aci_subak[]">
                    `;
                    wrapper.appendChild(newRow);
                }
                </script>   
            </div>
            </div>
        </div>
        <!-- Pura Bedugul Tidak Tidak Ada -->
        <div class="card mb-4">
            <div class="card-header text-white" style="background-color: #06D6A0;">Perahyangan Pura Bedugul Tidak Ada</div>
            <div class="card-body">
                <h4 class="text-center">Pura 1</h4>
                <div class="form-group mb-2">
                    <label>Nama Pura</label>
                    <input type="text" class="form-control" name="nama_pura2" value="<?= $perahyanganpurabedugultidakada->nama_pura2 ?>">
                </div>
                <div class="form-group mb-2">
                <label class="form-label d-block">Pura Bedugul di Sungsung oleh</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pura_bedugul_disungsung2" value="Satu Subak" <?= ($perahyanganpurabedugultidakada->pura_bedugul_disungsung2 == 'Satu Subak') ? 'checked' : '' ?>>
                    <label class="form-check-label">Satu Subak</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pura_bedugul_disungsung2" value="Lebih dari Satu Subak" <?= ($perahyanganpurabedugultidakada->pura_bedugul_disungsung2 == 'Lebih dari Satu Subak') ? 'checked' : '' ?>>
                    <label class="form-check-label">Lebih dari Satu Subak</label>
                </div>    
                <div class="form-group mb-2">
                    <label>Nama Subak Lain</label>
                    <input type="text" class="form-control" name="pura_bedugul_disungsung_lain2" value="<?= $perahyanganpurabedugultidakada->pura_bedugul_disungsung_lain2 ?>">
                </div>            
                <div class="form-group mb-2">
                    <label>Alamat Pura Bedugul</label>
                    <input type="text" class="form-control" name="alamat_pura_bedugul2" value="<?= $perahyanganpurabedugultidakada->alamat_pura_bedugul2 ?>">
                </div>            
                <div class="form-group mb-2">
                    <label>Piodalan/Wali pertahun</label>
                    <input type="number" class="form-control" name="piodalan_wali_pertahun2" value="<?= $perahyanganpurabedugultidakada->piodalan_wali_pertahun2 ?>">
                </div>                       
                <div class="form-group mb-2">
                    <label>Hari Piodalan</label>
                    <input type="number" class="form-control" name="hari_piodalan_wali2" value="<?= $perahyanganpurabedugultidakada->hari_piodalan_wali2 ?>">
                </div>                       
                <div class="form-group mb-2">
                    <label>Foto Pura</label>
                    <!-- <input type="file" class="form-control" name="foto_pura2" value="<?= $perahyanganpurabedugultidakadafotopura2->foto_pura2 ?>"> -->
                </div>                       
            </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header text-white" style="background-color: #06D6A0;">Perahyangan Pura Bedugul Tidak Ada</div>
            <div class="card-body">
                <h4 class="text-center">Pura 2</h4>
                <div class="form-group mb-2">
                    <label>Nama Pura</label>
                    <input type="text" class="form-control" name="nama_pura23" value="<?= $perahyanganpurabedugultidakada2->nama_pura23 ?>">
                </div>
                <div class="form-group mb-2">
                <label class="form-label d-block">Pura Bedugul di Sungsung oleh</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pura_bedugul_disungsung23" value="Satu Subak" <?= ($perahyanganpurabedugultidakada2->pura_bedugul_disungsung23 == 'Satu Subak') ? 'checked' : '' ?>>
                    <label class="form-check-label">Satu Subak</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pura_bedugul_disungsung23" value="Lebih dari Satu Subak" <?= ($perahyanganpurabedugultidakada2->pura_bedugul_disungsung23 == 'Lebih dari Satu Subak') ? 'checked' : '' ?>>
                    <label class="form-check-label">Lebih dari Satu Subak</label>
                </div>    
                <div class="form-group mb-2">
                    <label>Nama Subak Lain</label>
                    <input type="text" class="form-control" name="pura_bedugul_disungsung_lain23" value="<?= $perahyanganpurabedugultidakada2->pura_bedugul_disungsung_lain23 ?>">
                </div>            
                <div class="form-group mb-2">
                    <label>Alamat Pura Bedugul</label>
                    <input type="text" class="form-control" name="alamat_pura_bedugu23l" value="<?= $perahyanganpurabedugultidakada2->alamat_pura_bedugul23 ?>">
                </div>            
                <div class="form-group mb-2">
                    <label>Piodalan/Wali pertahun</label>
                    <input type="number" class="form-control" name="piodalan_wali_pertahun23" value="<?= $perahyanganpurabedugultidakada2->piodalan_wali_pertahun23 ?>">
                </div>            
                <div class="form-group mb-2">
                    <label>Hari Pioadaln</label>
                    <input type="text" class="form-control" name="hari_piodalan_wali23" value="<?= $perahyanganpurabedugultidakada2->hari_piodalan_wali23 ?>">
                </div>                      
            </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header text-white" style="background-color: #06D6A0;">Perahyangan Pura Bedugul Tidak Ada</div>
            <div class="card-body">
                <h4 class="text-center">Pura 3</h4>
                <div class="form-group mb-2">
                    <label>Nama Pura</label>
                    <input type="text" class="form-control" name="nama_pura24" value="<?= $perahyanganpurabedugultidakada3->nama_pura24 ?>">
                </div>
                <div class="form-group mb-2">
                <label class="form-label d-block">Pura Bedugul di Sungsung oleh</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pura_bedugul_disungsung24" value="Satu Subak" <?= ($perahyanganpurabedugultidakada3->pura_bedugul_disungsung24 == 'Satu Subak') ? 'checked' : '' ?>>
                    <label class="form-check-label">Satu Subak</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pura_bedugul_disungsung24" value="Lebih dari Satu Subak" <?= ($perahyanganpurabedugultidakada3->pura_bedugul_disungsung24 == 'Lebih dari Satu Subak') ? 'checked' : '' ?>>
                    <label class="form-check-label">Lebih dari Satu Subak</label>
                </div>    
                <div class="form-group mb-2">
                    <label>Nama Subak Lain</label>
                    <input type="text" class="form-control" name="pura_bedugul_disungsung_lain24" value="<?= $perahyanganpurabedugultidakada3->pura_bedugul_disungsung_lain24 ?>">
                </div>            
                <div class="form-group mb-2">
                    <label>Alamat Pura Bedugul</label>
                    <input type="text" class="form-control" name="alamat_pura_bedugul24" value="<?= $perahyanganpurabedugultidakada3->alamat_pura_bedugul24 ?>">
                </div>            
                <div class="form-group mb-2">
                    <label>Piodalan/Wali pertahun</label>
                    <input type="number" class="form-control" name="piodalan_wali_pertahun24" value="<?= $perahyanganpurabedugultidakada3->piodalan_wali_pertahun24 ?>">
                </div>            
                <div class="form-group mb-2">
                    <label>Hari Pioadaln</label>
                    <input type="text" class="form-control" name="hari_piodalan_wali24" value="<?= $perahyanganpurabedugultidakada3->hari_piodalan_wali24 ?>">
                </div>            
        
            </div>
            </div>
        </div>

        <!-- Pawongan -->
        <div class="card mb-4">
            <div class="card-header text-white" style="background-color: #9D4EDD;">Pawongan</div>
            <div class="card-body">
                <div class="form-group mb-2">
                    <label>Jumlah Krama Pemilik Lahan</label>
                    <input type="number" class="form-control" name="jumlah_krama_pemilik_lahan" value="<?= $pawongan->jumlah_krama_pemilik_lahan ?>">
                </div>
                <div class="form-group mb-2">
                    <label>Jumlah Krama Penyakap</label>
                    <input type="number" class="form-control" name="jumlah_krama_penyakap" value="<?= $pawongan->jumlah_krama_penyakap ?>">
                </div>
                <label class="form-label d-block">Tingkat Pendidikan Krama Penyakap</label>
                <div id="penyakap-wrapper">
                    <div class="row g-2 align-items-center mb-2 penyakap-row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Nama Penyakap" name="nama_penyakap[]">
                        </div>
                        <div class="col-auto">
                            <select class="form-control" name="tingkat_pendidikan_penyakap[]">
                                <option value="">Tingkat Pendidikan</option>
                                <option value="tidak_sekolah">Tidak Sekolah</option>
                                <option value="sd">SD</option>
                                <option value="smp">SMP</option>
                                <option value="sma">SMA/SMK Sederajat</option>
                                <option value="d1">D1</option>
                                <option value="d2">D2</option>
                                <option value="d3">D3</option>
                                <option value="d4">D4</option>
                                <option value="s1">Sarjana (S1)</option>
                                <option value="s2">Magister (S2)</option>
                                <option value="s3">Doktor (S3)</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-primary btn-sm mb-3" onclick="tambahPenyakap()">+Tambah Penyakap</button>
                <script>
                        function tambahPenyakap() {
                            const wrapper = document.getElementById('penyakap-wrapper');
                            const newRow = document.createElement('div');
                            newRow.className = 'row g-2 align-items-center mb-2 penyakap-row';
                            newRow.innerHTML = `
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Nama Penyakap" name="nama_penyakap[]">
                                </div>
                                <div class="col-auto">
                                    <select class="form-control" name="tingkat_pendidikan_penyakap[]">
                                        <option value="">Tingkat Pendidikan</option>
                                        <option value="tidak_sekolah">Tidak Sekolah</option>
                                        <option value="sd">SD</option>
                                        <option value="smp">SMP</option>
                                        <option value="sma">SMA/SMK Sederajat</option>
                                        <option value="d1">D1</option>
                                        <option value="d2">D2</option>
                                        <option value="d3">D3</option>
                                        <option value="d4">D4</option>
                                        <option value="s1">Sarjana (S1)</option>
                                        <option value="s2">Magister (S2)</option>
                                        <option value="s3">Doktor (S3)</option>
                                    </select>
                                </div>
                            `;
                            wrapper.appendChild(newRow);
                        }s
                </script>
                <div class="mb-3">
                    <label class="form-label d-block">Awig-Awig</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="awig_awig" value="Ada" <?= ($pawongan->awig_awig == 'Ada') ? 'checked' : '' ?>>
                        <label class="form-check-label">Ada</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="awig_awig" value="Tidak Ada" <?= ($pawongan->awig_awig == 'Tidak Ada') ? 'checked' : '' ?>>
                        <label class="form-check-label">Tidak Ada</label>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label d-block">Perarem</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="perarem" value="Ada" <?= ($pawongan->perarem == 'Ada') ? 'checked' : '' ?>>
                        <label class="form-check-label">Ada</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="perarem" value="Tidak Ada" <?= ($pawongan->perarem == 'Tidak Ada') ? 'checked' : '' ?>>
                        <label class="form-check-label">Tidak Ada</label>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label d-block">Perarem Alih Fungsi</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="perarem_alih_fungsi" value="Ada" <?= ($pawongan->perarem_alih_fungsi == 'Ada') ? 'checked' : '' ?>>
                        <label class="form-check-label">Ada</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="perarem_alih_fungsi" value="Tidak Ada" <?= ($pawongan->perarem_alih_fungsi == 'Tidak Ada') ? 'checked' : '' ?>>
                        <label class="form-check-label">Tidak Ada</label>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Nama Perarem (Jika Ada)</label>
                    <div id="perarem-wrapper">
                    <input type="text" class="form-control mb-2" name="nama_perarem[]">
                </div>
                    <button type="button" class="btn btn-primary btn-sm" onclick="tambahPerarem()">+Tambah Perarem</button>
                </div>
                <script>
                    function tambahPerarem() {
                    const wrapper = document.getElementById('perarem-wrapper');
                        const newInput = document.createElement('input');
                        newInput.type = 'text';
                        newInput.className = 'form-control mb-2';
                        newInput.name = 'nama_perarem[]';
                    wrapper.appendChild(newInput);
                    }
                </script>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header text-white" style="background-color: #3BEBFF;">Palemahan</div>
            <div class="card-body">
                <div class="form-group mb-2">
                    <label>Luas Lahan Awal (Ha)</label>
                    <input type="number" class="form-control" name="luas_lahan_awal_ha" value="<?= $palemahan->luas_lahan_awal_ha ?>">
                </div>
                <div class="form-group mb-2">
                    <label>Luas Lahan Sekarang (Sesuai LSD Dinas Pertanian)</label>
                    <input type="number" class="form-control" name="luas_lahan_sekarang_ha" value="<?= $palemahan->luas_lahan_sekarang_ha ?>">
                </div>
                <div class="form-group mb-2">
                    <label>Panjang Saluran Irigasi Tersier</label>
                    <input type="number" class="form-control" name="panjang_saluran_irigasi_tersier_ml" value="<?= $palemahan->panjang_saluran_irigasi_tersier_ml ?>">
                </div>
                <div class="form-group mb-2">
                    <label>Panjang Jalan Usaha Tani</label>
                    <input type="number" class="form-control" name="panjang_jalan_usaha_tani_ml" value="<?= $palemahan->panjang_jalan_usaha_tani_ml ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label d-block">Bale Timbang</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="bale_timbang" value="Ada" <?= ($palemahan->bale_timbang == 'Ada') ? 'checked' : '' ?>>
                        <label class="form-check-label">Ada</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="bale_timbang" value="Tidak Ada" <?= ($palemahan->bale_timbang == 'Tidak Ada') ? 'checked' : '' ?>>
                        <label class="form-check-label">Tidak Ada</label>
                    </div>
                </div>
                
                <div class="form-group mb-2">
                    <label>Batas Wilayah Utara</label>
                    <input type="text" class="form-control" name="batas_wilayah_subak_utara" value="<?= $palemahan->batas_wilayah_subak_utara ?>">
                </div>
                <div class="form-group mb-2">
                    <label>Batas Wilayah Timur</label>
                    <input type="text" class="form-control" name="batas_wilayah_subak_timur" value="<?= $palemahan->batas_wilayah_subak_timur ?>">
                </div>
                <div class="form-group mb-2">
                    <label>Batas Wilayah Selatan</label>
                    <input type="text" class="form-control" name="batas_wilayah_subak_selatan" value="<?= $palemahan->batas_wilayah_subak_selatan ?>">
                </div>
                <div class="form-group mb-2">
                    <label>Batas Wilayah barat</label>
                    <input type="text" class="form-control" name="batas_wilayah_subak_barat" value="<?= $palemahan->batas_wilayah_subak_barat ?>">
                </div>

                <div class="form-group mb-2">
                    <label>Jumlah DAM</label>
                    <input type="number" class="form-control" name="jumlah_dam" value="<?= $palemahan->jumlah_dam ?>">
                </div>
                <div class="form-group mb-2">
                    <label>Lokasi DAM</label>
                    <input type="text" class="form-control" name="lokasi_dam" value="<?= $palemahan->lokasi_dam ?>">
                </div>
                <div class="form-group mb-2">
                    <label>Jumlah Temukuaya</label>
                    <input type="text" class="form-control" name="jumlah_temukuaya" value="<?= $palemahan->jumlah_temukuaya ?>">
                </div>
                <div class="form-group mb-2">
                    <label>Lokasi Temukuaya</label>
                    <input type="text" class="form-control" name="lokasi_temukuaya" value="<?= $palemahan->lokasi_temukuaya ?>">
                </div>


                        
                    <div id="tanaman-pokok-container">
                    <div class="form-group mb-2 tanaman-pokok-row">
                        <label>Nama Tanaman Pokok</label>
                        <input type="text" class="form-control" name="tanaman_pokok[]" placeholder="Contoh: Padi">
                    </div>
                </div>
                <button type="button" class="btn btn-primary btn-sm" id="btnTambahTanaman">+ Tambah Tanaman Pokok</button>
                <script>
                    document.getElementById('btnTambahTanaman').addEventListener('click', function () {
                        const container = document.getElementById('tanaman-pokok-container');

                        const newRow = document.createElement('div');
                        newRow.classList.add('form-group', 'mb-2', 'tanaman-pokok-row');

                        newRow.innerHTML = `
                            <input type="text" class="form-control" name="tanaman_pokok[]" placeholder="Contoh: Jagung">
                        `;
                        container.appendChild(newRow);
                    });
                </script>



                <div id="jenis_tanaman-pokok-container">
                    <div class="form-group mb-2 jenis-tanaman-pokok-row">
                        <label>Jenis Tanaman Pokok</label>
                        <input type="text" class="form-control" name="jenis_tanaman_pokok[]" placeholder="Contoh: Biji-Bijian">
                    </div>
                </div>
                <button type="button" class="btn btn-primary btn-sm" id="btnJenisTambahTanaman">+ Tambah Jenis Tanaman Pokok</button>

                <script>
                    document.getElementById('btnJenisTambahTanaman').addEventListener('click', function () {
                        const container = document.getElementById('jenis_tanaman-pokok-container');

                        const newRow = document.createElement('div');
                        newRow.classList.add('form-group', 'mb-2', 'jenis_tanaman-pokok-row');

                        newRow.innerHTML = `
                            <input type="text" class="form-control" name="jenis_tanaman_pokok[]" placeholder="Contoh: Umbi">                    `;
                        container.appendChild(newRow);
                    });
                </script>


                <div class="form-group mb-2">
                    <label>Masa Musim Tanam Setiap Tahun</label>
                    <input type="number" class="form-control" name="masa_musim_tanam_pertahun" value="<?= $palemahan->masa_musim_tanam_pertahun ?>">
                </div>
                <div class="form-group mb-2">
                    <label>Tanaman Penyela</label>
                    <input type="text" class="form-control" name="tanaman_penyela" value="<?= $palemahan->tanaman_penyela ?>">
                </div>

                
                <div class="mb-3">
                <label class="form-label d-block">Hama</label>
                <div id="nama_hama-container">
                    <div class="form-group mb-2 nama-hama-row">
                        <input type="text" class="form-control" name="nama_hama[]" placeholder="Contoh: Burung">
                    </div>
                </div>
                <button type="button" class="btn btn-primary btn-sm" id="btnTambahHama">+ Tambah Hama</button>

                <script>
                    document.getElementById('btnTambahHama').addEventListener('click', function () {
                        const container = document.getElementById('nama_hama-container');

                        const newRow = document.createElement('div');
                        newRow.classList.add('form-group', 'mb-2', 'nama-hama-row');

                        newRow.innerHTML = `
                        <input type="text" class="form-control" name="nama_hama[]" placeholder="Contoh: Tikus">                    `;
                        container.appendChild(newRow);
                    });
                </script>

            <div class="mb-3">
                <label class="form-label d-block">Bantuan yang Pernah Diterima</label>
                <div id="bantuan-wrapper">
                    <div class="row g-2 align-items-center mb-2 bantuan-row">
                        <div class="col">
                            <input type="text" class="form-control" name="nama_bantuan[]" placeholder="Nama Bantuan">
                        </div>
                        <div class="col-auto">
                            <input type="date" class="form-control" name="tahun_bantuan[]" placeholder="Tahun">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" name="nilai_rp_bantuan[]" placeholder="Nilai (Rp)">
                        </div>
                    </div>
                </div>

                <!-- Tombol tambah -->
                <button type="button" class="btn btn-primary btn-sm" onclick="tambahBantuan()">+Tambah Bantuan</button>
                </div>
                <script>
                    function tambahBantuan() {
                        const wrapper = document.getElementById('bantuan-wrapper');

                        const newRow = document.createElement('div');
                        newRow.className = 'row g-2 align-items-center mb-2 bantuan-row';

                        newRow.innerHTML = `
                        <div class="col">
                            <input type="text" class="form-control" name="nama_bantuan[]" placeholder="Nama Bantuan">
                        </div>
                        <div class="col-auto">
                            <input type="date" class="form-control" name="tahun_bantuan[]" placeholder="Tahun">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" name="nilai_rp_bantuan[]" placeholder="Nilai (Rp)">
                        </div>
                        `;
                        wrapper.appendChild(newRow);
                    }
                </script>
        </div>    





        </div>




        

        <!-- Tombol -->
        <div class="mb-2">
            <a href="<?= base_url('DashboardSubakTerdata'); ?>" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
</form>
