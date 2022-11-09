<?php
     // database conection
     $servername = "localhost";
     $username = "root";
     $password = "";
     $database = "users";

     $conn = mysqli_connect($servername,$username,$password,$database);
     if($conn){
          // echo".";
     }else{
          die("Not Connected Successfully");
     }
?>

