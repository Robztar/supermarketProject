<?php
     session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="Description" content="">
	<link rel="stylesheet" type="text/css" href="./style/eatfresh.css"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fresh Mart Supermarket | Home Page</title>

	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>
	<?php
		if (!isset($_SESSION["id"])) {
			header("location: ./gateway.php");
			exit();
		}
	?>
	<div class="parallax">
		<div class="page-title"><h1>Fresh Mart</h1></div>
	</div>
	<div class="topnav" class="menu" id="sticky">
		<ul class="menu-ul">
			<a href="#home" class="a-menu"><li>Fresh Mart</li></a>
			<a href="#deals" class="a-menu"><li>Deals</li></a>
			<a href="#vegetables" class="a-menu"><li>Vegetables</li></a>
			<a href="#fruits" class="a-menu"><li>Fruits</li></a>
			<a href="#meat" class="a-menu"><li>Meat</li></a>
			<a href="#toiletries" class="a-menu"><li>Toiletries</li></a>
			<a href="#pastry" class="a-menu"><li>Pastry</li></a>
			<a href="#snacks" class="a-menu"><li>Snacks</li></a>
			<a href="#wine" class="a-menu"><li>Wine</li></a>
			<a href="./shopcart.php" class="a-menu"><li>Cart</li></a>
			<a href="./contact.php" class="a-menu"><li>Contact</li></a>
			<a href="./myaccount.php" class="a-menu"><li>Log Out</li></a>
		</ul>
	</div>
	
<!--	<li class="search-box">
		<form>
			<input type="text" placeholder="search..." name="search"
			class="search-input"/>
			<button><i class="fas fa-search"></i></button>
			</li> -->
	
