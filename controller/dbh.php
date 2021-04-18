<?php
     $server = "localhost";
     $dbUser = "root";
     $dbPwd = "";
     
     // $dbName = "";

     //This connection wont work yet...it needs a database
     $conn = mysqli_connect($server, $dbUser, $dbPwd, $dbName);

     if (!$userconn) {
          die(mysqli_error($userconn));
     }

     // header("location: ../gateway.php");
     // exit();