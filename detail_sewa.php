<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
// Mulai sesi
session_start();
require 'sql_connect.php';
require 'item.php';

if(isset($_GET['no_kamar']) && !isset($_POST['update']))  { 
    $sql= $db->query('SELECT * FROM kamar WHERE no_kamar='.$_GET['no_kamar']);
    $result = $db->query($db, $sql1);
    $kamar = $sql->fetch(PDO::FETCH_OBJ); 
    $item = new Item();
    $item->id = $kamar->no_kamar;
    $item->name = $kamar->name;
    $item->price = $kamar->harga;
    $iteminstock = $kamar->quantity;
    $item->quantity = 1;
    //Periksa produk dalam cart
    $index = -1;
    $cart = unserialize(serialize($_SESSION['cart']));
    for($i=0; $i<count($cart);$i++)
        if ($cart[$i]->no_kamar == $_GET['no_kamar']){
            $index = $i;
            break;
        }
        if($index == -1) 
            $_SESSION['cart'][] = $item; //$ _SESSION ['cart']: set $ cart sebagai variabel _session
        else {

            if (($cart[$index]->quantity) < $iteminstock)
                 $cart[$index]->quantity ++;
                 $_SESSION['cart'] = $cart;
        }
}
//Menghapus produk dalam cart
if(isset($_GET['index']) && !isset($_POST['update'])) {
    $cart = unserialize(serialize($_SESSION['cart']));
    unset($cart[$_GET['index']]);
    $cart = array_values($cart);
    $_SESSION['cart'] = $cart;
}
// Perbarui jumlah dalam cart
if(isset($_POST['update'])) {
  $arrQuantity = $_POST['quantity'];
  $cart = unserialize(serialize($_SESSION['cart']));
  for($i=0; $i<count($cart);$i++) {
     $cart[$i]->quantity = $arrQuantity[$i];
  }
  $_SESSION['cart'] = $cart;
}
?>
<h2> Items dalam Keranjang: </h2> 
<form method="POST">
<table id="t01">
<tr>
    <th>Option</th>
    <th>Id</th>
    <th>Name</th>
    <th>Price</th>
    <th>Quantity</th>

    <th>Total</th>
</tr>
<?php 
     $cart = unserialize(serialize($_SESSION['cart']));
     $s = 0;
     $index = 0;
    for($i=0; $i<count($cart); $i++){
        $s += $cart[$i]->price * $cart[$i]->quantity;
?>
   <tr>
        <td><a href="detail_sewa.php?index=<?php echo $index; ?>" onclick="return confirm('Are you sure?')" >Delete</a> </td>
        <td> <?php echo $cart[$i]->no_kamar; ?> </td>
        <td> <?php echo $cart[$i]->ukuran; ?> </td>
        <td>Rp. <?php echo $cart[$i]->harga; ?> </td>
        <td> <input type="number" min="1" value="<?php echo $cart[$i]->quantity; ?>" name="quantity[]"> </td>  
        <td> Rp.<?php echo $cart[$i]->harga * $cart[$i]->quantity; ?> </td> 
   </tr>
    <?php 
        $index++;
    } ?>
    <tr>
        <td colspan="5" style="text-align:right;font-weight:bold">Sum 
         <input id="saveimg" type="image" src="images/save.png" name="update" alt="Save Button">
         <input type="hidden" name="update">
        </td>
        <td> Rp.<?php echo $s; ?> </td>
    </tr>
</table>
</form>
<br>
<a href="kamar.php">Sewa Yang Lain</a> | <a href="checkout.php">Checkout</a>
<?php 
if(isset($_GET["no_kamar"]) || isset($_GET["index"])){
 header('Location: detail_sewa.php');
} 
?>
</body>
 </html>