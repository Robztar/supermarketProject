<?php

     if (!isset($_POST['signup'])){
          header("location: ../gateway.php");
          exit();
     }
     else{
          $fname = $_POST['fname'];
          $lname = $_POST['lname'];
          $email = $_POST['email'];
          $pwd = $_POST['pwd'];
          $cpwd = $_POST['cpwd'];

          require_once 'dbh.php';
          require_once 'vfunc.php';

          if(invalidEmail($email) !== false){
               header("location: ../gateway.php?error=email");
               exit();
          }

          if($pwd !== $cpwd){
               header("location: ../gateway.php?error=confirm");
               exit();
          }

          if(emailExists($userconn, $email) !== false){
               header("location: ../gateway.php?error=emailexists");
               exit();
          }

          userSetup($userconn,$fname,$lname,$email,$pwd);
     }