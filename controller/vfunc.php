<?php
     function emailExists($connection, $e){
          $sql = "SELECT * FROM customers WHERE email = ?;";
          $prep = mysqli_stmt_init($connection);

          if(!mysqli_stmt_prepare($prep, $sql)){
               header("location: ../gateway.php?error=statementerror");
               exit();
          }

          mysqli_stmt_bind_param($prep,"s",$e);
          mysqli_stmt_execute($prep);
          $result = mysqli_stmt_get_result($prep);

          if($row=mysqli_fetch_assoc($result)){
               return $row;
          }
          else{
               $state = false;
               return $state;
          }
          mysqli_stmt_close($prep);
     }

     function userSetup($connection,$first, $last, $email, $pass){
          $sql = "INSERT INTO customers(fname, lname, email, pword) Values(?,?,?,?);";
          $prep = mysqli_stmt_init($connection);

          if(!mysqli_stmt_prepare($prep, $sql)){
               header("location: ../gateway.php?error=statementerror");
               exit();
          }
          $pass_hash = password_hash($pass,PASSWORD_DEFAULT);
          mysqli_stmt_bind_param($prep,"ssss",$first,$last,$email,$pass_hash);
          mysqli_stmt_execute($prep);
          mysqli_stmt_close($prep);
          
          session_start();
          $_SESSION["id"]= emailExists($connection, $email)["custumerID"];
          $_SESSION["fname"]=emailExists($connection, $email)["fname"];
          $_SESSION["lname"]=emailExists($connection, $email)["lname"];

          header("location: ../index.php?success");
          exit();
     }

     function userlogin($connection,$email,$pwd){
          $verify = emailExists($connection, $email);

          if($verify === false){
               header("location: ../gateway.php?error=login");
               exit();
          }

          $pMatch = $verify["pword"];
          if(password_verify($pwd,$pMatch)){
               session_start();
               $_SESSION["id"]=$verify["custumerID"];
               $_SESSION["fname"]=$verify["fname"];
               $_SESSION["lname"]=$verify["lname"];
               header("location: ../index.php?success");
               exit();
          }
          else{
               header("location: ../gateway.php?error=login");
               exit();
          }
     }
     
     // header("location: ../gateway.php");
     // exit();