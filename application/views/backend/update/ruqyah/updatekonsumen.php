<?php
    include("../../config.php");
	
    $id = $_POST['id'];
	$nama_konsumen = $_POST['nama_konsumen'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "UPDATE konsumen SET nama_konsumen='$nama_konsumen', username='$username', password='$password' WHERE id='$id'";

	$result = mysqli_query($conn, $sql);

	if ($result) {
		echo"<script>alert('Update Sukses !!!')</script>";
        echo"<script>top.location='../../dashboard/datakonsumen.php'</script>";
	}
	else{
		echo"<script>alert('Update Gagal !!!')</script>";
        echo"<script>top.location='../../dashboard/form/formupdatekonsumen.php'</script>";
	}
?>