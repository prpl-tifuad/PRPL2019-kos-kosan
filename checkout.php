<?php 
session_start();
require 'sql_connect.php';
require 'item.php';

if(isset($_SESSION['username'])){?>

	<?php
		$usr = $_SESSION['username'];
		$psw = $_SESSION['status'];
		$sql1 = 'SELECT id from user where username = "'.$usr.'"';
		$result1 = mysqli_query($konek, $sql1);
	?>
	<?php while($user = mysqli_fetch_object($result1)) { ?> 
		<?php $id = $user->id;?>
	<?php } ?>
	
	<?php
		$sql2 = 'SELECT *from pelanggan where id = "'.$id.'"';
		$result2 = mysqli_query($konek, $sql2);
	?>
	<?php while($pelanggan = mysqli_fetch_object($result2)) { ?> 
			<?php $idpel = $pelanggan->id;?>
			<?php $noktp = $pelanggan->no_ktp;?>
			<?php $namapel = $pelanggan->nama_pel;?>
			<?php $nohp= $pelanggan->no_hp;?>
			<?php $noortu= $pelanggan->no_ortu;?>
			<?php $alamat= $pelanggan->alamat;?> 
	<?php } ?>
	
	<?php
	$tanggal = date('Y-m-d');
	$ordersid = mysqli_insert_id($konek);
	$randm = mt_rand(11111, 99999); 
	$cart = unserialize(serialize($_SESSION['cart']));
	for($i=0; $i<count($cart);$i++) {
	$sql1 = 'INSERT INTO orders (id, username, datecreation, status, orderid, productid, price, quantity) VALUES 
	("'.$idpel.'", "'.$namapel.'", "'.$tanggal.'", "berisi", "'.$randm.'", '.$cart[$i]->id.', '.$cart[$i]->price.', '.$cart[$i]->quantity.')';
	mysqli_query($konek, $sql1);
	}
	unset($_SESSION['cart']);
	
	echo 'Thanks for buying products. Click <a href="index.php">here</a> to continue purchasing products.';
	?>
	
<?php
}
else{
  echo "maaf anda belum login";
}
?>
