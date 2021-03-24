 <?php

 if ($_SERVER['REQUEST_METHOD']=='POST') {
     $connect = mysqli_connect("localhost","root","", "ruqyah_aswaja") or die("Tidak dapat terhubung");

     $id = $_POST['id'];
     $sql = "SELECT * FROM konsumen WHERE id='$id'";

     $response = mysqli_query($connect, $sql);

     $result = array();
     $result['read'] = array();

     if( mysqli_num_rows($response) === 1 ) {

         if ($row = mysqli_fetch_assoc($response)) {

              $h['nama_konsumen'] = $row['nama_konsumen'] ;
              $h['username'] = $row['username'] ;

              array_push($result["read"], $h);

              $result["success"] = "1";
              echo json_encode($result);
         }

    }

  }else {

      $result["success"] = "0";
      $result["message"] = "Error!";
      echo json_encode($result);

      mysqli_close($conn);
  }

  ?>
