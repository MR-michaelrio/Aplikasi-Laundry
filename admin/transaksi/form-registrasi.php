<?php
session_start();
include "../../koneksi.php";
include "../../template/index2.php";
$koneksi = new database();
$a = $koneksi-> outletpaket();
$ab = $koneksi-> data_member();
?>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Transaksi</h3>
                    </div>
                        <form role="form" method=post action="../../proses.php?action=transaksibaru">
                            <div class="form-group card-body">
                                <label>Outlet</label>
                                <select class="form-control" name=id_outlet>
                                <?php foreach($a as $b){ ?> 
                                <option value=<?php echo $b['id']; ?>><?php echo $b['id']; ?> <?php echo $b['nama']; ?></option>
                                <?php } ?>
                                </select>
                            </div>
                            <div class="form-group card-body">
                                <label>Member</label>
                                <select class="form-control" name=id_member>
                                <?php foreach($ab as $b){ ?> 
                                <option value=<?php echo $b['id']; ?>><?php echo $b['id']; ?> <?php echo $b['nama']; ?></option>
                                <?php } ?>
                                </select>
                            </div>
                            
                            <div class="form-group card-body ">
                            <label>Batas Waktu</label>
                                <div class=input-group>
                                    <input type="text" name=batas_waktu placeholder="Batas Waktu" class="form-control datepicker datetimepicker-input" data-date-format="DD-MM-YYYY" data-toggle="datetimepicker" data-target=".datepicker">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-calendar-day"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group card-body">
                                <label>Biaya Tambahan</label>
                                <input type="text" name=biaya_tambahan class="form-control" placeholder="Biaya Tambahan">
                            </div>
                            <div class="form-group card-body">
                                <label>Diskon</label>
                                <input type="text" name=diskon class="form-control" placeholder="Diskon">
                            </div>
                            <div class="form-group card-body">
                                <label>Pajak</label>
                                <input type="text" name=pajak class="form-control" placeholder="Pajak">
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