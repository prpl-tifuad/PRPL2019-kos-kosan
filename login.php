<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan database
include 'sql_connect.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);

// menyeleksi data admin dengan username dan password yang sesuai
$sql = "SELECT * FROM user where username='$username' and password='$password'";
$data = mysqli_query($konek, $sql);

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:admin/timeline.php");
}else{
    header("location:index.php?pesan=gagal");
}
?>