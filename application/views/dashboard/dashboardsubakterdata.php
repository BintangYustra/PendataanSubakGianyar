<div class="container mt-4">
  <div class="table" style="margin-left: 25px">
    <h1>masih salah, nanti perbaiki</h1>
  <table class="table">
    <thead>
      <tr>
        <th>Id Subak</th>
        <th>Nama Subak</th>
        <th>Alamat Subak</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($pendataan as $key => $row) : ?>
      <?php endforeach ?>

      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td>
        <button type="button" class="btn btn-info">Detail</button>
        <button type="button" class="btn btn-warning">Update</button>
        <button type="button" class="btn btn-danger">Delete</button>
        </td>
      </tr>
    </tbody>

  </table>
  </div>
</div>