<!--Home Page Begins-->
	<div class="container">
		<a href="#vegetables">
			<div class="categories">
				<img src="./res/bell pepper.jpg" class="item-image"/>
				<div class="image-title">Vegetables</div>
			</div>
		</a>
		<a href="#fruits">
			<div class="categories">
				<img src="./res/fruitss.jpg" class="item-image"/>
				<div class="image-title">Fruits</div>
			</div>
		</a>
		<a href="#meat">
			<div class="categories">
				<img src="./res/meat.jpg" class="item-image"/>
				<div class="image-title">Meat & Seafood</div>
			</div>
		</a>
		<a href="#toiletries">
			<div class="categories">
				<img src="./res/toiletries.jpg" class="item-image"/>
				<div class="image-title">Toiletries</div>
			</div>
		</a>
		<a href="#Snacks">
			<div class="categories">
				<img src="./res/snacks.jpg" class="item-image"/>
				<div class="image-title">Snacks</div>
			</div>
			</a>
		<a href="#pastry">
			<div class="categories">
				<img src="./res/pastry.jpg" class="item-image"/>
				<div class="image-title">Pastry</div>
			</div>
			</a>
			<a href="#wine">
			<div class="categories">
				<img src="./res/wine.jpeg" class="item-image"/>
				<div class="image-title">Wine</div>
			</div>
			</a>

		<a href="#deals">
			<div class="categories">
				<img src="./res/deals.jpg" class="item-image"/>
				<div class="image-title">Deals</div>
			</div>
		</a>
	</div>
	<!--Deal Begins Here-->
		<div class="deals-container" id="deals">
			<div class="parallax">
				<div class="title">DEALS</div>
			</div>
			<div class="deal">
				Save 20% on min-purchase of $149 on vegetables<br/>
				<button class="coupon-btn">Add Coupon</button>
			</div>
			<div class="deal">
				Save 20% on min-purchase of $300 on fruits<br/>
				<button class="coupon-btn">Add Coupon</button>
			</div>
			<div class="deal">
				Save 20% on min-purchase of $700 on meat/seafood<br/>
				<button class="coupon-btn">Add Coupon</button>
			</div>
			<div class="deal">
				Save 20% on min-purchase of $399 on toiletries<br/>
				<button class="coupon-btn">Add Coupon</button>
			</div>
			<div class="deal">
				Save 20% on min-purchase of $1000 on pastry<br/>
				<button class="coupon-btn">Add Coupon</button>
			</div>
			<div class="deal">
				Save 20% on min-purchase of $450 on snacks<br/>
				<button class="coupon-btn">Add Coupon</button>
			</div>
			<div class="deal">
				Save 20% on min-purchase of $5000 on wine<br/>
				<button class="coupon-btn">Add Coupon</button>
			</div>
		</div>
	<!--Deal Ends Here-->
	<!--Vegetables Begins Here-->
		<section id="vegetables">
		<div class="deals-container" id="vegetables">
			<div class="parallax">
				<div class="title">VEGETABLES</div>
			</div>
			<div class="items">
			<div class="images">
				<img src="./res/escallion.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Escallion</b><br/>
				<div class="item-select">
					Price : $100.00/per lb.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 lbs</option>
					<option>4 lbs</option>
					<option>6 lbs</option>
					<option>8 lbs</option>
					<option>10 lbs</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/okra.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Okra</b><br/>
				<div class="item-select">
					Price : $110.00/per lb.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 lbs</option>
					<option>4 lbs</option>
					<option>6 lbs</option>
					<option>8 lbs</option>
					<option>10 lbs</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/tomatoes.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Tomatoes</b><br/>
				<div class="item-select">
					Price : $250.00/per lb.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 lbs</option>
					<option>4 lbs</option>
					<option>6 lbs</option>
					<option>8 lbs</option>
					<option>10 lbs</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/onion.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Onion</b><br/>
				<div class="item-select">
					Price : $150.00/per lb.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 lbs</option>
					<option>4 lbs</option>
					<option>6 lbs</option>
					<option>8 lbs</option>
					<option>10 lbs</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/hot pepper.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Hot Pepper</b><br/>
				<div class="item-select">
					Price : $150.00/per lb.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 lbs</option>
					<option>4 lbs</option>
					<option>6 lbs</option>
					<option>8 lbs</option>
					<option>10 lbs</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/ginger.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Ginger</b><br/>
				<div class="item-select">
					Price : $400.00/per lb.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 lbs</option>
					<option>4 lbs</option>
					<option>6 lbs</option>
					<option>8 lbs</option>
					<option>10 lbs</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/carrot.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Carrot</b><br/>
				<div class="item-select">
					Price : $250.00/per lb.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 lbs</option>
					<option>4 lbs</option>
					<option>6 lbs</option>
					<option>8 lbs</option>
					<option>10 lbs</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/cabbage.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Cabbage</b><br/>
				<div class="item-select">
					Price : $120.00/per lb.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 lbs</option>
					<option>4 lbs</option>
					<option>6 lbs</option>
					<option>8 lbs</option>
					<option>10 lbs</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/pakk choi.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Pak Choi</b><br/>
				<div class="item-select">
					Price : $80.00/per lb.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 lbs</option>
					<option>4 lbs</option>
					<option>6 lbs</option>
					<option>8 lbs</option>
					<option>10 lbs</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/sweet pepper.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Sweet/Bell Pepper</b><br/>
				<div class="item-select">
					Price : $250.00/per lb.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 lbs</option>
					<option>4 lbs</option>
					<option>6 lbs</option>
					<option>8 lbs</option>
					<option>10 lbs</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/lettuce.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Lettuce</b><br/>
				<div class="item-select">
					Price : $100.00/per lb.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 lbs</option>
					<option>4 lbs</option>
					<option>6 lbs</option>
					<option>8 lbs</option>
					<option>10 lbs</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/thyme.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Thyme</b><br/>
				<div class="item-select">
					Price : $50.00/per lb.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 lbs</option>
					<option>4 lbs</option>
					<option>6 lbs</option>
					<option>8 lbs</option>
					<option>10 lbs</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
	<div class="items">
			<div class="images">
				<img src="./res/spinach.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Spinach</b><br/>
				<div class="item-select">
					Price : $80.00/per lb.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 lbs</option>
					<option>4 lbs</option>
					<option>6 lbs</option>
					<option>8 lbs</option>
					<option>10 lbs</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
	<div class="items">
			<div class="images">
				<img src="./res/pumpkin.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Pumpkin</b><br/>
				<div class="item-select">
					Price : $90.00/per lb.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 lbs</option>
					<option>4 lbs</option>
					<option>6 lbs</option>
					<option>8 lbs</option>
					<option>10 lbs</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
	<div class="items">
			<div class="images">
				<img src="./res/yellow yam.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Yellow Yam</b><br/>
				<div class="item-select">
					Price : $50.00/per lb.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 lbs</option>
					<option>4 lbs</option>
					<option>6 lbs</option>
					<option>8 lbs</option>
					<option>10 lbs</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
	<div class="items">
			<div class="images">
				<img src="./res/irish potato.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Irish Potato</b><br/>
				<div class="item-select">
					Price : $80.00/per lb.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 lbs</option>
					<option>4 lbs</option>
					<option>6 lbs</option>
					<option>8 lbs</option>
					<option>10 lbs</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
	<div class="items">
			<div class="images">
				<img src="./res/sweet potato.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Sweet Potato</b><br/>
				<div class="item-select">
					Price : $120.00/per lb.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 lbs</option>
					<option>4 lbs</option>
					<option>6 lbs</option>
					<option>8 lbs</option>
					<option>10 lbs</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
