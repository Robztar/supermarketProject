<?php
     if (!isset($_POST['login'])){
          header("location: ../gateway.php");
          exit();
     }
     else{
          $email = $_POST['email'];
          $pwd = $_POST['pwd'];

          require_once 'dbh.php';
          require_once 'vfunc.php';

          userlogin($conn,$email,$pwd);
     }