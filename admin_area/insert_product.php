<?php
include("includes/db.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Insert Product</title>

	<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({selector:'textarea'});</script>

	<!-- Bootstrap library -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<link rel="stylesheet" href="styles/style.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>


	<div class="row">			<!-- BREADCRUMB ROW START -->
		<div class="col-lg-12">
			<div class="breadcrumb">
				<li class="active">
					<i class="fa fa-dashboard"></i>
					Dashboard / Insert Product
				</li>
			</div>
		</div>
	</div>						<!-- BREADCRUMB ROW END -->

	<div class="row">
		<div class="col-lg-3">
			
		</div>
		<div class="col-lg-6">
			<div class="panel panel-default">
				<div class="panel-title">
					<h3>
						<i class="fa fa-money fa-w"></i> Insert Product
					</h3>
				</div>
				<div class="panel-body">
					<form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
						<div class="form-group">
							<label class="col-md-3 control-label">Product Title</label>
							<input type="text" name="product_title" class="form-control" required="">
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label">Product Category</label>
							<select name="product_cat" class="form-control">
								<option>Select a product category</option>
								<?php
									$get_p_cats="select * from product_category";
									$run_p_cats=mysqli_query($con,$get_p_cats);
									while ($row=mysqli_fetch_array($run_p_cats)) {
										$id=$row['p_cat_id'];
										$cat_title=$row['p_cat_title'];
										echo "<option value='$id' > $cat_title </option>";
									}
								?>
							</select>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label">Categories</label>
							<select name="cat" class="form-control">
								<option>Select Categories</option>
								<?php
									$get_cats="select * from categories";
									$run_cats=mysqli_query($con,$get_cats);
									while ($row=mysqli_fetch_array($run_cats)) {
										$id=$row['cat_id'];
										$cat_title=$row['cat_title'];
										echo "<option value='$id' > $cat_title </option>";
									}	
								?>
							</select>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label">Product Image 1</label>
							<input type="file" name="product_img1" class="form-control" required="">
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label">Product Image 2</label>
							<input type="file" name="product_img2" class="form-control" required="">
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label">Product Image 3</label>
							<input type="file" name="product_img3" class="form-control" required="">
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label">Product Price</label>
							<input type="text" name="product_price" class="form-control" required="">
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label">Product Keyword</label>
							<input type="text" name="product_keywords" class="form-control" required="">
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label">Product Description</label>
							<textarea name="product_desc" class="form-control" rows="6" cols="19"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" name="submit" value="Insert Product" class="btn btn-primary form-control">
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-lg-3">
			
		</div>
	</div>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>

<?php
	if(isset($_POST['submit'])){
		$product_title=$_POST['product_title'];
		$product_cat=$_POST['product_cat'];
		$cat=$_POST['cat'];
		$product_price=$_POST['product_price'];
		$product_desc=$_POST['product_desc'];
		$product_keywords=$_POST['product_keywords'];

		$product_img1=$_FILES['product_img1']['name'];
		$product_img2=$_FILES['product_img2']['name'];
		$product_img3=$_FILES['product_img3']['name'];

		$temp_name1=$_FILES['product_img1']['tmp_name'];
		$temp_name2=$_FILES['product_img2']['tmp_name'];
		$temp_name3=$_FILES['product_img3']['tmp_name'];

		move_uploaded_file($temp_name1, "product_images/$product_img1");
		move_uploaded_file($temp_name2, "product_images/$product_img2");
		move_uploaded_file($temp_name3, "product_images/$product_img3");

		$inset_product="insert into products(p_cat_id,cat_id,date,product_title,product_img1,product_img2,product_img3,product_price,product_desc,product_keyword) values       ('$product_cat','$cat',NOW(),'$product_title','$product_img1','$product_img2','$product_img3','$product_price','$product_desc','$product_keywords')";
		$run_product=mysqli_query($con,$inset_product);

		if($run_product){
			echo" <script>alert('Product Inserted Successfully')</script>";
			echo" <script>window.open('insert_product.php')</script>";
		}
	}
?>