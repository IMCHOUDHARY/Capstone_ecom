<!--<div class="panel panel-default sidebar-menu">
	<div class="panel-heading">
		<h3 class="panel-title">Product Categories</h3>
	</div>

	<div class="panel-body">
		<ul class="nav nav-pills nav-stacked category-menu">
			<li><a href="shop.php">Jackets</a></li>
			<li><a href="shop.php">Accessories</a></li>
			<li><a href="shop.php">Shoes</a></li>
			<li><a href="shop.php">Coats</a></li>
			<li><a href="shop.php">T-Shirts</a></li>
		</ul>
	</div>	
</div>



<div class="panel panel-default sidebar-menu">
	<div class="panel-heading">
		<h3 class="panel-title">Categories</h3>
	</div>



	<div class="panel-body">
		<ul class="nav nav-pills nav-stacked category-menu">
			<li><a href="shop.php">Men</a></li>
			<li><a href="shop.php">Women</a></li>
			<li><a href="shop.php">Kids</a></li>
			<li><a href="shop.php">Others</a></li>
		</ul>
	</div>	
</div>-->


<div class="panel panel-default sidebar-menu">
	<div class="panel-heading">
		<center>
			<img src="customer_images/ankit.jpg" class="img-responsive">
		</center>
		<br>
		<h3 align="center" class="panel-title">Name: Ankit Choudhary</h3>
	</div>
	<div class="panel-body">
		<ul class="nav nav-pills nav-stacked">
			<li class="<?php if(isset($_GET[my_order])){echo "active";}?>">
				<a href="my_account.php?my_order">
				<i class="fa fa-list"></i> My Order
				</a>
			</li>
			<li class="<?php if(isset($_GET[pay_offline])){echo "active";}?>">
				<a href="my_account.php?pay_offline">
					<i class="fa fa-bolt"></i> Pay Offline
				</a>
			</li>
			<!--<li class="<?php if(isset($_GET[my_address])){echo "active";}?>">
				<a href="my_account.php?my_address">
					<i class="fa fa-user"></i> My Address
				</a>
			</li>-->
			<li class="<?php if(isset($_GET[edit_account])){echo "active";}?>">
				<a href="my_account.php?edit_account">
					<i class="fa fa-pencil"></i> Edit Account
				</a>
			</li>
			<li class="<?php if(isset($_GET[change_pass])){echo "active";}?>">
				<a href="my_account.php?change_pass">
					<i class="fa fa-user"></i> Change Password
				</a>
			</li>
			<li class="<?php if(isset($_GET[delete_ac])){echo "active";}?>">
				<a href="my_account.php?delete_ac">
					<i class="fa fa-trash"></i> Delete Account
				</a>
			</li>
			<li class="<?php if(isset($_GET[logout])){echo "active";}?>">
				<a href="my_account.php?my_wishlist">
					<i class="fa fa-sign-out"></i> Logout
				</a>
			</li>
		</ul>
	</div>
</div>