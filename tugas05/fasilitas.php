<?php
	include 'sql_connect.php';
	$query_command = "SELECT * FROM fasilitas";
	$SQL = mysqli_query($connect,$query_command); 
?>

<html>
<head>
<link href="css/tabel.css" type="text/css" rel="stylesheet" />
</head>
<body>

	<form method="post" action="searching3.php">
		<input type="text" name="cari">
		<input type="submit" name="kirim" value="cari">
	</form>
	
	<table class = "tabel_kamar" border="1">
		<tr><th>id_fasilitas</th><th>nama_fasilitas</th><th>ket_fasilitas</th><th>harga_fasilitas</th></tr>
		<?php
		include 'sql_connect.php';
		
		$fasilitas = mysqli_query($connect, "SELECT * from fasilitas");
		foreach ($fasilitas as $row) {
			echo "<tr>
		<td>" . $row['id_fasilitas'] . "</td>
		<td>" . $row['nama_fasilitas'] . "</td>
		<td>" . $row['ket_fasilitas'] . "</td>
		<td>" . $row['harga_fasilitas'] . "</td>
		  </tr>"; 
		}
		?>
	</table>

</body>
</html>