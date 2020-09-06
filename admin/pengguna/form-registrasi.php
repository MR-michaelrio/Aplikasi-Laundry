<?php
session_start();
include "../../koneksi.php";
include "../../template/index2.php";
$koneksi = new database();
$a = $koneksi-> outletpaket();
?>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Pendaftaran Pengguna</h3>
                    </div>
                        <form role="form" method=post action="../../proses.php?action=penggunabaru">
                            <div class="form-group card-body">
                                <label>Nama</label>
                                <input type="text" name=nama class="form-control" placeholder="Nama">
                            </div>
                            <div class="form-group card-body">
                                <label>Username</label>
                                <input type="text" name=username class="form-control" placeholder="Username">
                            </div>
                            <div class="form-group card-body">
                                <label>Password</label>
                                <input type="text" name=password class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group card-body">
                                <label>Role</label>
                                <select class="form-control" name=role>
                                <option value=admin>Admin</option>
                                <option value=kasir>Kasir</option>
                                <option value=owner>Owner</option>
                                </select>
                            </div>
                            <div class="form-group card-body">
                                <label>Outlet</label>
                                <select class="form-control" name=id_outlet>
                                <?php foreach($a as $b){ ?> 
                                <option value=<?php echo $b['id']; ?>><?php echo $b['nama']; ?></option>
                                <?php } ?>
                                </select>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary ">Submit</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<?php include "../../template/footer.php"; ?>