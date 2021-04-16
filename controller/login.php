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

          if(invalidEmail($email) !== false){
               header("location: ../gateway.php?error=email");
               exit();
          }

          userlogin($userconn,$email,$pwd);
     }