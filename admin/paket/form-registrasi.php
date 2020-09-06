<?php
session_start();
include "../../koneksi.php";
include "../../template/index2.php";
$koneksi = new database();
$a = $koneksi->outletpaket();
?>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Pendaftaran Paket</h3>
                    </div>
                        <form role="form" method=post action="../../proses.php?action=paketbaru">
                            <div class="form-group card-body">
                                <label>Outlet</label>
                                <select class="form-control" name=id_outlet>
                                <?php foreach($a as $b){ ?> 
                                <option value=<?php echo $b['id']; ?>><?php echo $b['nama']; ?></option>
                                <?php } ?>
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
                                <input type="text" name=nama_paket class="form-control" placeholder="Nama Paket">
                            </div>
                            <div class="form-group card-body">
                                <label>Harga Paket</label>
                                <input type="text" name=harga class="form-control" placeholder="Harga Paket">
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