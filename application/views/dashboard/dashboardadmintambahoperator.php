<div class="container mt-4">
    <h1 class=""><b>Tambah Data Baru</b></h1>
    <hr>

    <form action="<?= base_url('DashboardAdminTambahOperator/TambahOperator') ?>" method="post" enctype="multipart/form-data">
    <div class="card mt-4">
        <div class="card-body">
            <h2 class="mt-4"><b>Data Operator</b></h2>
            <div class="mb-3">
                <label class="form-label">Username Operator</label>
                <input type="text" class="form-control" name="username" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Password Operator</label>
                <input type="text" class="form-control" name="password" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Pilih Role Operator</label>
                <select class="form-control" name="role">
                    <option value="">---</option>
                    <option value="Operator Input Update">Operator Input Update</option>
                    <option value="Operator Verifikasi">Operator Verifikasi</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Nomor Telepon</label>
                <input type="text" class="form-control" name="no_telp" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="text" class="form-control" name="email" required>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Simpan</button>
        </div>
    </form>

</div>

<hr>