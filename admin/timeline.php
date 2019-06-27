<html>
<head>
	<title>ADMIN</title>
</head>
<body>
	<h2>Halaman Admin</h2>
	
	<br/>

	<!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>

	<h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>
	<h4>Klik Tautan berikut : <a href="profile.php">My Profile</a> untuk melihat data diri anda secara lengkap</h4>
	<br/>
	<br/>

	<a href="logout.php">LOGOUT</a>

</body>
</html>