<!--Vegetables Ends Here-->
<!--Fruits Begins Here-->
	<section id="fruits">
	<div class="deals-container" id="fruits">
			<div class="parallax">
				<div class="title">FRUITS</div>
			</div>
			<div class="items">
			<div class="images">
				<img src="./res/watermelon.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Fresh Watermelon</b><br/>
				<div class="item-select">
					Price : $200.00/per lb.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 lbs</option>
					<option>4 lbs</option>
					<option>6 lbs</option>
					<option>8 lbs</option>
					<option>10 lbs</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/cherries.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Cherries</b><br/>
				<div class="item-select">
					Price : $250.00/per lb.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 lbs</option>
					<option>4 lbs</option>
					<option>6 lbs</option>
					<option>8 lbs</option>
					<option>10 lbs</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/pineapple.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Pineapple</b><br/>
				<div class="item-select">
					Price : $200.00/per lb.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 lbs</option>
					<option>4 lbs</option>
					<option>6 lbs</option>
					<option>8 lbs</option>
					<option>10 lbs</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/strawberry.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Strawberry</b><br/>
				<div class="item-select">
					Price : $1050.00/per lb.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 lbs</option>
					<option>4 lbs</option>
					<option>6 lbs</option>
					<option>8 lbs</option>
					<option>10 lbs</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/grape.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Grape</b><br/>
				<div class="item-select">
					Price : $800.00/per lb.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 lbs</option>
					<option>4 lbs</option>
					<option>6 lbs</option>
					<option>8 lbs</option>
					<option>10 lbs</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/oranges.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Orange</b><br/>
				<div class="item-select">
					Price : $800.00/per doz.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 lbs</option>
					<option>4 lbs</option>
					<option>6 lbs</option>
					<option>8 lbs</option>
					<option>10 lbs</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/canaloupe.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Cantaloupe</b><br/>
				<div class="item-select">
					Price : $150.00/per lb.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 lbs</option>
					<option>4 lbs</option>
					<option>6 lbs</option>
					<option>8 lbs</option>
					<option>10 lbs</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/apple.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Apple</b><br/>
				<div class="item-select">
					Price : $200.00/per doz.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 doz</option>
					<option>4 doz</option>
					<option>6 doz</option>
					<option>8 doz</option>
					<option>10 doz</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/banana.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Banana</b><br/>
				<div class="item-select">
					Price : $200.00/per doz.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 doz</option>
					<option>4 doz</option>
					<option>6 doz</option>
					<option>8 doz</option>
					<option>10 doz</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/kiwi.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Kiwi</b><br/>
				<div class="item-select">
					Price : $350.00/per lb.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 lbs</option>
					<option>4 lbs</option>
					<option>6 lbs</option>
					<option>8 lbs</option>
					<option>10 lbs</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/peach.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Peach</b><br/>
				<div class="item-select">
					Price : $300.00/per doz.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 doz</option>
					<option>4 doz</option>
					<option>6 doz</option>
					<option>8 doz</option>
					<option>10 doz</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/pear.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Pear</b><br/>
				<div class="item-select">
					Price : $150.00/per doz.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 doz</option>
					<option>4 doz</option>
					<option>6 doz</option>
					<option>8 doz</option>
					<option>10 doz</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
	<div class="items">
			<div class="images">
				<img src="./res/blueberry.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Blueberry</b><br/>
				<div class="item-select">
					Price : $280.00/per lb.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 lbs</option>
					<option>4 lbs</option>
					<option>6 lbs</option>
					<option>8 lbs</option>
					<option>10 lbs</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
	<div class="items">
			<div class="images">
				<img src="./res/raspberries.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Raspberries</b><br/>
				<div class="item-select">
					Price : $190.00/per lb.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 lbs</option>
					<option>4 lbs</option>
					<option>6 lbs</option>
					<option>8 lbs</option>
					<option>10 lbs</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
	<div class="items">
			<div class="images">
				<img src="./res/plum.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Plum</b><br/>
				<div class="item-select">
					Price : $250.00/per doz.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 doz</option>
					<option>4 doz</option>
					<option>6 doz</option>
					<option>8 doz</option>
					<option>10 doz</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
	<div class="items">
			<div class="images">
				<img src="./res/naseberry.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Naseberry</b><br/>
				<div class="item-select">
					Price : $150.00/per doz.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 doz</option>
					<option>4 doz</option>
					<option>6 doz</option>
					<option>8 doz</option>
					<option>10 doz</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
	<div class="items">
			<div class="images">
				<img src="./res/sweetsop.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Sweet Sop</b><br/>
				<div class="item-select">
					Price : $220.00/per doz.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 doz</option>
					<option>4 doz</option>
					<option>6 doz</option>
					<option>8 doz</option>
					<option>10 doz</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
