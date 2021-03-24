<?php
    include("../../config.php");
    session_start();
    $id = $_SESSION['id'];
    $id = $_GET['id'];

    $sql = "DELETE FROM peruqyah WHERE id='$id'";
    $query = mysqli_query($conn, $sql) or die ("Tidak ada database");

    if($query){
        echo"<script>alert('Hapus peruqyah sukses!')</script>";
        echo "<script>top.location='../../dashboard/dataperuqyah.php'</script>";
    }else{
        echo"<script>alert('Hapus peruqyah gagal!')</script>";
        echo "<script>top.location='../../dashboard/dataperuqyah.php'</script>";
    }
?>