<div class="" style="margin-left: 25px">
    <h1>Welcome to Dashboard Verifikasi</h1>
</div>

<div class="">
    <div class="row ">
        <div class="d-flex justify-content-center">
            <div class="card shadow-sm" style="width: 18rem; margin-left: 25px">
                <div class="card-body">
                    <h5 class="card-title" style="font-family: Boldonse, system-ui;">Subak Terdaftar</h5>
                    <p>Total Subak: <?= $jumlahsubak; ?></p>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <div class="card shadow-sm" style="width: 18rem; margin-left: 25px">
                <div class="card-body">
                    <h5 class="card-title" style="font-family: Boldonse, system-ui;">Subak Terverifikasi</h5>
                    <p class="card-text">Total: <?= $jumlah_verifikasi_sukses ?>  </p>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <div class="card shadow-sm" style="width: 18rem; margin-left: 25px">
                <div class="card-body">
                    <h5 class="card-title" style="font-family: Boldonse, system-ui;">Subak Belum Terverifikasi</h5>
                    <p class="card-text">Total: <?= $jumlah_belum_verifikasi ?> </p>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <div class="card shadow-sm" style="width: 18rem; margin-left: 25px">
                <div class="card-body">
                    <h5 class="card-title" style="font-family: Boldonse, system-ui;">Verifikasi Ditolak</h5>
                    <p class="card-text">Total: <?= $jumlah_verifikasi_ditolak?></p>
                </div>
            </div>
        </div>        
    </div>
    <div class="container">
        <!-- <img src="assets\images\1.jpeg" alt="">
        <img src="assets\images\2.jpeg" alt="">
        <img src="assets\images\3.jpeg" alt=""> -->
    </div>
</div>

