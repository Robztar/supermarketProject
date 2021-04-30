<?php
     session_start();

     if (!isset($_SESSION["id"])) {
          header("location: ./gateway.php");
          exit();
     }
?>
<!DOCTYPE html>
<html>
<head>
	<title> Contact Form Design </title>
	<link rel="stylesheet" type="text/css" href="./style/style.css">
</head>

<body>

	<div class="contact-title">
			<h1>Say Hello</h1>
			<h2>We are always ready to serve you!</h2>
	</div>
	
	<div>
		<form class="contact-form" method="post" action="./controller/contact-form-handler.php">
               <input name="fname" type="text" class="form-control" placeholder="Enter Your First Name" required>
               <br>
               <input name="lname" type="text" class="form-control" placeholder="Enter Your Last Name" required>
               <br>
               <input name="number" type="int" class="form-control" placeholder="Enter Your Number" required>
               <br>
               <input name="address" type="text" class="form-control" placeholder="Enter Your Address" required>
               <br>
               <input name="email" type="email" class="form-control" placeholder="Enter Your Email" required>
               <br>
          
               <textarea name="message" class="form-control" placeholder="Message" row="4" required>
               </textarea><br>
               
               <input type="submit" class="form-control submit" value="SEND MESSAGE"><br>
          </form>
          <a href="./index.php">Return to home</a>
     </div>
</body>
</html>