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
						<li>
							<a href="shop.php">Shop</a>
						</li>
						<li>
							<a href="customer/my_account.php">My Account</a>
						</li>
						<li  class="active">
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
				<li>Cart</li>
			</ul>
		</div>

		<div class="col-md-9" id="cart">
			<div class="box">
				<form action="cart.php" method="post" enctype="multipart-form-data">
					<h1>Shopping Cart</h1>
					<p class="text-muted">Currently you have 3 item(s) in your cart</p>
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th colspan="2">Product</th>
									<th>Quantity</th>
									<th>Unit Price</th>
									<th>Size</th>
									<th colspan="1">Delete</th>
									<th colspan="1">Sub Total</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><img src="admin_area/product_images/product2.jpg"></td>
									<td>Levis Black T-Shirt</td>
									<td>2</td>
									<td>INR 199</td>
									<td>Large</td>
									<td><input type="checkbox" name="remove[]"></td>
									<td>INR 398</td>
								</tr>

								<tr>
									<td><img src="admin_area/product_images/product2.jpg"></td>
									<td>Levis Black T-Shirt</td>
									<td>2</td>
									<td>INR 499</td>
									<td>Large</td>
									<td><input type="checkbox" name="remove[]"></td>
									<td>INR 998</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<th colspan="5">Total</th>
									<th colspan="2">INR 398</th>
								</tr>
							</tfoot>
						</table>
					</div>

					<div class="box-footer">
						<div class="pull-left">
							<a href="index.php" class="btn btn-default">
								<i class="fa fa-chevron-left"></i> Continue Shopping
							</a>
						</div>
						<div class="pull-right">
							<button class="btn btn-default" type="submit" name="update" value="Update Cart">
								<i class="fa fa-refresh"> Update Cart</i>
							</button>
							<a href="checkout.php" class="btn btn-primary">
								Proceed to checkout<i class="fa fa-chevron-right"></i> 
							</a>
						</div>
					</div>
				</form>
			</div>

			<div id="row same-height-row">
			<div class="col-md-3 col-sm-6">
				<div class="box same-height headline">
					<h3 class="text-center">You also like these Products</h3>
				</div>
			</div>

			<div class="center-responsive col-md-3">
				<div class="product same-height">
					<a href="">
						<img src="admin_area/product_images/product2.jpg" class="img-responsive">
					</a>
					<div class="text">
						<h3><a href="details.php">Levis Black T-Shirt</a></h3>
						<p class="price">INR 299</p>
					</div>
				</div>
			</div>

			<div class="center-responsive col-md-3">
				<div class="product same-height">
					<a href="">
						<img src="admin_area/product_images/product2.jpg" class="img-responsive">
					</a>
					<div class="text">
						<h3><a href="details.php">Levis Black T-Shirt</a></h3>
						<p class="price">INR 299</p>
					</div>
				</div>
			</div>

			<div class="center-responsive col-md-3">
				<div class="product same-height">
					<a href="">
						<img src="admin_area/product_images/product2.jpg" class="img-responsive">
					</a>
					<div class="text">
						<h3><a href="details.php">Levis Black T-Shirt</a></h3>
						<p class="price">INR 299</p>
					</div>
				</div>
			</div>
		</div>
		</div>



		<!-- ORDER SUMMARY -->
		<div class="col-md-3">
			<div class="box" id="order-summary">
				<div class="box-header">
					<h3>Order Summary</h3>
				</div>
				<p class="text-muted">
					Shipping and additional costs are calculated based on the values you have entered
				</p>
				<div class="table-responsive">
					<table class="table">
						<tbody>
							<tr>
								<td>Order Subtotal</td>
								<th>INR 398</th>
							</tr>
							<tr>
								<td>Shipping and handling</td>
								<td>INR 0</td>
							</tr>
							<tr>
								<td>Tax</td>
								<td>INR 0</td>
							</tr>
							<tr class="Total">
								<td>Total</td>
								<th>INR 398</th>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div> <!-- ORDER SUMMARY -->











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