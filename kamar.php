<?php
	include 'sql_connect.php';
	$sql = 'SELECT * FROM kamar';
?>

<html>
<head>
<link href="css/index.css" type="text/css" rel="stylesheet" />
<link href="css/pageshow.css" type="text/css" rel="stylesheet" />
</head>
<body>

<?php include('header.php'); ?> 

<!-- PAGESHOW (START) -->
<div id="pageshow">
	<!--
  <h3>Selamat Datang</h3>
  <p class="section-lead"></p>
  -->
  <div class="services-grid">
  
    <div class="service service1">
     <img src="image/kamar/kamar1.jpeg" alt="kamar1">
      <h4>Kamar1</h4>
      <p>Bagus dan nyaman, ada bonus Fasilitas juga serta diskon 20%</p>
      <a href="kamar1.php" class="cta">Read More <span class="ti-angle-right"></a>
    </div>

    <div class="service service2">
      <img src="image/kamar/kamar2.jpeg" alt="kamar2">
      <h4>Kamar2</h4>
      <p>Khusus kamar ada ada fitur ac, serta gratis untuk 1 bulan</p>
      <a href="kamar2.php" class="cta">Read More <span class="ti-angle-right"></a>
    </div>

    <div class="service service3">
      <img src="image/kamar/kamar3.jpeg" alt="kamar3">
      <h4>Kamar3</h4>
      <p>Buruan sewa, khusus kamar tiga, gratis diskon 3 bulan</p>
      <a href="kamar3.php" class="cta">Read more <span class="ti-angle-right"></span></a>
    </div>
  </div>
</div>
<!-- PAGESHOW (END) -->

<?php include('footer.php'); ?> 

</body>
</html>