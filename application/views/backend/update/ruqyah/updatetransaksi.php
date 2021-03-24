<?php
    include("../../config.php");
    
    $id = $_POST['id'];
    $nama_peruqyah=$_POST['nama_peruqyah'];
    $nama_konsumen=$_POST['nama_konsumen'];
    $email=$_POST['email'];
    $alamat=$_POST['alamat'];
    $no_hp=$_POST['no_hp'];
    $total_biaya=$_POST['total_biaya'];

	$sql = "UPDATE transaksi SET nama_peruqyah='$nama_peruqyah', nama_konsumen='$nama_konsumen', 
    email='$email', alamat='$alamat', no_hp='$no_hp', total_biaya='$total_biaya' WHERE id='$id'";

	$result = mysqli_query($conn, $sql);

	if ($result) {
		echo"<script>alert('Update Sukses !!!')</script>";
        echo"<script>top.location='../../dashboard/datatransaksi.php'</script>";
	}
	else{
		echo"<script>alert('Update Gagal !!!')</script>";
        echo"<script>top.location='../../dashboard/form/formupdatetransaksi.php'</script>";
	}
?>