<!--Fruits Ends Here-->
<!--Meat Begins Here-->
<section id="meat">
<div class="deals-container" id="meat">
			<div class="parallax">
				<div class="title">MEATS & SEAFOOD</div>
			</div>
			<div class="items">
			<div class="images">
				<img src="./res/chicken.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Chicken</b><br/>
				<div class="item-select">
					Price : $250.00/per lb.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 lbs</option>
					<option>4 lbs</option>
					<option>6 lbs</option>
					<option>8 lbs</option>
					<option>10 lbs</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/prok.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Pork</b><br/>
				<div class="item-select">
					Price : $350.00/per lb.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 lbs</option>
					<option>4 lbs</option>
					<option>6 lbs</option>
					<option>8 lbs</option>
					<option>10 lbs</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/franks.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Frankfurter</b><br/>
				<div class="item-select">
					Price : $200.00/per lb.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 lbs</option>
					<option>4 lbs</option>
					<option>6 lbs</option>
					<option>8 lbs</option>
					<option>10 lbs</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/bacon.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Bacon</b><br/>
				<div class="item-select">
					Price : $450.00/per lb.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 lbs</option>
					<option>4 lbs</option>
					<option>6 lbs</option>
					<option>8 lbs</option>
					<option>10 lbs</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/sliced fish.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Sliced Fish</b><br/>
				<div class="item-select">
					Price : $480.00/per lb.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 lbs</option>
					<option>4 lbs</option>
					<option>6 lbs</option>
					<option>8 lbs</option>
					<option>10 lbs</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/salmon.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Salmon</b><br/>
				<div class="item-select">
					Price : $800.00/per doz.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 lbs</option>
					<option>4 lbs</option>
					<option>6 lbs</option>
					<option>8 lbs</option>
					<option>10 lbs</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/fish.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Fish</b><br/>
				<div class="item-select">
					Price : $1000.00/per lb.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 lbs</option>
					<option>4 lbs</option>
					<option>6 lbs</option>
					<option>8 lbs</option>
					<option>10 lbs</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/shrimp.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Shrimp</b><br/>
				<div class="item-select">
					Price : $900.00/per lb.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 lb</option>
					<option>4 lb</option>
					<option>6 lb</option>
					<option>8 lb</option>
					<option>10 lb</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/lobster.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Lobster</b><br/>
				<div class="item-select">
					Price : $700.00/per doz.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 doz</option>
					<option>4 doz</option>
					<option>6 doz</option>
					<option>8 doz</option>
					<option>10 doz</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/egg.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Egg</b><br/>
				<div class="item-select">
					Price : $350.00/per doz.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 doz</option>
					<option>4 doz</option>
					<option>6 doz</option>
					<option>8 doz</option>
					<option>10 doz</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/oxtail.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Oxtail</b><br/>
				<div class="item-select">
					Price : $800.00/per doz.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 doz</option>
					<option>4 doz</option>
					<option>6 doz</option>
					<option>8 doz</option>
					<option>10 doz</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/turkey neck.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Turkey Neck</b><br/>
				<div class="item-select">
					Price : $350.00/per doz.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 doz</option>
					<option>4 doz</option>
					<option>6 doz</option>
					<option>8 doz</option>
					<option>10 doz</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
	<div class="items">
			<div class="images">
				<img src="./res/chicken foot.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Chicken Foot</b><br/>
				<div class="item-select">
					Price : $280.00/per lb.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 lbs</option>
					<option>4 lbs</option>
					<option>6 lbs</option>
					<option>8 lbs</option>
					<option>10 lbs</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
	<div class="items">
			<div class="images">
				<img src="./res/mutton.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Mutton</b><br/>
				<div class="item-select">
					Price : $650.00/per lb.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 lbs</option>
					<option>4 lbs</option>
					<option>6 lbs</option>
					<option>8 lbs</option>
					<option>10 lbs</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
	<div class="items">
			<div class="images">
				<img src="./res/saltfish.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Salt Fish</b><br/>
				<div class="item-select">
					Price : $550.00/per lb.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 lb</option>
					<option>4 lb</option>
					<option>6 lb</option>
					<option>8 lb</option>
					<option>10 lb</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
	<div class="items">
			<div class="images">
				<img src="./res/salt mackerel.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Salt Mackerel</b><br/>
				<div class="item-select">
					Price : $350.00/per lb.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 lb</option>
					<option>4 lb</option>
					<option>6 lb</option>
					<option>8 lb</option>
					<option>10 lb</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
	<div class="items">
			<div class="images">
				<img src="./res/fillet.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Fish Fillet</b><br/>
				<div class="item-select">
					Price : $750.00/per doz.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>2 doz</option>
					<option>4 doz</option>
					<option>6 doz</option>
					<option>8 doz</option>
					<option>10 doz</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
