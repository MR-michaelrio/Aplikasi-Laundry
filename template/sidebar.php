<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['username']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <?php error_reporting(0); if($_SESSION['role']!= "owner"){ ?>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Registrasi Pelanggan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <?php  if($_GET['aksi']=="masuk"){ ?>
              <li class="nav-item">
                <a href="../pelanggan/register?page=pelanggan&aksi=masuk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form Registrasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../pelanggan/data?page=pelanggan&aksi=masuk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pelanggans</p>
                </a>
              </li>
            <?php } else{?>
              <li class="nav-item">
                <a href="pelanggan/register?page=pelanggan&aksi=masuk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form Registrasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pelanggan/data?page=pelanggan&aksi=masuk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pelanggan</p>
                </a>
              </li>
            <?php } ?>
            </ul>
          </li>
            <?php } ?>
          <?php error_reporting(0); if($_SESSION['role'] == "admin"){ ?>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-store"></i>
              <p>
                Outlet
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <?php  if($_GET['aksi']=="masuk"){ ?>
              <li class="nav-item">
                <a href="../outlet/form-registrasi?page=pelanggan&aksi=masuk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form Outlet Baru</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../outlet/data-outlet?page=pelanggan&aksi=masuk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Outlet</p>
                </a>
              </li>
            <?php } else{?>
              <li class="nav-item">
                <a href="outlet/form-registrasi?page=pelanggan&aksi=masuk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form Outlet Baru</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="outlet/data-outlet?page=pelanggan&aksi=masuk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Outlet</p>
                </a>
              </li>
            <?php } ?>
            </ul>
          </li>
          <?php }?>
          <?php error_reporting(0); if($_SESSION['role'] == "admin"){ ?>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-box-open"></i>
              <p>
                Paket Cucian
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <?php  if($_GET['aksi']=="masuk"){ ?>
              <li class="nav-item">
                <a href="../paket/form-registrasi?page=pelanggan&aksi=masuk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form Paket Baru</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../paket/data-paket?page=pelanggan&aksi=masuk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Paket</p>
                </a>
              </li>
            <?php } else{?>
              <li class="nav-item">
                <a href="paket/form-registrasi?page=pelanggan&aksi=masuk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form Paket Baru</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="paket/data-paket?page=pelanggan&aksi=masuk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Paket</p>
                </a>
              </li>
            <?php } ?>
            </ul>
          </li>
          <?php }?>
          <?php error_reporting(0); if($_SESSION['role'] == "admin"){ ?>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Pengguna
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <?php  if($_GET['aksi']=="masuk"){ ?>
              <li class="nav-item">
                <a href="../pengguna/form-registrasi?page=pelanggan&aksi=masuk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form Pengguna Baru</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Pengguna/data-Pengguna?page=pelanggan&aksi=masuk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pengguna</p>
                </a>
              </li>
            <?php } else{?>
              <li class="nav-item">
                <a href="Pengguna/form-registrasi?page=pelanggan&aksi=masuk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form Pengguna Baru</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Pengguna/data-Pengguna?page=pelanggan&aksi=masuk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pengguna</p>
                </a>
              </li>
            <?php } ?>
            </ul>
          </li>
          <?php }?>
          <?php error_reporting(0); if($_SESSION['role'] != "owner"){ ?>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                Entri Transaksi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <?php  if($_GET['aksi']=="masuk"){ ?>
              <li class="nav-item">
                <a href="../transaksi/form-registrasi?page=pelanggan&aksi=masuk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form Transaksi Baru</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../transaksi/data-transaksi?page=pelanggan&aksi=masuk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Transaksi</p>
                </a>
              </li>
            <?php } else{?>
              <li class="nav-item">
                <a href="transaksi/form-registrasi?page=pelanggan&aksi=masuk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form Transaksi Baru</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="transaksi/data-transaksi?page=pelanggan&aksi=masuk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Transaksi</p>
                </a>
              </li>
            <?php } ?>
            </ul>
          </li>
          <?php }?>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file-invoice"></i>
              <p>
                Generate Laporan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <?php  if($_GET['aksi']=="masuk"){ ?>
              <li class="nav-item">
                <a href="../laporan/laporan?page=pelanggan&aksi=masuk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Generate Laporan</p>
                </a>
              </li>
            <?php } else{?>
              <li class="nav-item">
                <a href="laporan/laporan?page=pelanggan&aksi=masuk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Generate Laporan</p>
                </a>
              </li>
            <?php } ?>
            </ul>
          </li>
          <?php  if($_GET['aksi']=="masuk"){ ?>
          <li class="nav-item">
            <a href="../../proses.php?action=logout" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Log-OUT
              </p>
            </a>
          </li>
          <?php } else{?>
          <li class="nav-item">
            <a href="../proses.php?action=logout" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Log-OUT
              </p>
            </a>
          </li>
          <?php } ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>