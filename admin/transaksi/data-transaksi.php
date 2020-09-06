<?php
session_start();
include "../../koneksi.php";
include "../../template/index2.php";
$koneksi = new database();
$data = $koneksi->detail_transaksi();
?>
        <div class="row">
            <div class="col-md-12">
                <div class="card table-responsive">
                    <div class="card-header">
                        <h3 class="card-title">Data Transaksi</h3>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Status</th>
                            <th scope="col">ID Outlet</th>
                            <th scope="col">Kode Invoice</th>
                            <th scope="col">ID Member</th>
                            <th scope="col">ID Paket</th>
                            <th scope="col">Batas Tanggal Bayar</th>
                            <th scope="col">Tanggal Bayar</th>
                            <th scope="col">QTY</th>
                            <th scope="col">Keterangan</th>
                            </tr>
                        </thead>
                        <?php $no = 1; foreach($data as $a){  ?>
                        <tbody>
                            <tr>
                            <th scope="row"><?php echo $no++; ?></th>
                            <td><?php echo $a['status'] ?></td>
                            <td><?php echo $a['id_outlet'] ?></td>
                            <td><?php echo $a['kode_invoice'] ?></td>
                            <td><?php echo $a['id_member'] ?></td>
                            <td><?php echo $a['id_paket'] ?></td>
                            <td><?php echo $a['batas_waktu'] ?></td>
                            <td><?php echo $a['tgl_bayar'] ?></td>
                            <td><?php echo $a['qty'] ?></td>
                            <td><?php echo $a['keterangan'] ?></td>
                            <td><a href="../../proses.php?id=<?php echo $a['id'] ?>&action=bayar&page=pelanggan&aksi=masuk" class="btn btn-primary btn-xs">Bayar</a> |
                            <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#exampleModal">Status</button> 
                            | <a href="../../proses.php?id=<?php echo $a['id'] ?>&action=transaksidelete" class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');">Delete Data</a></td>
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
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Status Laundry</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="../../proses.php?action=status&id=<?php echo $a['id'] ?>">
            <select class="form-control" name=status>
                <option value="baru">Baru</option>
                <option value="proses">Proses</option>
                <option value="selesai">Selesai</option>
                <option value="diambil">Diambil</option>
            </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>