<!--Meat Ends Here-->	
<!--Toiletries Begins Here-->
<section id="toiletries">
<div class="deals-container" id="toiletries">
			<div class="parallax">
				<div class="title">TOILETRIES</div>
			</div>
			<div class="items">
			<div class="images">
				<img src="./res/tissue.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Tissue</b><br/>
				<div class="item-select">
					Price : $250.00/for 3.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>6</option>
					<option>9</option>
					<option>12</option>
					<option>15</option>
					<option>18</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/handtowel.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Jumbo Roll Kitchen Towel</b><br/>
				<div class="item-select">
					Price : $350.00/for 3.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>6</option>
					<option>9</option>
					<option>12</option>
					<option>15</option>
					<option>18</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/toothbrush.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Toothbrush</b><br/>
				<div class="item-select">
					Price : $250.00/for 3.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>6</option>
					<option>9</option>
					<option>12</option>
					<option>15</option>
					<option>18</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/toothpaste.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Toothpaste</b><br/>
				<div class="item-select">
					Price : $450.00/for 1.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>3</option>
					<option>6</option>
					<option>9</option>
					<option>12</option>
					<option>14</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/mouthwash.png" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Mouthwash</b><br/>
				<div class="item-select">
					Price : $550.00/for 1.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>3</option>
					<option>6</option>
					<option>9</option>
					<option>12</option>
					<option>14</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/soap.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Bathsoap</b><br/>
				<div class="item-select">
					Price : $350.00/for 1.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>3</option>
					<option>6</option>
					<option>9</option>
					<option>12</option>
					<option>14</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/bleach.png" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Bleach</b><br/>
				<div class="item-select">
					Price : $350.00/for 1.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>3</option>
					<option>6</option>
					<option>9</option>
					<option>12</option>
					<option>14</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/breeze.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Soap Powder</b><br/>
				<div class="item-select">
					Price : $350.00/for 1.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>3</option>
					<option>6</option>
					<option>9</option>
					<option>12</option>
					<option>14</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/fab.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Fabric Softener</b><br/>
				<div class="item-select">
					Price : $350.00/for 1.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>3</option>
					<option>6</option>
					<option>9</option>
					<option>12</option>
					<option>14</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/lotion.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Lotion</b><br/>
				<div class="item-select">
					Price : $750.00/for 1.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>3</option>
					<option>6</option>
					<option>9</option>
					<option>12</option>
					<option>14</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/roll on.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Deodorant</b><br/>
				<div class="item-select">
					Price : $250.00/for 1.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>3</option>
					<option>6</option>
					<option>9</option>
					<option>12</option>
					<option>14</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			
