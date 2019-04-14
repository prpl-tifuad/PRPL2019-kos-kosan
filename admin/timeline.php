<?php include("auth.php"); ?>

<html>
<head>
    <title>Admin Area</title>
</head>
<body>

    <div style="text-align:center">
        <h2>Admin Area</h2>
        <p><a href="../index.php">Home</a> / <a href="/prpl/admin/logout.php">Logout</a></p>

        <p>Selamat datang di Admin Area</p>
        <h3><?php echo  $_SESSION["user"]["username"] ?></h3>
        <p><?php echo $_SESSION["user"]["email"] ?></p>
    </div>

</body>
</html>