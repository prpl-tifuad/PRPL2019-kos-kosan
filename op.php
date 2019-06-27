<html>
<head>
<link href="css/index.css" type="text/css" rel="stylesheet" />
<link href="css/pageshow.css" type="text/css" rel="stylesheet" />
<link href="css/tabel.css" type="text/css" rel="stylesheet" />
</head>
<body>

<?php include('header.php'); ?> 
<?php
if($_SESSION['username'] == "admin" and  $_SESSION['password'] == "123456"){

require 'sql_connect.php';
$sql1 = "select *from orders";
$check1 = mysqli_query($konek, $sql1);

//////////////////////////
?>

	<table border="1" style="margin-top: 40px;">
	<tr><th>ID</th><th>Username</th><th>Tanggal Pesan</th><th>Status</th><th>Order ID</th><th>ID Produk</th><th>Harga</th><th>Jumlah(Bulan)</th><th>Option</th></tr>
	<?php while($orders = mysqli_fetch_object($check1)) { ?> 
		<tr>
			<td><?php $id = $orders->id; echo $id;?> </td>
			<td><?php $username = $orders->username; echo $username;?> </td>
			<td><?php $datecreation= $orders->datecreation; echo $datecreation;?> </td>
			<td><?php $status= $orders->status; echo $status;?> </td>
			<td><?php $orderid= $orders->orderid; echo $orderid;?> </td>
			<td><?php $productid= $orders->productid; echo $productid;?> </td>
			<td><?php $price= $orders->price; echo $price;?> </td>
			<td><?php $quantity= $orders->quantity; echo $quantity;?> </td>
			<td><a href='op_remove.php?orderid=<?php echo $orderid; ?>'>Hapus</a>
				<a href='op_verification.php?orderid=<?php echo $orderid; ?>'>verifikasi</a>
			</td>
		</tr>
	<?php } ?>
	</table>
<?php include('footer.php'); ?> 
<?php
///////////////////////////

}
else{
	header("location:index.php");
}

?>

</body>
</html>