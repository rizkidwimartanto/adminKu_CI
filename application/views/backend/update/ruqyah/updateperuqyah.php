<?php
    include("../../config.php");
	
    $id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$no_hp = $_POST['no_hp'];

	$sql = "UPDATE peruqyah SET nama='$nama', alamat='$alamat', no_hp='$no_hp' WHERE id='$id'";

	$result = mysqli_query($conn, $sql);

	if ($result) {
		echo"<script>alert('Update Sukses !!!')</script>";
        echo"<script>top.location='../../dashboard/dataperuqyah.php'</script>";
	}
	else{
		echo"<script>alert('Update Gagal !!!')</script>";
        echo"<script>top.location='../../dashboard/form/formupdateperuqyah.php'</script>";
	}
?>