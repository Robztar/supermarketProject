<?php
     session_start();
	if (!isset($_SESSION["id"])) {
		header("location: ./gateway.php");
		exit();
	}
?>

<!DOCTYPE html>
<html lang="en" class="h-100">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Fresh Mart | Welcome Page</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
		<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">



		<!-- Bootstrap core CSS -->
		<!-- <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> -->

		<meta name="theme-color" content="#7952b3">


		<style>
			body{
				background-image: url(image/vegs.jpg);
				background-size: cover;
			}

			h1{
				color: whitesmoke;
			}

			p{
				color: whitesmoke;
			}

			.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			user-select: none;
			}

			@media (min-width: 768px) {
				.bd-placeholder-img-lg {
					font-size: 3.5rem;
				}
			}
		</style>


		<!-- Custom styles for this template -->
		<link href="cover.css" rel="stylesheet">
	</head>
	<body class="d-flex h-100 text-center text-white bg-dark">

		<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
			<header class="mb-auto">
				<div>
					<b><h1 class="float-md-start mb-0">Fresh Mart</h1></b>
				</div>
			</header>

			<main class="px-3">
				<b><h1>Welcome To Fresh Mart <?php echo $_SESSION['fname']." ".$_SESSION['lname'];?>!</h1></b>
				<b><p class="lead">We Hope You Enjoy Your Virtual Shopping Experience!</p></b>
				<p class="lead">
					<b><a href="./homepage.php" class="btn btn-lg btn-secondary bg-dark">Come In And Shop!</a></b>
				</p>
			</main>

			<footer class="mt-auto text-white-50">
				<b><span class="text-white">Copyright &copy 2021. Internet Authoring Group 1. All Rights Reserved.</span></b>
			</footer>
		</div>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

	</body>
</html>
