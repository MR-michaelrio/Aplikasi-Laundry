<?php
session_start();
include "../../koneksi.php";
include "../../template/index2.php";
$koneksi = new database();
$ab = $koneksi-> outletpaket();
$data = $koneksi->edit_pengguna($_GET['id']);
?>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Update Pengguna</h3>
                    </div>
                        <form role="form" method=post action="../../proses.php?action=penggunaupdate">
                        <?php
                            foreach($data as $a){
                        ?>
                            <div class="form-group card-body">
                                <label>Nama</label>
                                <input type="text" name=id value="<?php echo $a['id']; ?>">
                                <input type="text" name=nama class="form-control" value="<?php echo $a['nama'] ?>" placeholder="Nama">
                            </div>
                            <div class="form-group card-body">
                                <label>Username</label>
                                <input type="text" name=username class="form-control" value="<?php echo $a['username'] ?>" placeholder="Username">
                            </div>
                            <div class="form-group card-body">
                                <label>Password</label>
                                <input type="text" name=password class="form-control" value="<?php echo $a['password'] ?>" placeholder="Password">
                            </div>
                            <div class="form-group card-body">
                                <label>Role</label>
                                <select class="form-control" name=role>
                                <option disabled><?php echo $a['role'] ?> YANG DIPILIH SEBELUMNYA</option>
                                <option value=admin>Admin</option>
                                <option value=kasir>Kasir</option>
                                <option value=owner>Owner</option>
                                </select>
                            </div>
                            <div class="form-group card-body">
                                <label>Outlet</label>
                                <select class="form-control" name=id_outlet>
                                <option disabled><?php echo $a['id_outlet'] ?> YANG DIPILIH SEBELUMNYA</option>
                                <?php foreach($ab as $b){ ?> 
                                <option value=<?php echo $b['id']; ?>><?php echo $b['nama']; ?> <?php echo $b['id'] ?></option>
                                <?php } ?>
                                </select>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary ">Submit</button>
                            </div>
                            <?php } ?>
                        </form>
                    </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<?php include "../../template/footer.php"; ?>