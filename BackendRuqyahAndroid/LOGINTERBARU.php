<?php 
    $connect = mysqli_connect("localhost","root","", "ruqyah_aswaja") or die("Tidak dapat terhubung");

	$username = $_POST["username"];
    $password = $_POST["password"];

	$query = mysqli_query($connect, "SELECT * FROM konsumen WHERE username='$username' AND password='$password'");

	$result = array();
	$result['login'] = array();

    if (mysqli_num_rows($query) === 1 ) {
		$row = mysqli_fetch_assoc($query);

		$index['id'] = $row['id'];
		$index['nama_konsumen'] = $row['nama_konsumen'];
		$index['username'] = $row['username'];

		array_push($result['login'], $index);

		$result['success'] = "1";
		$result['message'] = "success";
		echo json_encode($result);

		mysqli_close($conn);
    }
    else{
		$result['success'] = "0";
		$result['message'] = "error";
		echo json_encode($result);

		mysqli_close($conn);
    }
?>
