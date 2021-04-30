<?php
     session_start();

     if (!isset($_SESSION["id"])) {
          header("location: gateway.php");
          exit();
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="./css/main.css">

     <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->

     <title>Dash Supermarket | Log Out Page</title>
     <style>
          section{
               height: 95vh;
               width: 100%;
               position: relative;
               padding: 5rem;
               display: flex;
               flex-direction: column;
               align-items: center;
               justify-content: space-around;

          }
          a{
               text-decoration: none;
               color: white;
               margin: 5rem 3rem;
               padding: 1rem;
               border-radius: 1rem;
          }
          a:hover{
               text-decoration: none;
               color: white;
          }
     </style>
</head>
<body>
     <section>
          <h1>Are you sure you would like to log out 
               <?php 
                    echo $_SESSION["fname"]." ". $_SESSION["lname"];
               ?>?
          </h1>
          <div>
               <a href="./controller/close-acc.php" style="background: rgb(255, 68, 68);">Yes. Log me out.</a>
               <a href="./homepage.php" style="background: rgb(0, 192, 0);">No. Take me back.</a>
          </div>
     </section>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</body>