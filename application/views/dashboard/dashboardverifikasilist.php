<div class="container mt-4">
  <div class="table" style="margin-left: 25px">
    <h1>Subak Gianyar Terdaftar</h1>
  <table class="table">
    <thead>
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
                  case 'data tidak valid':
                  case 'tidak valid':
                    $badge_class = 'badge bg-secondary text-light ';
                    $icon = '<i class="bi bi-clock-fill me-1"></i>';
                    $text = 'Data Tidak Valid';
                    break;
                  case 'data diperbarui':
                  case 'diperbarui':
                    $badge_class = 'badge bg-info text-light ';
                    $icon = '<i class="bi bi-clock-fill me-1"></i>';
                    $text = 'Data Diperbarui';
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
          <a href="<?php echo base_url('DashboardVerifikasiList/VerifikasiDataSubak/' . $row->id_subak); ?>" class="btn btn-primary">Verifikasi</a>
        </td>
      <?php endforeach ?>


      </tr>
    </tbody>
  </table>

  </div>
</div>

