<?php
session_start();
include('koneksi.php');

$username = $_POST['username'];
$password = $_POST['password'];

$result = mysqli_query($koneksi,"SELECT * FROM users where username = '$username' and password = '$password'");
$cek = mysqli_num_rows($result);

if ($cek > 0) {
	$data = mysqli_fetch_assoc($result);

	$_SESSION['username'] = $username;
	$_SESSION['nama'] = $data['nama'];
	$_SESSION['status'] = 'sudah_login';
	$_SESSION['id'] = $data['id'];
	header("index.php";)

}else{
	header("location:login.php?pesan=gagal login data tidak ditemukan");
}
?>