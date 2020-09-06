<?php
session_start();
include "../../koneksi.php";
include "../../template/index2.php";
?>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Pendaftaran</h3>
                    </div>
                        <form role="form" method=post action="../../proses.php?action=registrasi">
                            <div class="form-group card-body">
                                <label>Nama Lengkap</label>
                                <input type="text" name=nama class="form-control" placeholder="Nama Lengkap">
                            </div>
                            <div class="form-group card-body">
                                <label>Jenis Kelamin</label>
                                <select class="form-control" name=jenis_kelamin>
                                <option value=L>Laki-laki</option>
                                <option value=P>Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group card-body">
                                <label>No. Telp</label>
                                <input type="text" name=tlp class="form-control" placeholder="Nomor Telphone">
                            </div>
                            <div class="form-group card-body">
                                <label>Alamat</label>
                                <textarea class="form-control" name="alamat" rows="3"></textarea>
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