<div class="container mt-4">
    <h1 class="mb-4">Tambah Data Baru</h1>
    <hr>

    <form action="">

        <!-- SUBAK -->
        <h2 class="mt-4">Subak</h2>
        <div class="mb-3">
            <label class="form-label">Nama Subak</label>
            <input type="text" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label d-block">Kriteria Subak</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio">
                <label class="form-check-label">Subak Basah</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio">
                <label class="form-check-label">Subak Abian</label>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Nomor Akte Notaris (Di isi Jika Ada)</label>
            <input type="number" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">NPWP (Diisi Jika Ada)</label>
            <input type="number" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Alamat Subak</label>
            <div class="row g-2">
                <div class="col-md-6">
                    <label class="form-label">Br./ Lingkungan</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Desa</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Kecamatan</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Kabupaten/ Kota</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Kode Pos</label>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>

        <hr>

        <!-- PRAJURU -->
        <h2 class="mt-4">Prajuru</h2>
        <div class="mb-3">
            <label class="form-label">Masa Bakti Ayahan</label>
            <div class="row g-2">
                <div class="col-md-6">
                    <input type="date" class="form-control">
                </div>
                <div class="col-md-6">
                    <input type="date" class="form-control">
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Data Pekaseh</label>
            <div class="row g-2">
                <div class="col-md-4">
                    <label class="form-label">Nama Pekaseh</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-4">
                    <label class="form-label">NPWP Pekaseh</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-4">
                    <label class="form-label">WA/HP Pekaseh</label>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Data Petajuh</label>
            <div class="row g-2">
                <div class="col-md-4">
                    <label class="form-label">Nama Petajuh</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-4">
                    <label class="form-label">NPWP Petajuh</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-4">
                    <label class="form-label">WA/HP Petajuh</label>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Data Penyarikan</label>
            <div class="row g-2">
                <div class="col-md-4">
                    <label class="form-label">Nama Penyarikan</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-4">
                    <label class="form-label">NPWP Penyarikan</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-4">
                    <label class="form-label">WA/HP Penyarikan</label>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>


        <hr>

        <!-- PERAHYANGAN -->
        <h2 class="mt-4">Perahyangan</h2>        
        <!-- Tambahkan input di sini jika diperlukan -->

        <hr>

        <!-- PAWONGAN -->
        <h2 class="mt-4">Pawongan</h2>

        <div class="mb-3">
            <label class="form-label">Jumlah Krama Pemilik Lahan</label>
            <input type="number" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Jumlah Krama Penyakap</label>
            <input type="number" class="form-control">
        </div>

        <label class="form-label d-block">Tingkat Pendidikan Krama Penyakap</label>
            <div id="penyakap-wrapper">
                <div class="row g-2 align-items-center mb-2 bantuan-row">
                    <div class="col-auto">
                        <input type="text" class="form-control" placeholder="No">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Nama Penyakap">
                    </div>
                    <div class="col-auto">
                    <select class="form-control">
                        <option value="">Tingkat Pendidikan</option>
                        <option value="tidak_sekolah">Tidak Sekolah</option>
                        <option value="sd">SD</option>
                        <option value="smp">SMP</option>
                        <option value="sma">SMA/SMK</option>
                        <option value="d3">Diploma (D3)</option>
                        <option value="s1">Sarjana (S1)</option>
                        <option value="s2">Magister (S2)</option>
                        <option value="s3">Doktor (S3)</option>
                    </select>
                    </div>
                </div>
                
            <!-- Tombol tambah -->
                <button type="button" class="btn btn-primary btn-sm" onclick="tambahPenyakap()">Tambah Baris</button>

                <script>
                function tambahPenyakap() {
                    const wrapper = document.getElementById('penyakap-wrapper');

                    const newRow = document.createElement('div');
                    newRow.className = 'row g-2 align-items-center mb-2 bantuan-row';

                    newRow.innerHTML = `
                        <div class="col-auto">
                            <input type="text" class="form-control" placeholder="No">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Nama Penyakap">
                        </div>
                        <div class="col-auto">
                    <select class="form-control">
                        <option value="">Tingkat Pendidikan</option>
                        <option value="tidak_sekolah">Tidak Sekolah</option>
                        <option value="sd">SD</option>
                        <option value="smp">SMP</option>
                        <option value="sma">SMA/SMK</option>
                        <option value="d3">Diploma (D3)</option>
                        <option value="s1">Sarjana (S1)</option>
                        <option value="s2">Magister (S2)</option>
                        <option value="s3">Doktor (S3)</option>
                    </select>                        
                    </div>
                    `;
                    wrapper.appendChild(newRow);
                }
            </script>
            </div>
        <hr>

        <!-- PALEMAHAN -->
        <h2 class="mt-4">Palemahan</h2>

        <div class="mb-3">
            <label class="form-label">Luas Lahan Awal (Ha)</label>
            <input type="number" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Luas Lahan Sekarang (Sesuai LSD Dinas Pertanian) (Ha)</label>
            <input type="number" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Panjang Saluran Irigasi Tersier (M1)</label>
            <input type="number" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Panjang Jalan Usaha Tani (M1)</label>
            <input type="number" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label d-block">Bale Timbang</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio">
                <label class="form-check-label">Ada</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio">
                <label class="form-check-label">Tidak Ada</label>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Batas Wilayah Subak</label>
            <div class="row g-2">
                <div class="col-md-6">
                    <label class="form-label">Utara</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Timur</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Selatan</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Barat</label>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Sumber Aliran Air (DAS)</label>
            <input type="text" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Jumlah DAM</label>
            <input type="number" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Lokasi DAM</label>
            <input type="text" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Jumlah Temukuaya</label>
            <input type="text" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Lokasi Temukuaya</label>
            <input type="text" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Tanaman Pokok</label>
            <input type="text" class="form-control mb-1">
            <input type="text" class="form-control mb-1">
            <input type="text" class="form-control mb-1">
            <input type="text" class="form-control mb-1">
        </div>

        <div class="mb-3">
            <label class="form-label">Jenis Tanaman Pokok</label>
            <input type="text" class="form-control mb-1">
            <input type="text" class="form-control mb-1">
            <input type="text" class="form-control mb-1">
            <input type="text" class="form-control mb-1">
        </div>

        <div class="mb-3">
            <label class="form-label">Masa Musim Tanam Setiap Tahun</label>
            <input type="number" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Tanaman Penyela</label>
            <input type="text" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label d-block">Hama</label>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="hama-burung">
                <label class="form-check-label" for="hama-burung">Burung</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="hama-tikus">
                <label class="form-check-label" for="hama-tikus">Tikus</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="hama-wereng">
                <label class="form-check-label" for="hama-wereng">Wereng</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="hama-walang">
                <label class="form-check-label" for="hama-walang">Walang Sangit</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="hama-lain">
                <label class="form-check-label" for="hama-lain">Lain-Lain</label>
            </div>

            <!-- Input tambahan jika 'Lain-Lain' dicentang -->
            <div class="mt-2" id="form-hama-lain" style="display: none;">
                <label class="form-label">Sebutkan Hama Lain</label>
                <input type="text" class="form-control" placeholder="Contoh: Belalang, Kumbang">
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
                    <div class="col-auto">
                        <input type="text" class="form-control" placeholder="No">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Nama Bantuan">
                    </div>
                    <div class="col-auto">
                        <input type="number" class="form-control" placeholder="Tahun">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Nilai (Rp)">
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
                        <div class="col-auto">
                            <input type="text" class="form-control" placeholder="No">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Nama Bantuan">
                        </div>
                        <div class="col-auto">
                            <input type="number" class="form-control" placeholder="Tahun">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Nilai (Rp)">
                        </div>
                    `;
                    wrapper.appendChild(newRow);
                }
            </script>

    </form>
    <button type="submit" class="btn btn-primary">Simpan</button>
</div>
