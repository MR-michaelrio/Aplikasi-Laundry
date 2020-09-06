<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
      <?php if($_GET['page'] == "dashboard"){ ?>
        <a href="index?page=dashboard&aksi=masuk" class="nav-link">Home</a>
      <?php } else{ ?>
        <a href="../index?page=dashboard&aksi=masuk" class="nav-link">Home</a>
      <?php } ?>
      </li>
    </ul>
  </nav>