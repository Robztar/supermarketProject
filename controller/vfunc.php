<?php
     
     
     //THE TABLE NAMES WILL NEED CHANGING



     function invalidEmail($e){
          //$state=;
          if(!filter_var($e, FILTER_VALIDATE_EMAIL)){
               $state = true;
          }
          else{
               $state = false;
          }
          return $state;
     }

     function emailExists($connection, $e){
          $sql = "SELECT * FROM members WHERE memberEmail = ?;";
          $prep = mysqli_stmt_init($connection);

          if(!mysqli_stmt_prepare($prep, $sql)){
               header("location: ../index.php?error=statementerror");
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
          $sql = "INSERT INTO members(memberFName, memberLName, memberEmail, memberPwd) Values(?,?,?,?);";
          $prep = mysqli_stmt_init($connection);

          if(!mysqli_stmt_prepare($prep, $sql)){
               header("location: ../index.php?error=statementerror");
               exit();
          }

          mysqli_stmt_bind_param($prep,"ssss",$first,$last,$email,$pass);
          mysqli_stmt_execute($prep);
          mysqli_stmt_close($prep);
          header("location: ../home.php?success");
          exit();
     }

     function userlogin($connection,$email,$pwd){
          $verify = emailExists($connection, $email);

          if($verify === false){
               header("location: ../index.php?error=login");
               exit();
          }

          $pMatch = $verify["memberPwd"];
          if($pwd === $pMatch){
               session_start();
               $_SESSION["mId"]=$verify["memberID"];
               $_SESSION["mfname"]=$verify["memberFName"];
               $_SESSION["mlname"]=$verify["memberLName"];
               header("location: ../home.php?success");
               exit();
          }
          else{
               header("location: ../index.php?error=login");
               exit();
          }
     }
     
     // header("location: ../gateway.php");
     // exit();