<div class="container mt-4">
  <div class="table" style="margin-left: 25px">
    <h1>Subak Gianyar Terdaftar</h1>
  <?php echo $link?>
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
        <td><?php echo $row->verifikasi; ?></td>
        <td>
          <a href="<?php echo base_url('DashboardSubakTerdata/DashboardViewData/' . $row->id_subak); ?>" class="btn btn-info">Detail</a>
          <a href="<?php echo base_url('DashboardSubakTerdata/MasukHalaman/' . $row->id_subak); ?>" class="btn btn-warning">Update</a>
          <a href="<?php echo site_url('DashboardSubakTerdata/Subak_Delete/' . $row->id_subak); ?>" class="btn btn-danger" onclick="return confirm('Apakah kamu yakin ingin menghapus data ini? (Data dengan ID: <?php echo $row->id_subak?>) Data yang telah terhapus tidak bisa dikembalikan.')">Delete</a>
        </td>
      <?php endforeach ?>

      </tr>
    </tbody>

  </table>

  </div>
</div>

