<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="./css/signin.css">

     <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     <script src="./js/main.js"></script>

     <title>Dash Supermarket | Sign-up/Log-in Page</title>
</head>
<body>
     <section>
          <div class="sign-up-form form">
               <h2>Sign Up</h2>
               <form action="./controller/signup.php" method="post">
                    <input type="text" name="fname" placeholder="First Name" required> 
                    <br>
                    <input type="text" name="lname" placeholder="Last Name" required> 
                    <br>
                    <input type="text" name="email" placeholder="Email" required> 
                    <br>
                    <input type="password" name="pwd" placeholder="Password" required> 
                    <br>
                    <input type="password" name="cpwd" placeholder="Confirm Password" required> 
                    <br>
                    <button type="submit" name="signup">Sign Up</button>
               </form>
               <a href="#" onclick="login()">Already have an account?</a>
          </div>

          <div class="log-in-form form">
               <h2>Log In</h2>
               <form action="./controller/login.php" method="post">
                    <input type="text" name="email" placeholder="Email" required> 
                    <br>
                    <input type="password" name="pwd" placeholder="Password" required> 
                    <br>
                    <button type="submit" name="login">Log In</button>
               </form>
               <a href="#" onclick="signup()">Don't have an account?</a>
          </div>
     </section>
     <?php
          if(isset($_GET["error"])){
               if($_GET["error"]=="email"){
                    echo"<script>
                              $(document).ready(function(){
                                   alert('Email address is not valid');
                              });
                         </script>";
               }
               elseif($_GET["error"]=="confirm"){
                    echo"<script>
                              $(document).ready(function(){
                                   alert('The passwords don\'t match');
                              });
                         </script>";
               }
               elseif($_GET["error"]=="emailexists"){
                    echo"<script>
                              $(document).ready(function(){
                                   alert('This email already exists');
                              });
                         </script>";
               }
               elseif($_GET["error"]=="statementerror"){
                    echo"<script>
                              $(document).ready(function(){
                                   alert('There was trouble submitting this form. Please try another input or contact the page admins.');
                              });
                         </script>";
               }
               elseif($_GET["error"]=="login"){
                    echo"<script>
                              $(document).ready(function(){
                                   alert('This login was unsuccessful.');
                              });
                         </script>";
               }
          }
     ?>
</body>
</html>