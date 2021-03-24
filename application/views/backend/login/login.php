<?php
    include("../../config.php");
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT id, username FROM user WHERE username='$username' AND password = '$password'";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($query);
    $row = mysqli_num_rows($query);

    session_start();
    $_SESSION['id']=$data['id'];
    $_SESSION['username']=$data['username'];
    if($row==1){
        echo"<script>alert('Login Admin Sukses!!!')</script>";
        echo"<script>top.location='../../dashboard/admin.php'</script>";
    }else{
        echo"<script>alert('Login Admin Gagal!!!')</script>";
        echo"<script>top.location='../../index.php'</script>";
    }
?>