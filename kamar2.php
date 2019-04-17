<?php 
include "sql_connect.php";
$key = 12657;
$QueryString = "SELECT * FROM kamar WHERE no_ktp LIKE '%$key%' or id_kamar LIKE '%$key%' or no_kamar LIKE '%$key%' or luas_kamar LIKE '%$key%' or harga_kamar LIKE '%$key%' or status LIKE '%$key%'";
	$SQL = mysqli_query($connect,$QueryString); 
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
	
<table border="1" align="center">
		<tr>
			<th>NO_KTP</th>
			<th>ID_Kamar</th>
			<th>NO_Kamar</th>
			<th>Luas_Kamar</th>
			<th>Harga_Kamar</th>
			<th>Status</th>
			
		</tr>
		<?php
			foreach ($SQL as $data) {
				echo "
					<tr>
						<td>$data[no_ktp]</td>
						<td>$data[id_kamar]</td>
						<td>$data[no_ktp]</td>
						<td>$data[luas_kamar]</td>
						<td>$data[harga_kamar]</td>
						<td>$data[status]</td>
					</tr>
				";
			}
		?>
	</table>
	
<?php include('footer.php'); ?> 

</body>
<html>