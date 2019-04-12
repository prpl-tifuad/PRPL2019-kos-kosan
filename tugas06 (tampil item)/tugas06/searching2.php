<?php 
include "sql_connect.php";
$key = $_POST['cari'];
echo "Keyword pencarian = $key";
$QueryString = "SELECT * FROM kamar WHERE no_ktp LIKE '%$key%' or id_kamar LIKE '%$key%' or no_kamar LIKE '%$key%' or luas_kamar LIKE '%$key%' or harga_kamar LIKE '%$key%' or status LIKE '%$key%'";
	$SQL = mysqli_query($connect,$QueryString); 
?>

<html>
<head>
<link href="css/tabel.css" type="text/css" rel="stylesheet" />
</head>
<body>
 <table border="1">
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
</body>
</html>