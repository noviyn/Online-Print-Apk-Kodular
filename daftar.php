<?php 
// koneksi database
include 'koneksi.php';

$nama = $_POST['nama'];
$telp = $_POST['telp'];
$username=$_POST['username'];
$pass = $_POST['pass'];

$query=mysqli_query($koneksi,"select * from user where username='$username'");
$cek=mysqli_num_rows($query);

if($cek > 0){
	echo "Username yang anda gunakan sudah terdaftar!";
}else{

if($nama == "" or $telp == "" or $username == "" or $pass == "" ){
	echo "Tidak Boleh Ada Yang Kosong!";
	}elseif($nama<>"" or $telp <>"" or $username <>"" or $pass <>""){

	$sql_simpan=mysqli_query($koneksi,"insert into user values('$nama','$telp','$username','$pass')");
 	echo "Selamat anda sudah berhasil melakukan pendaftaran!";
	} else {
 	echo "Maaf pendaftaran anda gagal dilakukan!";
	}
}

?>

