<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="css/sewa.css">
	<link href="css/index.css" type="text/css" rel="stylesheet" />
	<link href="css/slideshow.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="script/slideshow.js"></script>
</head>
<body>

<?php include('header.php'); ?> 

	
<div class="side_row">
	<div class="side_column">
		<div class="w3-content" style="max-width:450px" style="max-height:200px">
			<img class="mySlides" src="image/kamar/kamar1.jpeg" style="width:100%;display:none">
			<img class="mySlides" src="image/kamar/kamar2.jpeg" style="width:100%">
			<img class="mySlides" src="image/kamar/kamar3.jpeg" style="width:100%;display:none">

			<div class="w3-row-padding w3-section">
			
			<div class="w3-col s4">
			  <img class="demo w3-opacity w3-hover-opacity-off" src="image/kamar/kamar1.jpeg" style="width:100%;cursor:pointer" onclick="currentDiv(1)">
			</div>
			
			<div class="w3-col s4">
			  <img class="demo w3-opacity w3-hover-opacity-off" src="image/kamar/kamar2.jpeg" style="width:100%;cursor:pointer" onclick="currentDiv(2)">
			</div>
			
			<div class="w3-col s4">
			  <img class="demo w3-opacity w3-hover-opacity-off" src="image/kamar/kamar3.jpeg" style="width:100%;cursor:pointer" onclick="currentDiv(3)">
			</div>
		  </div>
		</div>
	</div>
	
	<div class="side_column">
		<?php 
		require 'sql_connect.php';
		$sql = 'SELECT * FROM product where Id = 113344';
		$result = mysqli_query($konek, $sql);
		 ?>
			<?php while($product = mysqli_fetch_object($result)) { ?> 
			<h3> * <?php echo $product->name; ?> * </h3>
			<ul>
				<li> ID_Kamar : <?php echo $product->id; ?> </li>
				<li> Nama : <?php echo $product->name; ?> </li>
				<li> Ukuran : <?php echo $product->size; ?> </li>
				<li> Harga (Per 6 Bulan)<?php echo $product->price; ?> </li>
				<li> Jumlah : <?php echo $product->quantity; ?> </li>
				<li> Deskripsi : <?php echo $product->description; ?> </li>
				<a href="cart.php?id= <?php echo $product->id; ?> &action=add"><button class="button1">Order Now</button></a>
			</ul>
			<?php } ?>
	</div>
</div>

<?php include('footer.php'); ?> 

</body>
</html>