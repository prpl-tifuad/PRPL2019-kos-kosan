<?php
	include 'sql_connect.php';
	$query_command = "SELECT * FROM kamar";
	$SQL = mysqli_query($connect,$query_command); 
?>

<html>
<head>
<link href="css/tabel.css" type="text/css" rel="stylesheet" />
</head>
<body>

	<form method="post" action="searching2.php">
		<input type="text" name="cari">
		<input type="submit" name="kirim" value="cari">
	</form>
	
	<table class = "tabel_kamar" border="1">
		<tr><th>No_KTP</th><th>Id_Kamar</th><th>No_Kamar</th><th>Luas_Kamar</th><th>Harga_Kamar</th><th>Status</th></tr>
		<?php
		include 'sql_connect.php';
		
		$kamar = mysqli_query($connect, "SELECT * from kamar");
		foreach ($kamar as $row) {
			echo "<tr>
		<td>" . $row['no_ktp'] . "</td>
		<td>" . $row['id_kamar'] . "</td>
		<td>" . $row['no_kamar'] . "</td>
		<td>" . $row['luas_kamar'] . "</td>
		<td>" . $row['harga_kamar'] . "</td>
		<td>" . $row['status'] . "</td>
		  </tr>"; 
		}
		?>
	</table>

</body>
</html>