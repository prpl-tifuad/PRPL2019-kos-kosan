<?php
include 'sql_connect.php';
$orderid = $_GET['orderid'];

$sql1 = "UPDATE orders SET status = 'Diverifikasi' WHERE orderid = '$orderid'";
$check1 = mysqli_query($konek, $sql1);

header("location:op.php");
?>