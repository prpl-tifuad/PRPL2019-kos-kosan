<?php include "sql_connect.php"; 
$username = addslashes(strip_tags ($_POST['username'])); $password = addslashes(strip_tags ($_POST['password'])); $confirm = addslashes(strip_tags ($_POST['confirm-password'])); //script ini untuk mengecek apakah form sudah terisi semua 
if ($username&&$password&&$confirm) { //berfunsgi untuk mengecek form tidak boleh lebih dari 10 
if (strlen($username) > 10){
    echo "username tidak boleh lebih dari 10 karakter";
}else {
    //password harus 6-25 karakter
    if (strlen($password) > 25 || strlen($confirm) < 6){
        echo "Password harus antara 6-25 karakter";
    }
    else {
    //untuk mengecek apakah form password dan form konfirmasi password sudah sama
        if ($password == $confirm){
            $sql= "SELECT * FROM user WHERE username = '$username'";
            $get = mysqli_query($konek, $sql);
			
            $num_row = mysqli_num_rows($get);
        //fungsi script ini adalah untuk mengecek ketersediaan username, jika tidak tersedia maka program akan berjalan
            if ($num_row ==0) {
                $password = md5($password);
                $confirm = md5($confirm);
                $sql1 = "INSERT INTO user VALUES ('','$username','$password','$confirm-password')";
                $insert = mysqli_query($konek, $sql1);
				
				
				$sql2 = "SELECT *FROM user where username='$username'";
				$check = mysqli_query($konek, $sql2);
				while($user = mysqli_fetch_object($check)) { 
				$id = $user->id;
				}
				
				$sql3 = "INSERT INTO pelanggan VALUES('', '$id', '', '', '', '')";
				$check2 = mysqli_query($konek, $sql3);
				
                echo "Pendaftaran berhasil. Login <a href='login.php'>disini</a>";
            }
            else {
                echo "Username sudah terdaftar";
            }
        }   else {
            echo "Password yang kamu masukan tidak sama!";
            }
        }
    }
} else {
echo "Tolong penuhi form pendaftaran!";
}

?>