<!--Toiletries Ends Here-->	
<!--Pastries Begins Here-->
<section id="pastry">
<div class="deals-container" id="pastry">
			<div class="parallax">
				<div class="title">PASTRIES</div>
			</div>
			<div class="items">
			<div class="images">
				<img src="./res/red-velvet.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Red Velvet Cake</b><br/>
				<div class="item-select">
					Price : $350.00/per slice.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>1 slice</option>
					<option>2 slice</option>
					<option>3 slice</option>
					<option>1 whole</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/choco.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Chocolate Cake</b><br/>
				<div class="item-select">
					Price : $450.00/per slice.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>1 slice</option>
					<option>2 slice</option>
					<option>3 slice</option>
					<option>1 whole</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/bday.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Birthday Cake</b><br/>
				<div class="item-select">
					Price : $5500.00/for 1.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/donut.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Donuts</b><br/>
				<div class="item-select">
					Price : $110.00/for 1.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>6</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/gizzada.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Gizzada</b><br/>
				<div class="item-select">
					Price : $150.00/for 1.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>6</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/Grater-cake.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Grater Cake</b><br/>
				<div class="item-select">
					Price : $50.00/for 1.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>6</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/peanut drops.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Peanut Cake/Drops</b><br/>
				<div class="item-select">
					Price : $70.00/for 1.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/cheese danish.jpeg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Cheese Danish</b><br/>
				<div class="item-select">
					Price : $80.00/for 1.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/bun.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Spice Bun</b><br/>
				<div class="item-select">
					Price : $100.00/for 1.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/cupcake.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Cupcakes</b><br/>
				<div class="item-select">
					Price : $90.00/for 1.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/cheesecake.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Cheesecake</b><br/>
				<div class="item-select">
					Price : $650.00/per slice.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>1 slice</option>
					<option>2 slice</option>
					<option>3 slice</option>
					<option>1 whole</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
<!--Pastries Ends Here-->
<!--Snacks Begins Here-->
<div class="deals-container" id="snacks">
			<div class="parallax">
				<div class="title">SNACKS</div>
			</div>
			<div class="items">
			<div class="images">
				<img src="./res/kiss.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Kiss Cake</b><br/>
				<div class="item-select">
					Price : $60.00/for 1.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>1 </option>
					<option>2 </option>
					<option>3 </option>
					<option>4</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/pchip.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Plantain Chips</b><br/>
				<div class="item-select">
					Price : $90.00/for 1.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>1 </option>
					<option>2 </option>
					<option>3 </option>
					<option>4</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/bigfoot.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Big Foot</b><br/>
				<div class="item-select">
					Price : $60.00/for 1.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>1 </option>
					<option>2 </option>
					<option>3 </option>
					<option>4</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/crunch.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Caramel Crunch</b><br/>
				<div class="item-select">
					Price : $110.00/for 1.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>6</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/wcracker.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Water Crackers</b><br/>
				<div class="item-select">
					Price : $200.00/for 1.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>6</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/Grater-cake.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Grater Cake</b><br/>
				<div class="item-select">
					Price : $50.00/for 1.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>6</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/dor.png" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Doritos</b><br/>
				<div class="item-select">
					Price : $90.00/for 1.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/bchips.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Banana Chips</b><br/>
				<div class="item-select">
					Price : $80.00/for 1.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/pnut.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Peanuts</b><br/>
				<div class="item-select">
					Price : $120.00/for 1.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/lays.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Lays Potato Chips</b><br/>
				<div class="item-select">
					Price : $90.00/for 1.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/pri.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Pringles Potato Chips</b><br/>
				<div class="item-select">
					Price : $350.00/for 1.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>1 </option>
					<option>2 </option>
					<option>3 </option>
					<option>4</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
<!--Snacks Page Ends-->	

