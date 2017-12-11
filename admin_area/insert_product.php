<?php

include("../includes/db.php")

?>

<html>
<head>
	<title>Insert Products</title>

	<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
	<script>tinymce.init({ selector:'textarea' });</script>

	<style>
		td{text-align: center;}
	</style>

</head>
<body>

	<form action="insert_product.php" method="post" enctype="multipart/form-data"  >

		<table align="center" width="750" border="2" border-style="solid">

			<tr align="center">
				<td colspan="6"><h2>Insert New Product</h2></td>
			</tr>

			<tr>
				<td>Product Name</td>
				<td><input type="text" name="product_name" required></td>
			</tr>

			<tr>
				<td>Product Category</td>
				<td>
					<select name="product_category" required>
						<option>Select Category</option>
						<?php
						$get_cats = "select * from category";
	
						$run_cats = mysqli_query($conn, $get_cats);
	
						while ($row_cats=mysqli_fetch_array($run_cats)){
	
						$cat_id = $row_cats['cat_id']; 
						$cat_name = $row_cats['cat_name'];
	
						echo "<option value='$cat_id'>$cat_name</a></option>";	
						}
					?>						
					</select>
				</td>
			</tr>

			<tr>
				<td>Product Segment</td>
				<td>
					<select name="product_segment" required>
						<option>Select Segment</option>
						<?php
						$get_segment = "select * from segment";
	
						$run_segment = mysqli_query($conn, $get_segment);
	
						while ($row_segment=mysqli_fetch_array($run_segment)){
	
						$segment_id = $row_segment['segment_id']; 
						$segment_name = $row_segment['segment_name'];
	
						echo "<option value='$segment_id'>$segment_name</a></option>";
	
						}
						?>
						
					</select>

				</td>
			</tr>
			
			<!-- <tr>
				<td>Product Brand</td>
				<td><input type="text" name="product_brand" required></td>
			</tr>
			 -->
			<tr>
				<td>Product Description</td>
				<td><textarea type="text" name="product_description" cols="30" rows="10"></textarea>
			</tr>
			
			<tr>
				<td>Product Price</td>
				<td><input type="text" name="product_price" required></td>
			</tr>
			
			<tr>
				<td>Product Model</td>
				<td><input type="text" name="product_model"></td>
			</tr>
			
			<tr>/
				<td>Product Image</td>
				<td><input type="file" name="product_image"></td>
			</tr>
			
			<tr>
				<td>Product Discount</td>
				<td><input type="text" name="product_discount"></td>
			</tr>

			<tr>
				<td>Product Quantity</td>
				<td><input type="text" name="product_quantity" required></td>
			</tr>

			<tr>
				<td>Product Keywords</td>
				<td><input type="text" name="product_keywords"></td>
			</tr>
			
			<tr align="center">
				<td colspan="8"><input type="submit" name="insert_product" value="INSERT PRODUCT"></td>
			</tr>



		</table>

	</form>


</body>
</html>

<?php

	if (isset($_POST['insert_product'])) {

        // getting text data
		$product_name = $_POST['product_name'];
		$product_category = $_POST['product_category'];
		$product_segment = $_POST['product_segment'];
		// $product_brand = $_POST['product_brand'];
		$product_description = $_POST['product_description'];
		$product_price = $_POST['product_price'];
		$product_model = $_POST['product_model'];
		$product_discount = $_POST['product_discount'];
		$product_quantity = $_POST['product_quantity'];
		$product_keywords = $_POST['product_keywords'];


		// getting images
		$product_image = $_FILES['product_image'] ['name'];
		$product_image_tmp = $_FILES['product_image']['tmp_name'];
		
		move_uploaded_file($product_image_tmp,"product_images/$product_image" );

		$insert_product = " INSERT INTO product (product_name,product_description, product_price, product_model, product_discount, product_segment, product_quantity, product_category, product_keywords,product_image) value('$product_name','$product_description','$product_price','$product_model','$product_discount','$product_segment','$product_quantity','$product_category','$product_keywords','$product_image')";

		$insert_pro = mysqli_query($conn, $insert_product);

		if ($insert_pro) {
			echo "<script>alert(Product has been inserted)</script>";
			echo "<script>window.open('insert_product.php','_self')</script>";
		}

		else{
			die('Product not inserted: ' .mysql_error());
		}


	}



?>