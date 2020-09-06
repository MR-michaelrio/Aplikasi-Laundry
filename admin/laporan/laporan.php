<?php
session_start();
include "../../koneksi.php";
include "../../template/header.php";
$koneksi = new database();
$data = $koneksi->detail_transaksi();
?>
<Center>
<h3>Generate Laporan</h3>
</center>
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Status</th>
                            <th scope="col">ID Outlet</th>
                            <th scope="col">Kode Invoice</th>
                            <th scope="col">ID Member</th>
                            <th scope="col">ID Paket</th>
                            <th scope="col">Tanggal Masuk</th>
                            <th scope="col">Batas Tanggal Bayar</th>
                            <th scope="col">Tanggal Bayar</th>
                            <th scope="col">QTY</th>
                            <th scope="col">Biaya Tambahan</th>
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
                            <td><?php echo $a['tgl'] ?></td>
                            <td><?php echo $a['batas_waktu'] ?></td>
                            <td><?php echo $a['tgl_bayar'] ?></td>
                            <td><?php echo $a['qty'] ?></td>
                            <td><?php echo $a['biaya_tambahan'] ?></td>
                            <td><?php echo $a['keterangan'] ?></td>
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
  <style type="text/css" media="print">
  @page { size: landscape; }
</style>
  <script>
  window.print();
  </script>