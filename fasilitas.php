<?php
	include 'sql_connect.php';
	$sql = "SELECT * FROM fasilitas";
	$SQL = mysqli_query($konek, $sql);
?>

<html>
<head>
<link href="css/tabel.css" type="text/css" rel="stylesheet" />
</head>
<body>
<?php include('header.php'); ?> 

	<form method="post" action="searching3.php">
		<input type="text" name="cari">
		<input type="submit" name="kirim" value="cari">
	</form>
	
	<table class = "tabel_kamar" border="1">
		<tr><th>id_fasilitas</th><th>nama_fasilitas</th><th>ket_fasilitas</th><th>harga_fasilitas</th></tr>
		<?php
		include 'sql_connect.php';
		
		foreach ($SQL as $row) {
			echo "<tr>
		<td>" . $row['id_fasilitas'] . "</td>
		<td>" . $row['nama_fasilitas'] . "</td>
		<td>" . $row['ket_fasilitas'] . "</td>
		<td>" . $row['harga_fasilitas'] . "</td>
		  </tr>"; 
		}
		?>
	</table>

<?php include('footer.php'); ?> 
</body>
</html>