<?php
include 'sql_connect.php';
// menyimpan data id kedalam variabel
$idpel = $_GET['id_pel'];
// query SQL untuk insert data
$query="DELETE from orders where id='$idpel'";
mysqli_query($konek, $query);
// mengalihkan ke halaman index.php
header("location:dashboard.php");
?>