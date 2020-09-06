<?php
class database{
    var $host = "localhost";
    var $user = "root";
    var $pass = "";
    var $database = "laundry";
    var $koneksi = "";

    function __construct(){
        $con = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $this->koneksi = $con;
    }

    function login($username,$password){
        $login = mysqli_query($this->koneksi,"select * from tb_user where username='$username' and password='$password'");
        $cek = mysqli_num_rows($login);

        if($cek > 0){
 
            $data = mysqli_fetch_array($login);
         
            if($data['role']=="admin"){
                $_SESSION['username'] = $data['username'];
                $_SESSION['id'] = $data['id'];
                $_SESSION['role'] = "admin";
                return true;
            }else if($data['role']=="kasir"){
                $_SESSION['username'] = $data['username'];
                $_SESSION['id'] = $data['id'];
                $_SESSION['role'] = "kasir";
                return true;
            }
            else if($data['role']=="owner"){
                $_SESSION['username'] = $data['username'];
                $_SESSION['id'] = $data['id'];
                $_SESSION['role'] = "owner";
                return true;
            }else{
                return false;
            }	
        }else{
            return false;
        }
    }

    function register_member($id,$nama,$jenis_kelamin,$tlp,$alamat){
        mysqli_query($this->koneksi,"INSERT INTO tb_member VALUES('$id','$nama','$alamat','$jenis_kelamin','$tlp')");
        return TRUE;
    }

    function paketbaru($id,$id_outlet,$jenis,$nama_paket,$harga){
        mysqli_query($this->koneksi,"INSERT INTO tb_paket VALUES('$id','$id_outlet','$jenis','$nama_paket','$harga')");
        return TRUE;
    }

    function outletbaru($id,$nama,$tlp,$alamat){
        mysqli_query($this->koneksi,"INSERT INTO tb_outlet VALUES('$id','$nama','$alamat','$tlp')");
        return TRUE;
    }

    function data_member(){
        $a = mysqli_query($this->koneksi,"SELECT * FROM tb_member");
        while($query = mysqli_fetch_array($a)){
            $hasil[] = $query;
        }
        return $hasil;
    }

    function outletpaket(){
        $a = mysqli_query($this->koneksi,"SELECT * FROM tb_outlet");
        while($query = mysqli_fetch_array($a)){
            $hasil[] = $query;
        }
        return $hasil;
    }

    function data_outlet(){
        $a = mysqli_query($this->koneksi,"SELECT * FROM tb_outlet");
        while($query = mysqli_fetch_array($a)){
            $hasil[] = $query;
        }
        return $hasil;
    }

    function data_paket(){
        $a = mysqli_query($this->koneksi,"SELECT * FROM tb_paket");
        while($query = mysqli_fetch_array($a)){
            $hasil[] = $query;
        }
        return $hasil;
    }
    
    function outlet(){
        $a = mysqli_query($this->koneksi,"SELECT COUNT(*) FROM tb_outlet");
        while($query = mysqli_fetch_array($a)){
            $hasil[] = $query;
        }
        return $hasil;
    }
    
    function transaksi(){
        $a = mysqli_query($this->koneksi,"SELECT COUNT(*) FROM tb_transaksi");
        while($query = mysqli_fetch_array($a)){
            $hasil[] = $query;
        }
        return $hasil;
    }

    function members(){
        $a = mysqli_query($this->koneksi,"SELECT COUNT(*) FROM tb_member");
        while($query = mysqli_fetch_array($a)){
            $hasil[] = $query;
        }
        return $hasil;
    }

    function edit_outlet($id){
		$data = mysqli_query($this->koneksi,"SELECT * FROM tb_paket WHERE id='$id'");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
    }    
    
    function outletedit($id,$nama,$tlp,$alamat){
		$data = mysqli_query($this->koneksi,"UPDATE tb_outlet SET id='$id', nama='$nama', tlp='$tlp', alamat='$alamat' WHERE id='$id'");
		return TRUE;
    }

