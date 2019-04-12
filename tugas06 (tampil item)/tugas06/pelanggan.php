<?php
	include 'sql_connect.php';
	$query_command = "SELECT * FROM pelanggan";
	$SQL = mysqli_query($connect,$query_command); 
?>

<html>
<head>
<link href="css/tabel.css" type="text/css" rel="stylesheet" />
</head>
<body>

	<form method="post" action="searching1.php">
		<input type="text" name="cari">
		<input type="submit" name="kirim" value="cari">
	</form>
	
	<table class = "tabel_kamar" border="1">
		<tr><th>no_ktp</th><th>nama_pel</th><th>no_hp</th><th>no_ortu</th><th>alamat</th><th>jk</th></tr>
		<?php
		include 'sql_connect.php';
		
		$pelanggan = mysqli_query($connect, "SELECT * from pelanggan");
		foreach ($pelanggan as $row) {
			echo "<tr>
		<td>" . $row['no_ktp'] . "</td>
		<td>" . $row['nama_pel'] . "</td>
		<td>" . $row['no_hp'] . "</td>
		<td>" . $row['no_ortu'] . "</td>
		<td>" . $row['alamat'] . "</td>
		<td>" . $row['jk'] . "</td>
		  </tr>"; 
		}
		?>
	</table>

</body>
</html>