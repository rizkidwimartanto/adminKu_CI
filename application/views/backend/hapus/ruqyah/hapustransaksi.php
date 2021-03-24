<?php
    include("../../config.php");
    session_start();
    $id = $_SESSION['id'];
    $id = $_GET['id'];

    $sql = "DELETE FROM transaksi WHERE id='$id'";
    $query = mysqli_query($conn, $sql) or die ("Tidak ada database");

    if($query){
        echo"<script>alert('Hapus transaksi sukses!')</script>";
        echo "<script>top.location='../../dashboard/datatransaksi.php'</script>";
    }else{
        echo"<script>alert('Hapus transaksi gagal!')</script>";
        echo "<script>top.location='../../dashboard/datatransaksi.php'</script>";
    }
?>