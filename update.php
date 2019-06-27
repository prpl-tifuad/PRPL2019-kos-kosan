<?php
include 'sql_connect.php';
$no_ktp			= $_POST['no_ktp'];
$id				= $_POST['id'];
$nama_pel		= $_POST['nama_pel'];
$no_hp			= $_POST['no_hp'];
$no_ortu		= $_POST['no_ortu'];
$alamat			= $_POST['alamat'];


$query = "UPDATE pelanggan SET no_ktp='$no_ktp',nama_pel='$nama_pel',no_hp='$no_hp',no_ortu='$no_ortu',alamat='$alamat' where id='$id'";
mysqli_query($konek, $query);
// mengalihkan ke halaman index.php
header("location:dashboard.php");
?>