<div class="container mt-4">
    <h1 class=""><b>Tambah Data Baru</b></h1>
    <hr>

    <form action="<?= base_url('DashboardOperatorTambahData/add_data') ?>" method="post" enctype="multipart/form-data">

    <!-- SUBAK -->
    <div class="card mt-4">
        <div class="card-body">
            <h2 class="mt-4"><b>Data Subak</b></h2>
            <div class="mb-3">
                <label class="form-label">Nama Subak</label>
                <input type="text" class="form-control" name="nama_subak" required>
            </div>
                <input type="hidden" name="verifikasi" value="Belum Terverifikasi"> <!--Memberi atribut 'Belum Terverifikasi' pada database saat pertama kali mengirim data  -->
            <div class="mb-3">
                <label class="form-label d-block">Kriteria Subak</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="kriteria_subak" value="Subak Basah">
                    <label class="form-check-label">Subak Basah</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="kriteria_subak" value="Subak Abian">
                    <label class="form-check-label">Subak Abian</label>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Nomor Akte Notaris (Di isi Jika Ada)</label>
                <input type="number" class="form-control" name="nomor_akte_notaris">
            </div>

            <div class="mb-3">
                <label class="form-label">NPWP (Diisi Jika Ada)</label>
                <input type="number" class="form-control" name="npwp">
            </div>

            <div class="mb-3">
                <label class="form-label">Alamat Subak</label>
                <div class="row g-2">
                    <div class="col-md-6">
                        <label class="form-label">Br./ Lingkungan</label>
                        <input type="text" class="form-control" name="br_lingkungan_subak">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Desa</label>
                        <input type="text" class="form-control" name="desa_subak">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Kecamatan</label>
                            <select class="form-control" name="kecamatan_subak">
                                <option value="----">----</option>
                                <option value="Blahbatuh">Blahbatuh</option>
                                <option value="Gianyar">Gianyar</option>
                                <option value="Payangan">Payangan</option>
                                <option value="Sukawati">Sukawati</option>
                                <option value="Tampaksiring">Tampaksiring</option>
                                <option value="Tegallalang">Tegallalang</option>
                                <option value="Ubud">Ubud</option>
                            </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Kode Pos</label>
                        <input type="number" class="form-control" name="kode_pos">
                    </div>
                </div>
            </div>
        </div>    
    </div>
        
<hr>

    <!-- PRAJURU -->
    <div class="card mt-4">
        <div class="card-body">
            <h2 class="mt-4"><b>Data Prajuru</b></h2>
            <div class="mb-3">
                <label class="form-label">Masa Bakti Ayahan</label>
                <div class="row g-2">
                    <div class="col-md-6">
                        <input type="date" class="form-control" name="masa_bhakti_ayahan_start">
                    </div>
                    <div class="col-md-6">
                        <input type="date" class="form-control" name="masa_bhakti_ayahan_end">
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Data Pekaseh</label>
                <div class="row g-2">
                    <div class="col-md-4">
                        <label class="form-label">Nama Pekaseh</label>
                        <input type="text" class="form-control" name="pekaseh_nama">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">NPWP Pekaseh</label>
                        <input type="text" class="form-control" name="pekaseh_npwp">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">WA/HP Pekaseh</label>
                        <input type="text" class="form-control" name="pekaseh_hp_wa">
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Data Petajuh</label>
                <div class="row g-2">
                    <div class="col-md-4">
                        <label class="form-label">Nama Petajuh</label>
                        <input type="text" class="form-control" name="petajuh_nama">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">NPWP Petajuh</label>
                        <input type="text" class="form-control" name="petajuh_npwp">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">WA/HP Petajuh</label>
                        <input type="text" class="form-control" name="petajuh_hp_wa">
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Data Penyarikan</label>
                <div class="row g-2">
                    <div class="col-md-4">
                        <label class="form-label">Nama Penyarikan</label>
                        <input type="text" class="form-control" name="penyarikan_nama">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">NPWP Penyarikan</label>
                        <input type="text" class="form-control" name="penyarikan_npwp">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">WA/HP Penyarikan</label>
                        <input type="text" class="form-control" name="penyarikan_hp_wa">
                    </div>
                </div>
            </div>
        </div>    
    </div>

