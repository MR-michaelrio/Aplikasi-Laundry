<?php
session_start();
include "../../koneksi.php";
include "../../template/index2.php";
$db = new database();
$data = $db->data_outlet();
?>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Update Paket</h3>
                    </div>
                        <form role="form" method=post action="../../proses.php?action=paketupdate">
                        <?php
                            foreach($db->edit_outlet($_GET['id']) as $a){
                        ?>
                        <input type="text" name=id class="form-control" value="<?php echo $a['id']; ?>">
                            <div class="form-group card-body">
                                <label>Outlet</label>
                                <select class="form-control" name=id_outlet>
                                    <?php foreach($data as $row): ?>
                                        <option value="<?php echo $row['id_outlet'] ?>">
                                            <?php echo $row['nama'] ?>
                                        </option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="form-group card-body">
                                <label>Jenis</label>
                                <select class="form-control" name=jenis>
                                <option value=kiloan>Kiloan</option>
                                <option value=selimut>Selimut</option>
                                <option value=bed_cover>Bed Cover</option>
                                <option value=kaos>Kaos</option>
                                <option value=lain>Lain-lain</option>
                                </select>
                            </div>
                            <div class="form-group card-body">
                                <label>Nama Paket</label>
                                <input type="text" name=nama_paket class="form-control" value="<?php echo $a['nama_paket']; ?>" placeholder="Nama Paket">
                            </div>
                            <div class="form-group card-body">
                                <label>Harga Paket</label>
                                <input type="text" name=harga class="form-control" value="<?php echo $a['harga']; ?>" placeholder="Harga Paket">
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