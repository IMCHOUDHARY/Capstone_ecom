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
						<li>
							<a href="index.php">Home</a>
						</li>
						<li  class="active">
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


<div id="content">

	<div class="container"> <!-- container start -->
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="home.php">Home</a></li>
				<li>Shop</li>
			</ul>
		</div>

		<div class="col-md-3">
			<?php
			include("includes/sidebar.php");
			?>
		</div>

		<!-- SHOP -->
		<div class="col-md-9">
			<div class="box">
				<h1>Shop</h1>
				<p>This theme is created by Ankit Choudhary</p>
			</div>

			<div class="row">    <!-- ROW START -->
				<div class="col-md-4 col-sm-6 center responsive">
					<div class="product">
						<a href="details.php">
							<img src="admin_area/product_images/product2.jpg" class="img-responsive">
						</a>
						<div class="text">
							<h3>
								<a href="details.php">Levis Black T-Shirt</a>
							</h3>
							<p class="price">INR 500</p>
							<p class="buttons">
								<a href="details.php" class="btn btn-default">View Details</a>
								<a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add To Cart</a>
							</p>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 center responsive">
					<div class="product">
						<a href="details.php">
							<img src="admin_area/product_images/product2.jpg" class="img-responsive">
						</a>
						<div class="text">
							<h3>
								<a href="details.php">Levis Black T-Shirt</a>
							</h3>
							<p class="price">INR 500</p>
							<p class="buttons">
								<a href="details.php" class="btn btn-default">View Details</a>
								<a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add To Cart</a>
							</p>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 center responsive">
					<div class="product">
						<a href="details.php">
							<img src="admin_area/product_images/product2.jpg" class="img-responsive">
						</a>
						<div class="text">
							<h3>
								<a href="details.php">Levis Black T-Shirt</a>
							</h3>
							<p class="price">INR 500</p>
							<p class="buttons">
								<a href="details.php" class="btn btn-default">View Details</a>
								<a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add To Cart</a>
							</p>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 center responsive">
					<div class="product">
						<a href="details.php">
							<img src="admin_area/product_images/product2.jpg" class="img-responsive">
						</a>
						<div class="text">
							<h3>
								<a href="details.php">Levis Black T-Shirt</a>
							</h3>
							<p class="price">INR 500</p>
							<p class="buttons">
								<a href="details.php" class="btn btn-default">View Details</a>
								<a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add To Cart</a>
							</p>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 center responsive">
					<div class="product">
						<a href="details.php">
							<img src="admin_area/product_images/product2.jpg" class="img-responsive">
						</a>
						<div class="text">
							<h3>
								<a href="details.php">Levis Black T-Shirt</a>
							</h3>
							<p class="price">INR 500</p>
							<p class="buttons">
								<a href="details.php" class="btn btn-default">View Details</a>
								<a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add To Cart</a>
							</p>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 center responsive">
					<div class="product">
						<a href="details.php">
							<img src="admin_area/product_images/product2.jpg" class="img-responsive">
						</a>
						<div class="text">
							<h3>
								<a href="details.php">Levis Black T-Shirt</a>
							</h3>
							<p class="price">INR 500</p>
							<p class="buttons">
								<a href="details.php" class="btn btn-default">View Details</a>
								<a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add To Cart</a>
							</p>
						</div>
					</div>
				</div>
			</div>       <!-- ROW END -->

			<center>
				<ul class="pagination">
					<li><a href="shop.php">First Page</a></li>
					<li><a href="shop.php">2</a></li>
					<li><a href="shop.php">3</a></li>
					<li><a href="shop.php">4</a></li>
					<li><a href="shop.php">5</a></li>
					<li><a href="shop.php">Last Page</a></li>
				</ul>
			</center>
		</div>
		<!-- SHOP -->

	</div>			<!-- container end -->

</div>





<!-- FOOTER START-->
	<?php
	include("includes/footer.php");
	?>
<!-- FOOTER END-->



<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>