<?php
session_start();
include "../../koneksi.php";
include "../../template/index2.php";
$koneksi = new database();
$a = $koneksi-> data_transaksi();
$ab = $koneksi-> data_paket();
?>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Transaksi</h3>
                    </div>
                        <form role="form" method=post action="../../proses.php?action=transaksi">
                            <div class="form-group card-body">
                                <label>ID Transaksi</label>
                                <input type=text name=id_transaksi class="form-control" value=<?php echo $_GET['id']; ?>>
                            </div>
                            <div class="form-group card-body">
                                <label>ID Paket</label>
                                <select class="form-control" name=id_paket>
                                <?php foreach($ab as $b){ ?> 
                                <option value=<?php echo $b['id']; ?>><?php echo $b['id']; ?> <?php echo $b['nama_paket']; ?></option>
                                <?php } ?>
                                </select>
                            </div>
                            <div class="form-group card-body">
                                <label>QTY</label>
                                <input type="text" name=qty class="form-control" placeholder="QTY">
                            </div>
                            <div class="form-group card-body">
                                <label>Keterangan</label>
                                <textarea class="form-control" name=keterangan rows="3"></textarea>
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