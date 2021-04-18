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
     <link rel="stylesheet" href="./css/home.css">

     <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     <!-- <script src="./js/main.js"></script> -->

     <!-- <link rel="icon" href="ENTER PATCH HERE" type="image/x-icon"> -->
     <title>Dash Supermarket | Home Page</title>
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
     <section class="welcome-sect">
          <div class="welcome-pic">
               *insert img here*
               <!-- <img src="" alt="*insert pic here*"> -->
          </div>
          <div class="welcome-phrase">
               <h1>Welcome <span>*Insert name here*</span></h1>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est placeat, debitis aut culpa magnam, eveniet praesentium quisquam voluptas quos illo eos pariatur sint!</p>
          </div>
     </section>
     <section class="wwo-sect">
          <div class="wwo-div">
               <h1>What We Offer</h1>
               
               <div class="card-group">
                    <div class="card text-center">
                         <img src="./res/test-img-food.jpg" class="card-img-top" alt="...">
                         <div class="card-body">
                              <h5 class="card-title">Food</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                         </div>
                    </div>
                    <div class="card text-center">
                         <img src="..." class="card-img-top" alt="...">
                         <div class="card-body">
                              <h5 class="card-title">Household</h5>
                              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                         </div>
                    </div>
                    <div class="card text-center">
                         <img src="..." class="card-img-top" alt="...">
                         <div class="card-body">
                              <h5 class="card-title">Card title1</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                         </div>
                    </div>
                    <div class="card text-center">
                         <img src="..." class="card-img-top" alt="...">
                         <div class="card-body">
                              <h5 class="card-title">Card title2</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                         </div>
                    </div>
               </div>
          </div>
     </section>
     <section>
          <div>

          </div>
          <div>
               <h2>Why Dash Supermarket?</h2>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae vero accusamus in sunt! Quis sit itaque in, quo exercitationem dicta reiciendis veritatis! Nisi, enim ipsa.</p>
          </div>
     </section>
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
</html>
<?php
     // session_destroy();
?>