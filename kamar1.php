<?php /*
include "sql_connect.php"; 
$key = 1;
	$SQL = $db->query("SELECT * FROM kamar WHERE no_kamar LIKE '%$key%'");
?>


<html>
<head>
<link href="css/index.css" type="text/css" rel="stylesheet" />
<link href="css/slideshow.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="script/slideshow.js"></script>
</head>
<body>

<?php include('header.php'); ?> 

	<div class="w3-content" style="max-width:500px" style="max-height:200px">
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

		<tr>
		<?php
			foreach ($SQL as $data) {
				echo "
					<ul>
						<li>$data[no_kamar]</li>
						<li>$data[ukuran]</li>
						<li>$data[harga]</li>
						<li>$data[status]</li>
						<li>$data[keterangan]</li>
					</ul>
				";
			}
		?>
<?php include('footer.php');?> 

</body>
<html>
*/ ?>

<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="css/sewa.css">
	<link href="css/index.css" type="text/css" rel="stylesheet" />
	<link href="css/slideshow.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="script/slideshow.js"></script>
</head>
<body>

<?php include('header.php'); ?> 

	<div class="w3-content" style="max-width:500px" style="max-height:200px">
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
<?php
require 'sql_connect.php';
//List product dari database
$sql = $db->query('SELECT * FROM kamar WHERE no_kamar = 1');
 ?>
<h2> Harga Sewa :</h2>
 <table id="t01">
 <tr>
    <th>No Kamar</th>
    <th>Ukuran</th>
    <th>Harga</th>
    <th>Status</th>
    <th>Keterangan</th>
 </tr>
    <?php while($kamar = $sql->fetch(PDO::FETCH_OBJ)) { ?> 
    <tr>
        <td> <?php echo $kamar->no_kamar; ?> </td>
        <td> <?php echo $kamar->ukuran; ?> </td>
        <td> Rp.<?php echo $kamar->harga; ?> </td>
        <td> <?php echo $kamar->status; ?> </td>
        <td> <?php echo $kamar->keterangan; ?> </td>
        <td> <a href="detail_sewa.php?id= <?php echo $kamar->no_kamar; ?> &action=add">Sewa Sekarang</a> </td>
    </tr>
    <?php } ?>
 </table>

<?php include('footer.php'); ?> 

</body>
</html>
