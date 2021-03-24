<?php
    include('../../../dashboard/config/configruqyah.php');

    $nama = $_POST['nama_konsumen'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($koneksi, "INSERT INTO konsumen(nama_konsumen,username,password)
    VALUES('$nama', '$username', '$password')");

    if($query){
        echo "<script> alert('Tambah Berhasil') </script>";
        echo "<script> top.location = '../../../dashboard/Ruqyah/datakonsumen.php' </script>";
    }
    else{
        echo "<script> alert('Tambah Gagal') </script>";
        echo "<script> top.location = '../../../dashboard/form/formtambahruqyah/formtambahkonsumen.php' </script>";
    }
?>