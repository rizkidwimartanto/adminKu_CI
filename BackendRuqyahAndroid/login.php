<?php 
    $connect = mysqli_connect("localhost","root","", "ruqyah_aswaja") or die("Tidak dapat terhubung");

	$username = $_POST["username"];
    $password = $_POST["password"];

	$query = mysqli_query($connect, "SELECT * FROM konsumen WHERE username='$username' AND password='$password'");

    if ($query->num_rows > 0) {
        echo "Login Berhasil";
    }
    else{
        echo "Login Error";
    }
?>
