<?php
    include("../../../dashboard/config/configruqyah.php");
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "DELETE FROM konsumen WHERE id='$id'");

    if($query){
        echo "<script> alert('Hapus Berhasil') </script>";
        echo "<script> top.location = '../../../dashboard/Ruqyah/datakonsumen.php' </script>";
    }
    else{
        echo "<script> alert('Hapus Gagal') </script>";
        echo "<script> top.location = '../../../dashboard/Ruqyah/datakonsumen.php' </script>";
    }
?>