<div class="" style="margin-left: 25px">
    <h1>Subak Terdata</h1>
</div>
<div class="container mb-5">
    <div class="card">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-4">
                    <label class="form-label">Filter Status:</label>
                    <select id="filterStatus" class="form-select">
                        <option value="">Semua Status</option>
                        <option value="Terverifikasi">Terverifikasi</option>
                        <option value="Belum Terverifikasi">Belum Terverifikasi</option>
                        <option value="Data Ditolak">Data Ditolak</option>
                        <option value="Data Tidak Valid">Data Tidak Valid</option>
                        <option value="Data Diperbarui">Data Diperbarui</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Filter Kriteria:</label>
                    <select id="filterKriteria" class="form-select">
                        <option value="">Semua Kriteria</option>
                        <option value="Subak Basah">Subak Basah</option>
                        <option value="Subak Abian">Subak Abian</option>
                    </select>
                </div>
            </div>
            <table id="subakTable" class="table table-striped table-hover" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Subak</th>
                        <th>Kriteria</th>
                        <th>Verifikasi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($totalsubak as $row) : ?>
                    <tr>
                        <td><?php echo $row->id_subak; ?></td>
                        <td><?php echo $row->nama_subak; ?></td>
                        <td><?php echo $row->kriteria_subak; ?></td>
                        <td>
                            <?php 
                            $verifikasi = strtolower(trim($row->verifikasi));
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
                                case 'belum terverifikasi':
                                case 'belum':
                                default:
                                    $badge_class = 'bg-warning text-light';
                                    $icon = '<i class="bi bi-clock-fill me-1"></i>';
                                    $text = 'Belum Terverifikasi';
                                    break;
                            }
                            ?>
                            <span class="badge <?php echo $badge_class; ?>">
                                <?php echo $icon . $text; ?>
                            </span>
                        </td>
                        <td>
                            <div class="btn-group-action">
                                <a href="<?php echo base_url('DashboardSubakTerdata/DashboardViewData/' . $row->id_subak); ?>" 
                                   class="btn btn-info btn-sm" 
                                   title="Lihat Detail">
                                    <i class="bi bi-eye"></i> Detail
                                </a>
                                <a href="<?php echo base_url('DashboardSubakTerdata/MasukHalaman/' . $row->id_subak); ?>" 
                                   class="btn btn-warning btn-sm" 
                                   title="Update Data">
                                    <i class="bi bi-pencil"></i> Update
                                </a>
                                <a href="<?php echo base_url('DashboardSubakTerdata/ExportExcel/' . $row->id_subak); ?>" 
                                   class="btn btn-success btn-sm" 
                                   title="Export Excel">
                                    <i class="bi bi-file-earmark-excel"></i> Export
                                </a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>