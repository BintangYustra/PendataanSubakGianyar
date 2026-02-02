<div class="container-fluid px-4 py-4">
    <div class="row g-4">
        <div class="col-lg-3 col-md-12">
            <div class="card shadow h-100">
                <div class="card-body text-center d-flex flex-column justify-content-center py-5">
                    <img src="<?php echo $foto_profil; ?>" 
                         alt="Foto Profil <?php echo htmlspecialchars($username); ?>" 
                         class="rounded-circle mx-auto mb-4" 
                         style="width:180px; height:180px; object-fit:cover; object-position:center;"
                         onerror="this.src='<?php echo base_url('assets/images/default-avatar.png'); ?>'">
                    <p class="text-muted mb-2">Welcome</p>
                    <h3 class="mb-3 fw-bold"><?php echo htmlspecialchars($username); ?></h3>
                    <span class="badge bg-primary fs-6 py-2 px-3 text-light"><?php echo htmlspecialchars($role); ?></span>
                </div>
            </div>
        </div>

        <div class="col-lg-9 col-md-12">
            <div class="row g-3">
                <div class="col-lg-4 col-sm-6">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <h6 class="card-title mb-2">Subak Terdaftar</h6>
                            <h3 class="mb-1 text-primary fw-bold"><?php echo $jumlahsubak; ?></h3>
                            <small class="text-muted">Total Subak</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <h6 class="card-title mb-2">Terverifikasi</h6>
                            <h3 class="mb-1 text-success fw-bold"><?php echo $jumlah_verifikasi_sukses; ?></h3>
                            <small class="text-muted">Verifikasi Sukses</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <h6 class="card-title mb-2">Belum Verifikasi</h6>
                            <h3 class="mb-1 text-warning fw-bold"><?php echo $jumlah_belum_verifikasi; ?></h3>
                            <small class="text-muted">Menunggu</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <h6 class="card-title mb-2">Ditolak</h6>
                            <h3 class="mb-1 text-danger fw-bold"><?php echo $jumlah_verifikasi_ditolak; ?></h3>
                            <small class="text-muted">Verifikasi Ditolak</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <h6 class="card-title mb-2">Card 5</h6>
                            <h3 class="mb-1 text-info fw-bold">-</h3>
                            <small class="text-muted">Data Tambahan</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <h6 class="card-title mb-2">Card 6</h6>
                            <h3 class="mb-1 text-secondary fw-bold">-</h3>
                            <small class="text-muted">Data Tambahan</small>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-sm-6">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <h6 class="card-title mb-2">Card 7</h6>
                            <h3 class="mb-1 text-dark fw-bold">-</h3>
                            <small class="text-muted">Data Tambahan</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <h6 class="card-title mb-2">Card 8</h6>
                            <h3 class="mb-1 text-primary fw-bold">-</h3>
                            <small class="text-muted">Data Tambahan</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <h6 class="card-title mb-2">Card 9</h6>
                            <h3 class="mb-1 text-success fw-bold">-</h3>
                            <small class="text-muted">Data Tambahan</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
