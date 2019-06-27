<?php
include 'sql_connect.php';
$idpel = $_GET['idpel'];
$pelanggan  = mysqli_query($konek, "SELECT * FROM pelanggan where id='$idpel'");
$row        = mysqli_fetch_array($pelanggan);
// membuat function untuk set aktif radio button
function active_radio_button($value,$input){
    // apabilan value dari radio sama dengan yang di input
    $result =  $value==$input?'checked':'';
    return $result;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
		<link href="css/index.css" type="text/css" rel="stylesheet" />
		<link href="css/pageshow.css" type="text/css" rel="stylesheet" />
		<link href="css/tabel.css" type="text/css" rel="stylesheet" />
    </head>
    <body align="center">
	<?php include('header.php'); ?> 
        <form method="post" action="update.php" align="center">
            <input type="hidden" value="<?php echo $row['id'];?>" name="id">
            <table>
				//ID pelanggan tidak bisa di ubah karena merupakan primary key;
                <tr><td>No KTP</td><td><input type="text" value="<?php echo $row['no_ktp'];?>" name="no_ktp"></td></tr>
				<tr><td>Name Pelanggan</td><td><input type="text" value="<?php echo $row['nama_pel'];?>" name="nama_pel"></td></tr>
                <tr><td>No HP</td><td><input type="text" value="<?php echo $row['no_hp'];?>" name="no_hp"></td></tr>
				<tr><td>No Ortu</td><td><input type="text" value="<?php echo $row['no_ortu'];?>" name="no_ortu"></td></tr>
				<tr><td>Alamat</td><td><input type="text" value="<?php echo $row['alamat'];?>" name="alamat"></td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
                        <a href="index.php">Kembali</a></td></tr>
            </table>
        </form>
	<?php include('footer.php'); ?> 
    </body>
</html>