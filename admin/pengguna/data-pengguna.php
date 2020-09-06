<?php
session_start();
include "../../koneksi.php";
include "../../template/index2.php";
$koneksi = new database();
$data = $koneksi->data_Pengguna();
?>
        <div class="row">
            <div class="col-md-12">
                <div class="card table-responsive">
                    <div class="card-header">
                        <h3 class="card-title">Data Pengguna</h3>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">ID Outlet</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Username</th>
                            <th scope="col">Password</th>
                            <th scope="col">Role</th>
                            </tr>
                        </thead>
                        <?php $no = 1; foreach($data as $a){  ?>
                        <tbody>
                            <tr>
                            <th scope="row"><?php echo $no++; ?></th>
                            <td><?php echo $a['id_outlet'] ?></td>
                            <td><?php echo $a['nama'] ?></td>
                            <td><?php echo $a['username'] ?></td>
                            <td><?php echo $a['password'] ?></td>
                            <td><?php echo $a['role'] ?></td>
                            <td><a href="update-data.php?id=<?php echo $a['id'] ?>&page=pelanggan&aksi=masuk" class="btn btn-primary ">Update Data</a> | <a href="../../proses.php?id=<?php echo $a['id'] ?>&action=penggunadelete" class="btn btn-danger " onClick="return confirm('Do you really want to delete');">Delete Data</a></td>
                            </tr>
                        </tbody>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<?php include "../../template/footer.php"; ?>