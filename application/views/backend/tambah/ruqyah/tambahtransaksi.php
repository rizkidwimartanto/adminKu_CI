<?php
    include('../../config.php');

    $nama_peruqyah=$_POST['nama_peruqyah'];
    $nama_konsumen=$_POST['nama_konsumen'];
    $email=$_POST['email'];
    $alamat=$_POST['alamat'];
    $no_hp=$_POST['no_hp'];
    $total_biaya=$_POST['total_biaya'];

    $sql = "INSERT INTO transaksi(nama_peruqyah, nama_konsumen, email, alamat,no_hp,total_biaya)
    VALUES('$nama_peruqyah','$nama_konsumen','$email','$alamat','$no_hp', '$total_biaya')";
    $query=mysqli_query($conn,$sql);
    if($query){
        echo "<script>alert('Daftar transaksi Sukses!!!')</script>";
        echo "<script>top.location='../../dashboard/datatransaksi.php'</script>";
    }else{
        echo "<script>alert('Daftar transaksi Gagal!!!')</script>";
        echo "<script>top.location='../../dashboard/form/formtambahtransaksi'</script>";
    }
?>