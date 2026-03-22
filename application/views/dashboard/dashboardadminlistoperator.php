<div class="container mt-4  ">
    <h1 class=""><b>Daftar Operator</b></h1>
    <hr>
        <div class="container mb-5">
            <div class="card">
                <div class="card-body">
                    <table id="subakTable" class="table table-striped table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID Operator</th>
                                <th>Nama Operator</th>
                                <th>Role Operator</th>  
                                <th>Password</th>  
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($totaloperator as $row) : ?>
                            <tr>
                                <td><?php echo $row->id_user; ?></td>
                                <td><?php echo $row->username; ?></td>
                                <td><?php echo $row->role; ?></td>
                                <td><?php echo $row->password; ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>