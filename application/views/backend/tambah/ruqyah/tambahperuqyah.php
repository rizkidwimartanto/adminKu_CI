<?php
    include('../../config.php');

    function upload(){
        $namaFile = $_FILES['photo']['name'];
        $ukuranFile = $_FILES['photo']['size'];
        $error = $_FILES['photo']['error'];
        $tmpName = $_FILES['photo']['tmp_name'];
    
        //Cek Apakah tidak ada gambar yang di upload
        if ($error === 4) {
            echo "
                    <script>
                        alert('Pilih gambar terlebih dahulu!');
                    </script>
                ";
            return false;
        }
    
        //Cek File yang diupload itu gambar?
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
    
        if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
            echo "
                    <script>
                        alert('Yang anda upload bukan gambar!');
                    </script>
                ";
            return false;
        }
    
        //Cek jika ukuran file foto besar
        if ($ukuranFile > 500000) {
            echo "
                    <script>
                        alert('File yang anda upload terlalu besar!');
                    </script>
                ";
            return false;
        }
    
        //Lolos Pengecekan, gambar siap di Upload
        $namaFileBaru = uniqid();
        $namaFileBaru .= ".";
        $namaFileBaru .= $ekstensiGambar;
    
        move_uploaded_file($tmpName, 'C:/xampp/htdocs/uas_android/assets/img/' . $namaFileBaru);
        return $namaFileBaru;
    }
    
    if(isset($_POST["submit"])){
        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];
        $no_hp=$_POST['no_hp'];
        $photo = upload();
        if(!$photo){
            return false;
        }
        $sql = "INSERT INTO peruqyah (nama,alamat,no_hp,photo) 
        VALUES ('$nama','$alamat','$no_hp','$photo')";
        $result = mysqli_query($conn,$sql);
    }   
    
    if($result){
        echo "<script>alert('Tambah peruqyah Berhasil!!')</script>";
        echo "<script>top.location='../../dashboard/dataperuqyah.php'</script>";
    }else{
        echo "<script>alert('Tambah peruqyah gagal')</script>";
        echo "<script>top.location='../../dashboard/form/formtambahperuqyah.php'</script>";
    }
    mysqli_close($conn);
    
    // $nama=$_POST['nama'];
    // $alamat=$_POST['alamat'];
    // $no_hp=$_POST['no_hp'];

    // $sql = "INSERT INTO peruqyah(nama, alamat, no_hp)VALUES('$nama','$alamat','$no_hp')";
    // $query=mysqli_query($conn,$sql);
    // if($query){
    //     echo "<script>alert('Daftar peruqyah Sukses!!!')</script>";
    //     echo "<script>top.location='../../dashboard/dataperuqyah.php'</script>";
    // }else{
    //     echo "<script>alert('Daftar peruqyah Gagal!!!')</script>";
    //     echo "<script>top.location='../../dashboard/form/formtambahperuqyah'</script>";
    // }
?>