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
						<li  class="active">
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


<div id="content">

	<div class="container"> <!-- container start -->
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="home.php">Home</a></li>
				<li>Registration</li>
			</ul>
		</div>

		<div class="col-md-3">
			<?php
			include("includes/sidebar.php");
			?>
		</div>


		<div class="col-md-9">
			<div class="box">
				<div class="box-header">
					<center>
						<h2>Customer Registration</h2>
					</center>
				</div>
				<form action="customer_registration.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Customer Name</label>
						<input type="text" name="name" required="" class="form-control">
					</div>
					<div class="form-group">
						<label>Customer Password</label>
						<input type="password" name="c_password" class="form-control" required="">
					</div>
					<div class="form-group">
						<label>Country</label>
						<input type="text" name="c_country" class="form-control" required="">
					</div>
					<div class="form-group">
						<label>City</label>
						<input type="text" name="c_city" class="form-control" required="">
					</div>
					<div class="form-group">
						<label>Contact Number</label>
						<input type="text" name="c_number" class="form-control" required="">
					</div>
					<div class="form-group">
						<label>Address</label>
						<input type="text" name="c_address" class="form-control" required="">
					</div>
					<div class="form-group">
						<label>Image</label>
						<input type="file" name="c_image" class="form-control" required="">
					</div>
					<div class="text-center">
						<button type="submit" name="submit" class="btn btn-primary">
							<i class="fa fa-user-md"></i> Register
						</button>
					</div>
				</form>
			</div>
		</div>






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