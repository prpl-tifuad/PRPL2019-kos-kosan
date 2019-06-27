<?php 
require 'sql_connect.php'; 
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Profile</title>
	<link rel="stylesheet" type="text/css" href="assets/css/custom.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<script src="assets/js/jquery.min.js"></script>
</head>
<?php include('header.php'); ?>
<?php
if(isset($_SESSION['username'])){
?>
<?php
	//	require '../sql_connect.php';
		$usr = $_SESSION['username'];
		$psw = $_SESSION['status'];
		$sql1 = 'SELECT id from user where username = "'.$usr.'"';
		$result1 = mysqli_query($konek, $sql1);
	?>
	<?php while($user = mysqli_fetch_object($result1)) { ?> 
		<?php $id = $user->id;?>
	<?php } ?>
<body>
	<div class="profile-main">
		<div class="profile-header">
			<div class="user-detail">
				<div class="user-image">
					<img src="assets/images/profil.jpg">
				</div>
				<div class="user-data">
					<h2><?php echo $_SESSION['username'];?></h2>
				</div>
			</div>
			<div class="tab-panel-main">
				<ul class="tabs">
					<li class="tab-link current" data-tab="Basic-detail">Account Detail</li>
					<li class="tab-link" data-tab="Order-detail">Order Detail</li>
				</ul>
	<?php
		$sql2 = 'SELECT *from pelanggan where id = "'.$id.'"';
		$result2 = mysqli_query($konek, $sql2);
	?>
	
	<?php while($pelanggan = mysqli_fetch_object($result2)) { ?> 
					<div class="detail-box">
						<p>Detail</p>
						<ul class="ul-first">
							<li>ID Pelanggan</li>
							<li>No KTP</li>
							<li>Nama Pelanggan</li>
							<li>No HP</li>
							<li>No Ortu</li>
							<li>Alamat</li>
						</ul>
						<ul class="ul-second">
							<li>: <?php $idpel = $pelanggan->id; echo $idpel;?></li>
							<li>: <?php $noktp = $pelanggan->no_ktp; echo $noktp;?></li>
							<li>: <?php $namapel = $pelanggan->nama_pel; echo $namapel;?></li>
							<li>: <?php $nohp= $pelanggan->no_hp; echo $nohp;?></li>
							<li>: <?php $noortu= $pelanggan->no_ortu; echo $noortu;?></li>
							<li>: <?php $alamat= $pelanggan->alamat; echo $alamat;?></li>
						</ul>
						<p><a href='form-edit.php?idpel'>Edit</a></p>
					</div>
	<?php } ?>
				</div>
				<div id="Order-detail" class="tab-content" align="center">
					<div class="Order-box-main">
						 <h2><i aria-hidden="true"></i> Transaction Status</h2>
						 <?php
						$sql3 = 'SELECT orders.datecreation, orders.productid, orders.price, orders.quantity, product.name, orders.status from orders, product where orders.productid = product.id and orders.id = "'.$idpel.'"';
						$result3 = mysqli_query($konek, $sql3);
						?>
						<div class="Order-box">
						<table border="1" align="center">
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
						</div>
					</div>
				</div>
				<div id="Portfolio" class="tab-content">
					<div class="portfolio-box">
						<div class="portfolio-img-box">
							<h3>Web Design</h3>
							<img src="#">
						</div>
						<div class="portfolio-img-box">
							<h3>Web development</h3>
							<img src="#">
						</div>
						<div class="portfolio-img-box">
							<h3>SEO</h3>
							<img src="#">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div style="clear: both;"></div>
	</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('ul.tabs li').click(function(){
			var tab_id = $(this).attr('data-tab');

			$('ul.tabs li').removeClass('current');
			$('.tab-content').removeClass('current');

			$(this).addClass('current');
			$("#"+tab_id).addClass('current');
		});
	});
</script>
<?php include('footer.php'); ?> 
<?php 
}
else{
	header('location:index.php');
}
?>
</body>
</html>