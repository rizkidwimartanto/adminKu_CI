<?php     
    $connect = mysqli_connect("localhost","root","","ruqyah_aswaja") or die("Tidak dapat terhubung");

	$ip_image = "http://192.168.43.14/adminKu_CI/assets/img/";
	$result = array();
	$result['data'] = array();
	$select= "SELECT * FROM peruqyah";
	$responce = mysqli_query($connect,$select);

	while($row = mysqli_fetch_array($responce))
		{
			$index['id'] = $row['id'];
			$index['nama'] = $row['nama'];
			$index['alamat'] = $row['alamat'];
			$index['no_hp'] = $row['no_hp'];
			$index['photo'] = $ip_image.$row['photo'];

			array_push($result['data'], $index);
		}

			$result["success"]="1";
			echo json_encode($result);
			mysqli_close($connect);
?>
