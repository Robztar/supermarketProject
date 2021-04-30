<?php
     $server = "localhost";
     $dbUser = "root";
     $dbPwd = "";
     $dbName = "fresh_market";

     $conn = mysqli_connect($server, $dbUser, $dbPwd, $dbName);

     if (!$conn) {
          die(mysqli_error($conn));
     }

     // Database Creation
     // CREATE TABLE customers(
     //      custumerID int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
     //     fname VARCHAR(128) NOT NULL,
     //     lname VARCHAR(128) NOT NULL,
     //     email VARCHAR(128) NOT NULL,
     //     pword VARCHAR(128) NOT NULL
     // );