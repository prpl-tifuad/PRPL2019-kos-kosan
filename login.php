<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan database
include 'sql_connect.php';

// menangkap data yang dikirim dari form

if($_POST['username'] == "admin" and $_POST['password'] == "123456"){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	header("location:op.php");
}
else{
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM user where username='$username' and password='$password'";
	$data = mysqli_query($konek, $sql);


	// menghitung jumlah data yang ditemukan
	$cek = mysqli_num_rows($data);

	if($cek > 0){
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		header("location:dashboard.php");
	}else{
		header("location:index.php?pesan=gagal");
	}
}
?>