<hr>

    <!-- PERAHYANGAN -->
    <div class="card mt-4">
        <div class="card-body">
            <h2 class="mt-4"><b>Data Perahyangan</b></h2>
            <div class="mb-3">
                <label class="form-label d-block">Pura Bedugul</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ketersediaan_pura_bedugul" value="Ada">
                    <label class="form-check-label" for="puraAda">Ada</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ketersediaan_pura_bedugul" value="Tidak Ada">
                    <label class="form-check-label" for="puraTidakAda">Tidak Ada</label>
                </div>
            </div>
            <script>

            </script>

            <div id="formAda" class="mb-3">
<h4>fsdf</h4>
            </div>

            <div id="formTidakAda" class="mb-3">
<h4>sdgsdg</h4>
            </div>
        </div>
    </div>

<hr>

    <!-- PAWONGAN -->
    <div class="card mt-4">
        <div class="card-body">
            <h2 class="mt-4"><b>Data Pawongan</b></h2>

            <div class="mb-3">
                <label class="form-label">Jumlah Krama Pemilik Lahan</label>
                <input type="number" class="form-control" name="jumlah_krama_pemilik_lahan">
            </div>

            <div class="mb-3">
                <label class="form-label">Jumlah Krama Penyakap</label>
                <input type="number" class="form-control" name="jumlah_krama_penyakap">
            </div>

            <div class="mb-3">
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
                        <button type="button" class="btn btn-danger btn-sm" onclick="hapusPenyakap(this)">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- Tombol tambah -->
                <button type="button" class="btn btn-primary btn-sm" onclick="tambahPenyakap()">+Tambah Penyakap</button>
            </div>
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
                        <button type="button" class="btn btn-danger btn-sm" onclick="hapusPenyakap(this)">
                            <i class="fas fa-times"></i>
                        </button>
                        `;
                        wrapper.appendChild(newRow);
                    }

                    function hapusPenyakap(button) {
                        const row = button.closest('.penyakap-row');
                        row.remove();
                    }
                </script>

            <div class="mb-3">
                <label class="form-label d-block">Awig-Awig</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="awig_awig" value="Ada">
                    <label class="form-check-label">Ada</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="awig_awig" value="Tidak Ada">
                    <label class="form-check-label">Tidak Ada</label>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label d-block">Perarem</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="perarem" value="Ada">
                    <label class="form-check-label">Ada</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="perarem" value="Tidak Ada">
                    <label class="form-check-label">Tidak Ada</label>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label d-block">Perarem Alih Fungsi Lahan</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="perarem_alih_fungsi" value="Ada">
                    <label class="form-check-label">Ada</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="perarem_alih_fungsi" value="Tidak Ada">
                    <label class="form-check-label">Tidak Ada</label>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label d-block">Nama Perarem (Jika Ada)</label>
                <div id="perarem-wrapper">
                    <div class="row g-2 align-items-center mb-2 perarem-row">
                        <div class="col">
                            <input type="text" class="form-control" name="nama_perarem[]">
                        </div>
                        <button type="button" class="btn btn-danger btn-sm" onclick="hapusPerarem(this)">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- Tombol tambah -->
                <button type="button" class="btn btn-primary btn-sm" onclick="tambahPerarem()">+Tambah Perarem</button>
            </div>
                <script>
                    function tambahPerarem() {
                        const wrapper = document.getElementById('perarem-wrapper');

                        const newRow = document.createElement('div');
                        newRow.className = 'row g-2 align-items-center mb-2 perarem-row';

                        newRow.innerHTML = `
                        <div class="col">
                            <input type="text" class="form-control" name="nama_perarem[]">
                        </div>
                        <button type="button" class="btn btn-danger btn-sm" onclick="hapusPerarem(this)">
                            <i class="fas fa-times"></i>
                        </button>
                        `;
                        wrapper.appendChild(newRow);
                    }

                    function hapusPerarem(button) {
                        const row = button.closest('.perarem-row');
                        row.remove();
                    }
                </script>
        </div>
    </div>
        

<hr>

    <!-- PALEMAHAN -->
    <div class="card mt-4">
        <div class="card-body">
            <h2 class="mt-4"><b>Data Palemahan</b></h2>

            <div class="mb-3">
                <label class="form-label">Luas Lahan Awal (Ha)</label>
                <input type="number" class="form-control" name="luas_lahan_awal_ha">
            </div>

            <div class="mb-3">
                <label class="form-label">Luas Lahan Sekarang (Sesuai LSD Dinas Pertanian) (Ha)</label>
                <input type="number" class="form-control" name="luas_lahan_sekarang_ha">
            </div>

            <div class="mb-3">
                <label class="form-label">Panjang Saluran Irigasi Tersier (M1)</label>
                <input type="number" class="form-control" name="panjang_saluran_irigasi_tersier_ml">
            </div>

            <div class="mb-3">
                <label class="form-label">Panjang Jalan Usaha Tani (M1)</label>
                <input type="number" class="form-control" name="panjang_jalan_usaha_tani_ml">
            </div>

            <div class="mb-3">
                <label class="form-label d-block">Bale Timbang</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="bale_timbang" value="Ada">
                    <label class="form-check-label">Ada</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="bale_timbang" value="Tidak Ada">
                    <label class="form-check-label">Tidak Ada</label>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Batas Wilayah Subak</label>
                <div class="row g-2">
                    <div class="col-md-6">
                        <label class="form-label">Utara</label>
                        <input type="text" class="form-control" name="batas_wilayah_subak_utara">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Timur</label>
                        <input type="text" class="form-control" name="batas_wilayah_subak_timur">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Selatan</label>
                        <input type="text" class="form-control" name="batas_wilayah_subak_selatan">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Barat</label>
                        <input type="text" class="form-control" name="batas_wilayah_subak_barat">
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Sumber Aliran Air (DAS)</label>
                <input type="text" class="form-control" name="sumber_aliran_air_das">
            </div>

            <div class="mb-3">
                <label class="form-label">Jumlah DAM</label>
                <input type="number" class="form-control" name="jumlah_dam">
            </div>

            <div class="mb-3">
                <label class="form-label">Lokasi DAM</label>
                <input type="text" class="form-control" name="lokasi_dam">
            </div>

            <div class="mb-3">
                <label class="form-label">Jumlah Temukuaya</label>
                <input type="text" class="form-control" name="jumlah_temukuaya">
            </div>

            <div class="mb-3">
                <label class="form-label">Lokasi Temukuaya</label>
                <input type="text" class="form-control" name="lokasi_temukuaya">
            </div>

            <div class="mb-3">
                <label class="form-label d-block">Tanaman Pokok</label>
                <div id="tanaman-pokok-wrapper">
                    <div class="row g-2 align-items-center mb-2 tanaman-pokok-row">
                        <div class="col">
                            <input type="text" class="form-control" name="tanaman_pokok[]" placeholder="Contoh: Padi">
                        </div>
                        <button type="button" class="btn btn-danger btn-sm" onclick="hapusTanamanPokok(this)">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- Tombol tambah -->
                <button type="button" class="btn btn-primary btn-sm" onclick="tambahTanamanPokok()">+Tambah Tanaman Pokok</button>
            </div>
                <script>
                    function tambahTanamanPokok() {
                        const wrapper = document.getElementById('tanaman-pokok-wrapper');

                        const newRow = document.createElement('div');
                        newRow.className = 'row g-2 align-items-center mb-2 tanaman-pokok-row';

                        newRow.innerHTML = `
                        <div class="col">
                            <input type="text" class="form-control" name="tanaman_pokok[]" placeholder="Contoh: Padi">
                        </div>
                        <button type="button" class="btn btn-danger btn-sm" onclick="hapusTanamanPokok(this)">
                            <i class="fas fa-times"></i>
                        </button>
                        `;
                        wrapper.appendChild(newRow);
                    }

                    function hapusTanamanPokok(button) {
                        const row = button.closest('.tanaman-pokok-row');
                        row.remove();
                    }
                </script>

            <div class="mb-3">
                <label class="form-label d-block">Jenis Tanaman Pokok</label>
                <div id="jenis-tanaman-pokok-wrapper">
                    <div class="row g-2 align-items-center mb-2 jenis-tanaman-pokok-row">
                        <div class="col">
                            <input type="text" class="form-control" name="jenis_tanaman_pokok[]" placeholder="Contoh: Umbi">
                        </div>
                        <button type="button" class="btn btn-danger btn-sm" onclick="hapusJenisTanamanPokok(this)"">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- Tombol tambah -->
                <button type="button" class="btn btn-primary btn-sm" onclick="tambahJenisTanamanPokok()">+Tambah Jenis Tanaman Pokok</button>
            </div>
                <script>
                    function tambahJenisTanamanPokok() {
                        const wrapper = document.getElementById('jenis-tanaman-pokok-wrapper');

                        const newRow = document.createElement('div');
                        newRow.className = 'row g-2 align-items-center mb-2 jenis-tanaman-pokok-row';

                        newRow.innerHTML = `
                        <div class="col">
                            <input type="text" class="form-control" name="jenis_tanaman_pokok[]" placeholder="Contoh: Umbi">
                        </div>
                        <button type="button" class="btn btn-danger btn-sm" onclick="hapusJenisTanamanPokok(this)"">
                            <i class="fas fa-times"></i>
                        </button>
                        `;
                        wrapper.appendChild(newRow);
                    }

                    function hapusJenisTanamanPokok(button) {
                        const row = button.closest('.jenis-tanaman-pokok-row');
                        row.remove();
                    }
                </script>


            <div class="mb-3">
                <label class="form-label">Masa Musim Tanam Setiap Tahun</label>
                <input type="number" class="form-control" name="masa_musim_tanam_pertahun">
            </div>

            <div class="mb-3">
                <label class="form-label">Tanaman Penyela</label>
                <input type="text" class="form-control" name="tanaman_penyela" placeholder="Contoh: Tanaman A, Tanaman B">
            </div>

            <div class="mb-3">
                <label class="form-label d-block">Hama</label>
                <div id="hama-wrapper">
                    <div class="row g-2 align-items-center mb-2 hama-row">
                        <div class="col">
                            <input type="text" class="form-control" name="nama_hama[]" placeholder="Contoh: Burung ,Tikus ,Wereng ,Walang Sangit">
                        </div>
                        <button type="button" class="btn btn-danger btn-sm" onclick="hapusHama(this)">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- Tombol tambah -->
                <button type="button" class="btn btn-primary btn-sm" onclick="tambahHama()">+Tambah Hama</button>
            </div>
                <script>
                    function tambahHama() {
                        const wrapper = document.getElementById('hama-wrapper');

                        const newRow = document.createElement('div');
                        newRow.className = 'row g-2 align-items-center mb-2 hama-row';

                        newRow.innerHTML = `
                        <div class="col">
                                <input type="text" class="form-control" name="nama_hama[]" placeholder="Contoh: Burung ,Tikus ,Wereng ,Walang Sangit">
                        </div>
                        <button type="button" class="btn btn-danger btn-sm" onclick="hapusHama(this)">
                            <i class="fas fa-times"></i>
                        </button>
                        `;
                        wrapper.appendChild(newRow);
                    }

                    function hapusHama(button) {
                        const row = button.closest('.hama-row');
                        row.remove();
                    }
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
                        <button type="button" class="btn btn-danger btn-sm" onclick="hapusBantuan(this)">
                            <i class="fas fa-times"></i>
                        </button>
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
                        <button type="button" class="btn btn-danger btn-sm" onclick="hapusBantuan(this)">
                            <i class="fas fa-times"></i>
                        </button>
                        `;
                        wrapper.appendChild(newRow);
                    }

                    function hapusBantuan(button) {
                        const row = button.closest('.bantuan-row');
                        row.remove();
                    }
                </script>
        </div>    
    </div>
    <hr>
    <div class="card mt-4">
        <div class="card-body">
            <h2 class="mt-4"><b>Komentar Tambahan</b></h2>
            <div class="col">
                <input type="text" class="form-control" name="usul_saran_komentar" placeholder="Usul, Saran, dan Informasi Tambahan">
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Simpan</button>
</form>

</div>

<hr>