<!--Wine Page Begins-->	

	<div class="deals-container" id="wine">
			<div class="parallax">
				<div class="title">WINE</div>
			</div>
			<div class="items">
			<div class="images">
				<img src="./res/redwine.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Red Wine</b><br/>
				<div class="item-select">
					Price : $3000.00/per bottle.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>1 </option>
					<option>2 </option>
					<option>3 </option>
					<option>4</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/pmoscato.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Beachfront Californian Pink Moscato</b><br/>
				<div class="item-select">
					Price : $5500.00/per bottle.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>1 </option>
					<option>2 </option>
					<option>3 </option>
					<option>4</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/may.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>May's Sparkling Wine</b><br/>
				<div class="item-select">
					Price : $890.00/per bottle.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>1 </option>
					<option>2 </option>
					<option>3 </option>
					<option>4</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/rum.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Wray & Nephew White Rum</b><br/>
				<div class="item-select">
					Price : $1110.00/per bottle.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>6</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/redl.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Red Label Wine</b><br/>
				<div class="item-select">
					Price : $2000.00/per bottle.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>6</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/baileys.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Bailey's Rum Cream</b><br/>
				<div class="item-select">
					Price : $3500.00/per bottle.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>6</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/appleton.png" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Appleton Estate Rum</b><br/>
				<div class="item-select">
					Price : $2990.00/per bottle.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/tia.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Tia Maria Coffee Liqueur</b><br/>
				<div class="item-select">
					Price : $3667.00/per bottle.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/henne.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Hennesy</b><br/>
				<div class="item-select">
					Price : $9000.00/per bottle.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/yellow.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Yellow Tail Cabernet Sauvignon Wine</b><br/>
				<div class="item-select">
					Price : $4500.00/per bottle.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
			<div class="items">
			<div class="images">
				<img src="./res/stone.jpg" class="item-image-size"/>
			</div>
			<div class="description">
				<b>Stone Ginger Wine</b><br/>
				<div class="item-select">
					Price : $1350.00/per bottle.
				</div>
				<label>Qty:</label>
				<select class="item-select">
					<option>1 </option>
					<option>2 </option>
					<option>3 </option>
					<option>4</option>
				</select><br/>
				<button class="buynow-btn">Buy Now</button>
			</div>
		</div>
	</div>
<!--Wine Ends Here-->
<!--Home Page Ends-->	

<!--Contact Section-->
    <section id="contact">
        <div class="contact container">
            <div class="contact-top">
                <h1 class="section-title">Contact <span>Info</span></h1>
            </div>
            <div class="contact-items">
                <div class="contact-item">
                    <div class="icon"><img src="https://img.icons8.com/bubbles/50/000000/phone.png" /></div>
                    <div class="contact-info">
                        <h1>Phone</h1>
                        <h2>+1 876 555 1234</h2>
                        <h2>+1 876 555 4321</h2>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="icon"><img src="https://img.icons8.com/nolan/64/email.png" /></div>
                    <div class="contact-info">
                        <h1>Email</h1>
                        <h2>OnTheLimb@ncu.edu.jm</h2>

                    </div>
                </div>
                <div class="contact-item">
                    <div class="icon"><img src="https://img.icons8.com/bubbles/50/000000/address.png" /></div>
                    <div class="contact-info">
                        <h1>Address</h1>
                        <h2>Manchester Rd, Mandeville,</h2>
                        <h2>Manchester</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End of Contact Section-->
<!--Footer Starts Here-->
	<div class="parallax1">
		<div class="footer">
			<div class="quick-links">
				<div>Locations</div>
				<ul>
					<li><a href="" class="a-links">Address 1</a></li>
					<li><a href="" class="a-links">Address 2</a></li>
					<li><a href="" class="a-links">Address 3</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="quick-links">
					<div>Careers</div>
					<ul>
						<li><a href="" class="a-links">Packing Staff</a></li>
						<li><a href="" class="a-links">Delivery Agents</a></li>
						<li><a href="" class="a-links">Shelf Fillers</a></li>
					</ul>
				</div>
	<div class="quick-links">
				<div>Quick Links</div>
				<ul>
					<li><a href="./contact.php" class="a-links">Contact Us</a></li>
					<li><a href="./myaccount.php" class="a-links">Log Out</a></li>
				</ul>
			</div>
		</div>
		</div>
		<div class="copyrights">
			<i class="far fa-copyright fa-lx"></i>2021 By Group 1
		</div>
<!--Footer Ends Here-->

          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
     </body>
</html>