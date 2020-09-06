<?php
session_start();
include "../../koneksi.php";
include "../../template/index2.php";
$koneksi = new database();
$data = $koneksi->data_member();
?>
        <div class="row">
            <div class="col-md-12">
                <div class="card table-responsive">
                    <div class="card-header">
                        <h3 class="card-title">Data Member</h3>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Member</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">No. Telp Pelanggan</th>
                            <th scope="col">Alamat</th>
                            </tr>
                        </thead>
                        <?php $no = 1; foreach($data as $a){  ?>
                        <tbody>
                            <tr>
                            <th scope="row"><?php echo $no++; ?></th>
                            <td><?php echo $a['nama'] ?></td>
                            <td><?php echo $a['jenis_kelamin'] ?></td>
                            <td><?php echo $a['tlp'] ?></td>
                            <td><?php echo $a['alamat'] ?></td>
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