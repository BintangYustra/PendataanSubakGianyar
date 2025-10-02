<div class="container mt-4">
  <div class="table" style="margin-left: 25px">
    <h1>Subak Gianyar Terdaftar</h1>
    
    <table class="table table-hover">
      <thead class="table">
        <tr>
          <th>Id Subak</th>
          <th>Nama Subak</th>
          <th>Kriteria Subak</th>
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
                // Tentukan badge berdasarkan status verifikasi
                $verifikasi = strtolower(trim($row->verifikasi));
                $badge_class = '';
                $icon = '';
                $text = '';
                
                switch($verifikasi) {
                  case 'terverifikasi':
                  case 'diterima':
                    $badge_class = 'badge bg-success text-light';
                    $icon = '<i class="bi bi-check-circle-fill me-1"></i>';
                    $text = 'Terverifikasi';
                    break;
                  case 'data ditolak':
                  case 'ditolak':
                    $badge_class = 'badge bg-danger text-light';
                    $icon = '<i class="bi bi-x-circle-fill me-1"></i>';
                    $text = 'Data Ditolak';
                    break;
                  case 'belum terverifikasi':
                  case 'belum':
                  default:
                    $badge_class = 'badge bg-warning text-light ';
                    $icon = '<i class="bi bi-clock-fill me-1"></i>';
                    $text = 'Belum Terverifikasi';
                    break;
                }
              ?>
              <span class="<?php echo $badge_class; ?>">
                <?php echo $icon . $text; ?>
              </span>
            </td>
            <td>
              <div class="btn" role="group">
                <a href="<?php echo base_url('DashboardSubakTerdata/DashboardViewData/' . $row->id_subak); ?>" 
                   class="btn btn-sm btn-info" 
                   title="Lihat Detail">
                  <i class="bi bi-eye"></i> Detail
                </a>
                <a href="<?php echo base_url('DashboardSubakTerdata/MasukHalaman/' . $row->id_subak); ?>" 
                   class="btn btn-sm btn-warning" 
                   title="Update Data">
                  <i class="bi bi-pencil"></i> Update
                </a>
              </div>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
    
    <!-- Pagination Links -->
    <?php if(isset($link)): ?>
      <div class="d-flex justify-content-center mt-3">
        <?php echo $link; ?>
      </div>
    <?php endif; ?>
    
  </div>
</div>
