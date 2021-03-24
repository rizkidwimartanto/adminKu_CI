<?php
    $connect = mysqli_connect("localhost","root","","ruqyah_aswaja") or die("Tidak dapat terhubung");

    $nama_konsumen = $_POST["nama_konsumen"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "INSERT INTO konsumen(nama_konsumen,username,password)
    VALUES ('$nama_konsumen', '$username', '$password')";

    $query = mysqli_query($connect , $sql);
    if ($query) {
        echo "Registrasi Berhasil";
    }
    else{
        echo "Registrasi Gagal";
    }
?>
