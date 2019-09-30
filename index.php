<?php
include("includes/db.php");
include("functions/functions.php");
?>


<!DOCTYPE html>
<html>
<head>
	<title>E COMMERCE STORE</title>
<!-- Bootstrap library -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<link rel="stylesheet" href="styles/style.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
	<div id="top">  <!--Starting Top Bar-->
		<div class="container">

			<div class="col-md-6 offer">
				<a href="a" class="btn btn-success btn-sm">
					Welcome Guest
				</a>	

				<a href="a">Shopping Cart Total Price: INR 100, Total Items 2</a>
			</div>

			<div class="col-md-6">
				<ul class="menu">
					<li>
						<a href="customer_registration.php">Register</a>
					</li>
					<li>
						<a href="customer/my_account.php">My Account</a>
					</li>
					<li>
						<a href="cart.php">Goto Cart</a>
					</li>
					<li>
						<a href="login.php">Login</a>
					</li>
				</ul>
				
			</div>
		</div>
	</div>

    <!-- SECOND TOP BAR START -->
	<div class="navbar navbar-default" id="navbar">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand home" href="index.php">
					<img src="images/small.png" alt="GOCART" class="hidden-xs">
					<img src="images/small.png" alt="GOCART" class="visible-xs">
				</a>

				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
					<span class="sr-only">Toggel Navigation</span>
					<i class="fa fa-align-justify"></i>
				</button>

				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
					<span class="sr-only"></span>
					<i class="fa fa-search"></i>
				</button>

			</div>

			<div class="navbar-collapse collapse" id="navigation"> <!--navbar-collapse-collapse-->
				<div class="padding-nav">  <!-- padding-nav start-->
					<ul class="nav navbar-nav navbar-left">
						<li class="active">
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="shop.php">Shop</a>
						</li>
						<li>
							<a href="customer/my_account.php">My Account</a>
						</li>
						<li>
							<a href="cart.php">Shopping Cart</a>
						</li>
						<li>
							<a href="about.php">About Us</a>
						</li>
						<li>
							<a href="services.php">Services</a>
						</li>
						<li>
							<a href="contactus.php">Contact Us</a>
						</li>  
					</ul>
				</div>     <!-- padding-nav end-->

				<a href="cart.php" class="btn btn-primary navbar-btn right">
					<i class="fa fa-shopping-cart"></i>
					<span>4 Items In Cart</span>
				</a>

				<div class="navbar-collapse collapse right">
					<button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
						<span class=sr-only>Toggle Search</span>
						<i class="fa fa-search"></i>
					</button>
				</div>
				<div class="collapse clearfix" id="search">
					<form class="navbar-form" method="get" action="result.php">
						<div class="input-group">
							<input type="text" name="user_query" placeholder="Search" class="form-control" required="">
							<span class="input-group-btn">
							<button type="submit" value="Search" name="search" class="btn btn-primary">
								<i class="fa fa-search"></i>
							</button>
						</span>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- SECOND TOP BAR END -->

	<!-- SLIDER START-->
	<div class="container" id="slider"> <!-- Container Start -->
		<div class="col-md-12"> <!-- col-md-12 start -->
			<div class="carousel slide" id="myCarousel" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="myCarousel" data-slide-to="1"></li>
					<li data-target="myCarousel" data-slide-to="2"></li>
					<li data-target="myCarousel" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner">
					<?php
						$get_slider= "select * from slider LIMIT 0,1";
						$run_slider= mysqli_query($con,$get_slider);
						while ($row=mysqli_fetch_array($run_slider)){
							$slider_name=$row['slider_name'];
							$slider_image=$row['slider_image'];
							echo "<div class='item active'>
							<img src='admin_area/slider_images/$slider_image'>
							</div>
							";
						}
					?>

					<?php
						$get_slider= "select * from slider LIMIT 1,3";
						$run_slider= mysqli_query($con,$get_slider);
						while ($row=mysqli_fetch_array($run_slider)){
							$slider_name=$row['slider_name'];
							$slider_image=$row['slider_image'];
							echo "<div class='item'>
							<img src='admin_area/slider_images/$slider_image'>
							</div>
							";
						}
					?>



				</div>
				<a href="#myCarousel" class="left carousel-control" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a href="#myCarousel" class="right carousel-control" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div> <!-- col-md-12 end -->
	</div> <!-- COntainer Start -->
	<!-- SLIDER END-->

	<div id="advantage">    <!-- 3 BOXES -->
		<div class="container">
			<div class="same-height-row">
				<div class="col-sm-4">
					<div class="box same-height">
						<div class="icon">
							<i class="fa fa-heart"></i>
						</div>
						<h3><a href="#" class="z">BEST PRICES</a></h3>
						<p>You can check on all others sites about the prices and that comapre with us.</p>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="box same-height">
						<div class="icon">
							<i class="fa fa-heart"></i>
						</div>
						<h3><a href="#" class="z">100% SATISFACTION GUARANTEED FROM US</a></h3>
						<p>Free returns on everything for 3 months.</p>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="box same-height">
						<div class="icon">
							<i class="fa fa-heart"></i>
						</div>
						<h3><a href="#" class="z">WE LOVE OUR CUSTOMERS</a></h3>
						<p>We are known to prived best services ever.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- 3 BOXES -->



	<!-- HOT BOX-->
	<div id="hot">
		<div class="box">
			<div class="container">
				<div class="col-md-12">
					<h2>Latest This Week</h2>
				</div>
			</div>
		</div>
	</div>
	<!-- HOT BOX-->


	<!-- PRODUCT START -->
	<div id="content" class="container">
		<div class="row">
			<!--<div class="col-sm-4 col-md-4 single column">
				<div class="product">
					<a href="details.php">
						<img src="admin_area/product_images/product.jpg" class="img-responsive">
					</a>
					<div class="text">
						<h3><a href="details.php">Benetton White Polo Shirt</a></h3>
						<p class="price"> INR 299</p>
						<p class="buttons">
							<a href="details.php" class="btn btn-default">View Details</a>
							<a href="details.php" class="btn btn-primary">
								<i class="fa fa-shopping-cart"></i> Add To Cart
							</a>
						</p>
					</div>
				</div>
			</div>

			<div class="col-sm-4 col-md-4 single column">
				<div class="product">
					<a href="details.php">
						<img src="admin_area/product_images/product1.jpg" class="img-responsive">
					</a>
					<div class="text">
						<h3><a href="details.php">U.S. Polo T-shirt</a></h3>
						<p class="price"> INR 299</p>
						<p class="buttons">
							<a href="details.php" class="btn btn-default">View Details</a>
							<a href="details.php" class="btn btn-primary">
								<i class="fa fa-shopping-cart"></i> Add To Cart
							</a>
						</p>
					</div>
				</div>
			</div>

			<div class="col-sm-4 col-md-4 single column">
				<div class="product">
					<a href="details.php">
						<img src="admin_area/product_images/product2.jpg" class="img-responsive">
					</a>
					<div class="text">
						<h3><a href="details.php">Levis Black T-shirt</a></h3>
						<p class="price"> INR 299</p>
						<p class="buttons">
							<a href="details.php" class="btn btn-default">View Details</a>
							<a href="details.php" class="btn btn-primary">
								<i class="fa fa-shopping-cart"></i> Add To Cart
							</a>
						</p>
					</div>
				</div>
			</div>

			<div class="col-sm-4 col-md-4 single column">
				<div class="product">
					<a href="details.php">
						<img src="admin_area/product_images/product3.jpg" class="img-responsive">
					</a>
					<div class="text">
						<h3><a href="details.php">Red Tape Jacket</a></h3>
						<p class="price"> INR 1299</p>
						<p class="buttons">
							<a href="details.php" class="btn btn-default">View Details</a>
							<a href="details.php" class="btn btn-primary">
								<i class="fa fa-shopping-cart"></i> Add To Cart
							</a>
						</p>
					</div>
				</div>
			</div>

			<div class="col-sm-4 col-md-4 single column">
				<div class="product">
					<a href="details.php">
						<img src="admin_area/product_images/product2.jpg" class="img-responsive">
					</a>
					<div class="text">
						<h3><a href="details.php">Levis Black T-shirt</a></h3>
						<p class="price"> INR 299</p>
						<p class="buttons">
							<a href="details.php" class="btn btn-default">View Details</a>
							<a href="details.php" class="btn btn-primary">
								<i class="fa fa-shopping-cart"></i> Add To Cart
							</a>
						</p>
					</div>
				</div>
			</div>

			<div class="col-sm-4 col-md-4 single column">
				<div class="product">
					<a href="details.php">
						<img src="admin_area/product_images/product2.jpg" class="img-responsive">
					</a>
					<div class="text">
						<h3><a href="details.php">Levis Black T-shirt</a></h3>
						<p class="price"> INR 299</p>
						<p class="buttons">
							<a href="details.php" class="btn btn-default">View Details</a>
							<a href="details.php" class="btn btn-primary">
								<i class="fa fa-shopping-cart"></i> Add To Cart
							</a>
						</p>
					</div>
				</div>
			</div>

			<div class="col-sm-4 col-md-4 single column">
				<div class="product">
					<a href="details.php">
						<img src="admin_area/product_images/product2.jpg" class="img-responsive">
					</a>
					<div class="text">
						<h3><a href="details.php">Levis Black T-shirt</a></h3>
						<p class="price"> INR 299</p>
						<p class="buttons">
							<a href="details.php" class="btn btn-default">View Details</a>
							<a href="details.php" class="btn btn-primary">
								<i class="fa fa-shopping-cart"></i> Add To Cart
							</a>
						</p>
					</div>
				</div>
			</div>

			<div class="col-sm-4 col-md-4 single column">
				<div class="product">
					<a href="details.php">
						<img src="admin_area/product_images/product2.jpg" class="img-responsive">
					</a>
					<div class="text">
						<h3><a href="details.php">Levis Black T-shirt</a></h3>
						<p class="price"> INR 299</p>
						<p class="buttons">
							<a href="details.php" class="btn btn-default">View Details</a>
							<a href="details.php" class="btn btn-primary">
								<i class="fa fa-shopping-cart"></i> Add To Cart
							</a>
						</p>
					</div>
				</div>
			</div>-->

			<?php
				getPro();
			?>
		</div>
	</div>



<!-- FOOTER START-->
	<?php
	include("includes/footer.php");
	?>
<!-- FOOTER END-->



<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>