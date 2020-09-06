<?php
session_start();

include "koneksi.php";
$koneksi = new database();

$action = $_GET['action'];

if($action == "login"){
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $login = $koneksi->login($_POST['username'], $_POST['password']);
        if($login){
            if($_SESSION['role'] == "admin"){
                header("location:admin?page=dashboard");
            }
            elseif($_SESSION['role'] == "kasir"){
                header("location:admin?page=dashboard");
            }
            elseif($_SESSION['role'] == "owner"){
                header("location:admin?page=dashboard");
            }
        }
        else{
            $msg = "PASSWORD/USERNAME SALAH";
        }
    }
}
elseif($action == "registrasi"){
    $id = date("dmy").rand(1,100);
    $koneksi->register_member($id,$_POST['nama'],$_POST['jenis_kelamin'],$_POST['tlp'],$_POST['alamat']);
    header("location:admin/pelanggan/data.php?page=pelanggan&aksi=masuk");
}
elseif($action == "paketbaru"){
    $id = date("dmy").rand(1,100);
    $koneksi->paketbaru($id,$_POST['id_outlet'],$_POST['jenis'],$_POST['nama_paket'],$_POST['harga']);
    header("location:admin/paket/data-paket.php?page=pelanggan&aksi=masuk");
}
elseif($action == "outletbaru"){
    $id = date("dmy").rand(1,100);
    $koneksi->outletbaru($id,$_POST['nama'],$_POST['tlp'],$_POST['alamat']);
    header("location:admin/outlet/data-outlet.php?page=pelanggan&aksi=masuk");
}
elseif($action == "outletupdate"){
    $koneksi->outletedit($_POST['id'],$_POST['nama'],$_POST['tlp'],$_POST['alamat']);
    header("location:admin/outlet/data-outlet.php?page=pelanggan&aksi=masuk");
}
elseif($action == "outletdelete"){
        $id=$_GET['id'];
        $sql=$koneksi->outletdelete($id);
        if($sql){
            header("location:admin/outlet/data-outlet.php?page=pelanggan&aksi=masuk");
        }
}
elseif($action == "paketdelete"){
    $id=$_GET['id'];
    $sql=$koneksi->paketdelete($id);
    if($sql){
        header("location:admin/paket/data-paket.php?page=pelanggan&aksi=masuk");
    }
}
elseif($action == "penggunadelete"){
    $id=$_GET['id'];
    $sql=$koneksi->deletepengguna($id);
    if($sql){
        header("location:admin/pengguna/data-pengguna.php?page=pelanggan&aksi=masuk");
    }
}
elseif($action == "paketupdate"){
    $koneksi->paketedit($_POST['id'],$_POST['id_outlet'],$_POST['jenis'],$_POST['nama_paket'],$_POST['harga']);
    header("location:admin/paket/data-paket.php?page=pelanggan&aksi=masuk");
}
elseif($action == "penggunabaru"){
    $id = $_POST['id_outlet'].rand(1,100);
    $koneksi->penggunabaru($id,$_POST['nama'],$_POST['username'],$_POST['password'],$_POST['id_outlet'],$_POST['role']);
    header("location:admin/pengguna/data-pengguna.php?page=pelanggan&aksi=masuk");
}
elseif($action == "penggunaupdate"){
    $koneksi->penggunaedit($_POST['id'],$_POST['nama'],$_POST['username'],$_POST['password'],$_POST['id_outlet'],$_POST['role']);
    header("location:admin/pengguna/data-pengguna.php?page=pelanggan&aksi=masuk");
}
elseif($action == "transaksibaru"){
    $id = date("dmy").rand(1,100);
    $kode_invoice = date("dmy").rand(1,100);
    $tgl = date("Y-m-d h:i:s");
    $tgl_bayar = "";
    $id_user = $_SESSION['id'];
    $dibayar = "belum_dibayar";
    $status = "baru";
    $bw = $_POST['batas_waktu'];
    $batas_waktu = date("Y-m-d 23:59:s", strtotime($bw));
    echo $batas_waktu;
    $koneksi->transaksibaru($id,$_POST['id_outlet'],$kode_invoice,$_POST['id_member'],$tgl,$batas_waktu,$tgl_bayar
    ,$_POST['biaya_tambahan'],$_POST['diskon'],$_POST['pajak'],$status,$dibayar,$id_user);
    header("location:admin/transaksi/transaksi.php?page=pelanggan&aksi=masuk&id=".$id);
}
elseif($action == "transaksi"){
    $id = date("dmy").rand(1,100);
    $koneksi->detail_transaksi_baru($id,$_POST['id_transaksi'],$_POST['id_paket'],$_POST['qty'],$_POST['keterangan']);
    header("location:admin/transaksi/data-transaksi.php?page=pelanggan&aksi=masuk");
}
elseif($action == "bayar"){
    $tgl_bayar = date("Y-m-d h:m:s");
    $dibayar = "dibayar";
    $koneksi->bayar($tgl_bayar,$dibayar);
    header("location:admin/transaksi/data-transaksi.php?page=pelanggan&aksi=masuk");
}
elseif($action == "status"){
    $koneksi->statuslaundry($_POST['status']);
    header("location:admin/transaksi/data-transaksi.php?page=pelanggan&aksi=masuk");
}
elseif($action == "transaksidelete"){
    $id = $_GET['id'];
    $koneksi->transaksidelete($id);
    header("location:admin/transaksi/data-transaksi.php?page=pelanggan&aksi=masuk");
}
elseif($action == "logout"){
    $logout = $koneksi->logout();
    if ($logout){
        header("location:index");
    }
}
?>