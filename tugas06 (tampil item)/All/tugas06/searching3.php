<?php 
include "sql_connect.php";
$key = $_POST['cari'];
echo "Keyword pencarian = $key";
$QueryString = "SELECT * FROM fasilitas WHERE id_fasilitas LIKE '%$key%' or nama_fasilitas LIKE '%$key%' or ket_fasilitas LIKE '%$key%' or harga_fasilitas LIKE '%$key%'";
	$SQL = mysqli_query($connect,$QueryString); 
?>

<html>
<head>
<link href="css/tabel.css" type="text/css" rel="stylesheet" />
</head>
<body>
 <table border="1">
		<tr>
			<th>ID_fasilitas</th>
			<th>Nama_Fasilitas</th>
			<th>Ket_Fasilitas</th>
			<th>Harga_Fasilitas</th>
			
		</tr>
		<?php
			foreach ($SQL as $data) {
				echo "
					<tr>
						<td>$data[id_fasilitas]</td>
						<td>$data[nama_fasilitas]</td>
						<td>$data[ket_fasilitas]</td>
						<td>$data[harga_fasilitas]</td>
					</tr>
				";
			}
		?>
	</table>
</body>
</html>