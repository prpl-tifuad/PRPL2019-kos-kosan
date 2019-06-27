<!DOCTYPE html>

<head>
	<link rel="stylesheet" href="css/sewa.css">
	<link href="css/index.css" type="text/css" rel="stylesheet" />
	<link href="css/slideshow.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="script/slideshow.js"></script>
</head>
<body>

<?php include('header.php'); ?> 

<?php
if(isset($_SESSION['username'])){
?>

	<?php
		require 'sql_connect.php';
		$usr = $_SESSION['username'];
		$psw = $_SESSION['status'];
		$sql1 = 'SELECT id from user where username = "'.$usr.'"';
		$result1 = mysqli_query($konek, $sql1);
	?>
	<?php while($user = mysqli_fetch_object($result1)) {
		 $id = $user->id; } 
	?>
	
	<?php
		$sql2 = 'SELECT *from pelanggan where id = "'.$id.'"';
		$result2 = mysqli_query($konek, $sql2);
	?>
	<br>
	<br>
	
	<table border="1">
            <tr><th>NO KTP</th><th>Nama Pelanggan</th><th>No HP</th><th>No Ortu</th><th>Alamat</th><th>Option</th></tr>
	<?php while($pelanggan = mysqli_fetch_object($result2)) { ?> 
		<?php $idpel = $pelanggan->id;?>
		<tr>
			<td><?php $noktp = $pelanggan->no_ktp; echo $noktp;?> </td>
			<td><?php $namapel = $pelanggan->nama_pel; echo $namapel;?> </td>
			<td><?php $nohp= $pelanggan->no_hp; echo $nohp;?> </td>
			<td><?php $noortu= $pelanggan->no_ortu; echo $noortu;?> </td>
			<td><?php $alamat= $pelanggan->alamat; echo $alamat;?> </td>
			<td><a href='form-edit.php?idpel=<?php echo $idpel; ?>'>Edit</a></td>
		</tr>
	<?php } ?>
	</table>
	
	<br>
	
	<?php
	$sql3 = 'SELECT orders.datecreation, orders.productid, orders.price, orders.quantity, product.name, orders.status from orders, product where orders.productid = product.id and orders.id = "'.$idpel.'"';
	$result3 = mysqli_query($konek, $sql3);
	?>
	<table border="1">
            <tr><th>Nama Kamar</th><th>Tanggal Membeli</th><th>Harga</th><th>Berapa Bulan</th><th>Status</th><th>Option</th></tr>
	<?php while($orders = mysqli_fetch_object($result3)) { ?> 
		<tr>
			<td><?php $name = $orders->name; echo $name;?> </td>
			<td><?php $datecreation = $orders->datecreation; echo $datecreation;?> </td>
			<td><?php $price = $orders->price; echo $price;?> </td>
			<td><?php $quantity= $orders->quantity; echo $quantity;?> </td>
			<td><?php $status= $orders->status; echo $status;?> </td>
			<td><a href='delete.php?id_pel=<?php echo $idpel; ?>'>Batalkan</a></td>
		</tr>
	<?php } ?>
	</table>
	
<?php include('footer.php'); ?> 

<?php 
}
else{
	header('Location: index.php');
}
?>

</body>
</html>