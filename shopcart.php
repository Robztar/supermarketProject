<?php
     // session_start();

     // if (!isset($_SESSION["mId"])) {
     //      header("location: gateway.php");
     //      exit();
     // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="./css/main.css">

     <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

     <!-- <link rel="icon" href="ENTER PATCH HERE" type="image/x-icon"> -->
     <title>Dash Supermarket | Cart Page</title>
</head>
<body>
     <nav>
          <div class="brand nav-items">
               <a href="index.php"><span>DASH</span> Supermarket</a>
          </div>
          <div class="search-nav-item">
               <form class="search-form">
                    <input class="search-bar" type="search" placeholder="Search" aria-label="Search">
                    <button class="search-btn" type="submit">*search*</button>
               </form>
          </div>
          <!-- <div class="nav-tems">
               <a href="#" class="nav-items">Store</a>
          </div> -->
          <a href="store.php" class="nav-items">Store</a>
          <a href="shopcart.php"  class="cart-btn">
               <div>*insert cart icon*</div>
               <div>Cart (0)</div>
          </a>
          <a href="myaccount.php" class="account-btn">
               <div>Account</div>
               <div class="user-image"></div>
          </a>
     </nav>
     <footer>
          <div>
               <h4>Contact Us</h4>
               <hr>
               <p>Tel. </p>
          </div>
          <div>
               <h4>Location</h4>
               <hr>
               <p>.... </p>
          </div>
          <div>
               <h4>Follow Us</h4>
               <hr>
               <p>... </p>
          </div>
          <div>
               <h4>Navigate</h4>
               <hr>
               <p>Home </p>
          </div>
     </footer>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</body>