    function paketedit($id,$id_outlet,$jenis,$nama_paket,$harga){
		$data = mysqli_query($this->koneksi,"UPDATE tb_paket SET id='$id', id_outlet='$id_outlet', jenis='$jenis', nama_paket='$nama_paket', harga='$harga' WHERE id='$id'");
		return TRUE;
    }
    
    function outletdelete($id)
	{
        $deleterecord=mysqli_query($this->koneksi,"delete from tb_outlet where id='$id'");
        return $deleterecord;
    }
    
    function paketdelete($id)
	{
        $deleterecord=mysqli_query($this->koneksi,"delete from tb_paket where id='$id'");
        return $deleterecord;
    }
    function penggunabaru($id,$nama,$username,$password,$id_outlet,$role){
		$data = mysqli_query($this->koneksi,"INSERT INTO tb_user VALUES ('$id', '$nama', '$username', '$password', '$id_outlet', '$role')");
        return TRUE;
    }
    function data_Pengguna(){
        $data = mysqli_query($this->koneksi,"SELECT * FROM tb_user");
        while($row = mysqli_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }
    function edit_pengguna($id){
		$data = mysqli_query($this->koneksi,"SELECT * FROM tb_user WHERE id='$id'");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
    }  
    function penggunaedit($id,$nama,$username,$password,$id_outlet,$role){
		$data = mysqli_query($this->koneksi,"UPDATE tb_user SET id='$id', nama='$nama', username='$username', password='$password', id_outlet='$id_outlet', role='$role' WHERE id='$id'");
		return TRUE;
    }
    function deletepengguna($id){
        mysqli_query($this->koneksi, "DELETE FROM tb_user WHERE id='$id'");
        return true;
    }
    function data_transaksi(){
        $a = mysqli_query($this->koneksi,"SELECT * FROM tb_transaksi");
        while($row = mysqli_fetch_array($a)){
            $hasil[] = $row;
        }
        return $hasil;
    }
    function transaksibaru($id,$id_outlet,$kode_invoice,$id_member,$tgl,$batas_waktu,$tgl_bayar,$biaya_tambahan,$diskon,$pajak,$status,$dibayar,$id_user){
        mysqli_query($this->koneksi,"INSERT INTO tb_transaksi VALUES('$id','$id_outlet','$kode_invoice','$id_member','$tgl','$batas_waktu','$tgl_bayar','$biaya_tambahan','$diskon','$pajak','$status','$dibayar','$id_user')");
        return TRUE;
    }
    function detail_transaksi_baru($id,$id_transaksi,$id_paket,$qty,$keterangan){
        mysqli_query($this->koneksi,"INSERT INTO tb_detail_transaksi VALUE('$id','$id_transaksi','$id_paket','$qty','$keterangan')");
        return TRUE;
    }
    function detail_transaksi(){
        $data = mysqli_query($this->koneksi,"SELECT * FROM tb_detail_transaksi INNER JOIN tb_transaksi ON tb_detail_transaksi.id_transaksi = tb_transaksi.id");
        while($row = mysqli_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }
    function bayar($tgl_bayar,$dibayar){
        $id = $_GET['id'];
        mysqli_query($this->koneksi,"UPDATE tb_transaksi SET tgl_bayar='$tgl_bayar', dibayar='$dibayar' WHERE id='$id'");
        return TRUE;
    }
    function statuslaundry($status){
        $id = $_GET['id'];
        mysqli_query($this->koneksi,"UPDATE tb_transaksi SET status='$status' WHERE id='$id'");
        return TRUE;
    }
    function transaksidelete($id){
        mysqli_query($this->koneksi,"DELETE FROM tb_transaksi WHERE id='$id'");
        return TRUE;
    }
    function logout(){
        session_destroy();
        return TRUE;
    }
}

?>