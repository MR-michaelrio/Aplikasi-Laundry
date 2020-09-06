<?php
session_start();
include "../../koneksi.php";
include "../../template/index2.php";
$db = new database();
?>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Update Data Outlet</h3>
                    </div>
                        <form role="form" method=post action="../../proses.php?action=outletupdate">
                        <?php
                            foreach($db->edit_outlet($_GET['id']) as $a){
                        ?>
                            <div class="form-group card-body">
                                <label>Nama Outlet</label>
                                <input type="hidden" name=id value="<?php echo $a['id']; ?>">
                                <input type="text" name=nama class="form-control" value="<?php echo $a['nama'] ?>" placeholder="Nama Outlet">
                            </div>
                            <div class="form-group card-body">
                                <label>No. Telp</label>
                                <input type="text" name=tlp class="form-control" value="<?php echo $a['tlp'] ?>" placeholder="Nomor Telphone">
                            </div>
                            <div class="form-group card-body">
                                <label>Alamat</label>
                                <textarea class="form-control" name="alamat" rows="3"><?php echo $a['alamat'] ?></textarea>
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