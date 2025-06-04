<div class="container mt-4">
  <div class="table" style="margin-left: 25px">
    <h1>Subak Gianyar Terdaftar</h1>
    <!-- debug data -->
    <!-- <pre><?php print_r($totalsubak); ?></pre> -->

    <h1>isi pagination woy!</h1>
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
          <button type="button" class="btn btn-info">Detail</button>
          <button type="button" class="btn btn-warning">Update</button>
          <button type="button" class="btn btn-danger">Delete</button>
        </td>
      <?php endforeach ?>

      </tr>
    </tbody>

  </table>
  </div>
</div>
