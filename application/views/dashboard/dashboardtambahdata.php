<div class="container mt-4">
    <h1 class="mb-4"><b>Tambah Data Baru</b></h1>
    <hr>

    <form action="<?= base_url('DashboardTambahData/AddData') ?>" method="post" enctype="multipart/form-data">

    <!-- SUBAK -->
    <div class="card mt-4">
        <div class="card-body">
            <h2 class="mt-4"><b>Data Subak</b></h2>
            <div class="mb-3">
                <label class="form-label">Nama Subak</label>
                <input type="text" class="form-control" name="nama_subak">
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
                        <input type="text" class="form-control" name="kecamatan_subak">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Kabupaten/ Kota</label>
                        <input type="text" class="form-control" name="kabupaten_subak">
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

            <!-- Form jika "Ada" -->
            <div id="formAda" style="display: none;">
                <div class="mb-3">
                    <div class="mt-3">
                        <label class="form-label">Nama Pura</label>
                        <input type="text" class="form-control" name="nama_pura">
                    </div>

                    <label class="form-label d-block">Pura Bedugul Ini Disungsung Oleh</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pura_bedugul_disungsung" id="satuSubak" value="Satu Subak">
                        <label class="form-check-label" for="satuSubak">Satu Subak</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pura_bedugul_disungsung" id="lebihSubak" value="Lebih dari Satu Subak">
                        <label class="form-check-label" for="lebihSubak">Lebih Dari Satu Subak</label>
                    </div>
                    <div class="mt-3" id="form-subak-lainnya"></div>
                    <script>
                        const satuSubak = document.getElementById('satuSubak');
                        const lebihSubak = document.getElementById('lebihSubak');
                        const container = document.getElementById('form-subak-lainnya');
                        satuSubak.addEventListener('change', function () {
                            if (this.checked) container.innerHTML = '';
                        });
                        lebihSubak.addEventListener('change', function () {
                            if (this.checked) {
                                container.innerHTML = `
                                    <label class="form-label mt-3">Sebutkan Nama Subak Lainnya</label>
                                    <input type="text" name="pura_bedugul_disungsung_lain" class="form-control" placeholder="Contoh: Subak A, Subak B">
                                `;
                            }
                        });
                    </script>
                </div>

                <div class="mb-3">
                    <label class="form-label">Alamat Pura Bedugul</label>
                    <input type="text" class="form-control" name="alamat_pura_bedugul">
                </div>

                <div class="mb-3">
                    <label class="form-label">Piodalan/Wali dalam Setahun</label>
                    <input type="number" class="form-control" name="piodalan_wali_pertahun">
                </div>

                <div class="mb-3">
                    <label class="form-label">Hari Piodalan/Wali</label>
                    <input type="text" class="form-control" name="hari_piodalan_wali">
                </div>

                <div class="mb-3">
                    <label class="form-label">Jumlah Pelinggih</label>
                    <input type="number" class="form-control" name="jumlah_pelinggih">
                </div>

                <div class="mb-3">
                    <label class="form-label d-block">Inventaris yang Dimiliki</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inventaris-angklung" name="inventaris[]" value="Angklung">
                        <label class="form-check-label" for="inventaris-angklung">Angklung</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inventaris-gong" name="inventaris[]" value="Gong">
                        <label class="form-check-label" for="inventaris-gong">Gong</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inventaris-baleganjur" name="inventaris[]" value="Baleganjur">
                        <label class="form-check-label" for="inventaris-baleganjur">Baleganjur</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inventaris-lain" name="inventaris[]" value="">
                        <label class="form-check-label" for="inventaris-lain">Lain-Lain</label>
                    </div>
                    <div class="mt-2" id="form-inventaris-lain" style="display: none;">
                        <label class="form-label">Sebutkan Inventaris Lain</label>
                        <input type="text" class="form-control" name="inventaris_lain" placeholder="Contoh: A, B, C">
                    </div>
                </div>


                <div class="mb-3">
                    <label class="form-label">Upload/Lampirkan 3 Foto</label>
                    <input type="file" class="form-control" multiple name="foto_pura" id="foto_pura_input" accept="image/*" name="foto_pura[]">
                </div>

                <div class="mb-3 d-flex flex-wrap gap-2" id="preview_foto"></div>

                <div class="mb-3">
                    <label class="form-label">Aci-Aci yang Selalu Dilaksanakan di Pesubakan (Menurut Dresta)</label>
                    <div id="perahyangan-wrapper">
                        <input type="text" class="form-control mb-2" name="aci_aci">
                    </div>
                    <button type="button" class="btn btn-primary btn-sm" onclick="tambahPerahyangan()">Tambah Baris</button>
                </div>
            </div>

            <!-- Form jika "Tidak Ada" -->
            <div id="formTidakAda" style="display: none;">
                <div id="formTidakAdaContainer">
                    <div class="mb-3">
                        <div class="card mt-5">
                            <div class="mt-3">
                                <label class="form-label">Nama Pura</label>
                                <input type="text" class="form-control" name="nama_pura2">
                            </div>
                            <label class="form-label d-block">Pura Ini Disungsung Oleh</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pura_bedugul_disungsung2" id="satuSubak2" value="Satu Subak">
                                <label class="form-check-label" for="satuSubak">Satu Subak</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pura_bedugul_disungsung_lain2" id="lebihSubak2" value="Lebih dari Satu Subak">
                                <label class="form-check-label" for="lebihSubak">Lebih Dari Satu Subak</label>
                            </div>
                            <div class="mt-3" id="form-subak-lainnya2"></div>

                            <div class="mb-3">
                                <label class="form-label">Alamat Pura Bedugul</label>
                                <input type="text" class="form-control" name="alamat_pura_bedugul2">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Piodalan/Wali dalam Setahun</label>
                                <input type="number" class="form-control" name="piodalan_wali_pertahun2">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Hari Piodalan/Wali</label>
                                <input type="text" class="form-control" name="hari_piodalan_wali2">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Upload 3 Foto</label>
                                <input type="file" class="form-control" name="foto_pura2[]" multiple>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-primary mt-3" onclick="tambahFormTidakAda()">Tambah Form Baru</button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const radioButtons = document.getElementsByName("ketersediaan_pura_bedugul");
            const formAda = document.getElementById("formAda");
            const formTidakAda = document.getElementById("formTidakAda");

            radioButtons.forEach(radio => {
                radio.addEventListener("change", function () {
                    if (this.value === "Ada") {
                        formAda.style.display = "block";
                        formTidakAda.style.display = "none";
                    } else if (this.value === "Tidak Ada") {
                        formAda.style.display = "none";
                        formTidakAda.style.display = "block";
                    }
                });
            });

            const checkboxLain = document.getElementById('inventaris-lain');
            const formLain = document.getElementById('form-inventaris-lain');
            checkboxLain.addEventListener('change', function () {
                formLain.style.display = this.checked ? 'block' : 'none';
            });

            const satuSubak2 = document.getElementById('satuSubak2');
            const lebihSubak2 = document.getElementById('lebihSubak2');
            const container2 = document.getElementById('form-subak-lainnya2');
            satuSubak2.addEventListener('change', function () {
                if (this.checked) container2.innerHTML = '';
            });
            lebihSubak2.addEventListener('change', function () {
                if (this.checked) {
                    container2.innerHTML = `
                        <label class="form-label mt-3">Sebutkan Nama Subak Lainnya</label>
                        <input type="text" name="nama_subak_lain" class="form-control" placeholder="Contoh: Subak A, Subak B">
                    `;
                }
            });
        });

        function tambahPerahyangan() {
            const wrapper = document.getElementById('perahyangan-wrapper');
            const newRow = document.createElement('div');
            newRow.className = 'mb-2';
            newRow.innerHTML = `<input type="text" class="form-control mb-2" name="aci_aci">`;
            wrapper.appendChild(newRow);
        }

        function tambahFormTidakAda() {
            const container = document.getElementById('formTidakAdaContainer');
            const forms = container.querySelectorAll('.card');
            const lastForm = forms[forms.length - 1];
            const clonedForm = lastForm.cloneNode(true);
            container.appendChild(clonedForm);

            const inputs = clonedForm.querySelectorAll('input');
            inputs.forEach(input => {
                if (input.type === 'radio' || input.type === 'checkbox') {
                    input.checked = false;
                } else {
                    input.value = '';
                }
            });

            const subakLainnya = clonedForm.querySelector('#form-subak-lainnya2');
            if (subakLainnya) subakLainnya.innerHTML = '';
        }
    </script>


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
            <button type="button" class="btn btn-primary btn-sm mb-3" onclick="tambahPenyakap()">Tambah Baris</button>

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
                <label class="form-label">Nama Perarem (Jika Ada)</label>
                <div id="perarem-wrapper">
                    <input type="text" class="form-control mb-2" name="nama_perarem[]">
                </div>
                <button type="button" class="btn btn-primary btn-sm" onclick="tambahPerarem()">Tambah Baris</button>
            </div>
        </div>
    </div>

    <!-- SCRIPT -->
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
        }

        function tambahPerarem() {
            const wrapper = document.getElementById('perarem-wrapper');
            const newInput = document.createElement('input');
            newInput.type = 'text';
            newInput.className = 'form-control mb-2';
            newInput.name = 'nama_perarem[]';
            wrapper.appendChild(newInput);
        }
    </script>


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
                <label class="form-label">Tanaman Pokok</label>
                <input type="text" class="form-control mb-1" name="tanaman_pokok" placeholder="Contoh: Tanaman A, Tanaman B">
            </div>

            <div class="mb-3">
                <label class="form-label">Jenis Tanaman Pokok</label>
                <input type="text" class="form-control mb-1" name="jenis_tanaman_pokok" placeholder="Contoh: Jenis Tanaman A, Jenis Tanaman B">
            </div>

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

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="hama-burung" name="nama_hama[]" value="Burung">
                    <label class="form-check-label" for="hama-burung">Burung</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="hama-tikus" name="nama_hama[]" value="Tikus">
                    <label class="form-check-label" for="hama-tikus">Tikus</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="hama-wereng" name="nama_hama[]" value="Wereng">
                    <label class="form-check-label" for="hama-wereng">Wereng</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="hama-walang" name="nama_hama[]" value="Walang Sangit">
                    <label class="form-check-label" for="hama-walang">Walang Sangit</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="hama-lain" name="nama_hama[]" value="Lain-Lain">
                    <label class="form-check-label" for="hama-lain">Lain-Lain</label>
                </div>

                <!-- Input tambahan jika 'Lain-Lain' dicentang -->
                <div class="mt-2" id="form-hama-lain" style="display: none;">
                    <label class="form-label">Sebutkan Hama Lain</label>
                    <input type="text" class="form-control" name="hama_lain" placeholder="Contoh: Belalang, Kumbang">
                </div>

                <script>
                    const checkboxHamaLain = document.getElementById('hama-lain');
                    const formHamaLain = document.getElementById('form-hama-lain');

                    checkboxHamaLain.addEventListener('change', function () {
                        formHamaLain.style.display = this.checked ? 'block' : 'none';
                    });
                </script>
            </div>

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
                <button type="button" class="btn btn-primary btn-sm" onclick="tambahBantuan()">Tambah Baris</button>
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
    <button type="submit" class="btn btn-primary mt-2">Simpan</button>
    </form>

</div>

<hr>