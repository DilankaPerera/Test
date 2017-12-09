<?php

include('includes/db.php');

?>


<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Gzone Technologies</title>


	<link rel="stylesheet" type="text/css" href="styles/style.css" media="all"/>
	<link href="css/font-awesome.css" rel="stylesheet">

</head>
<body>

	<!-- header -->
	<?php include_once('Templates/header.php'); ?>

	<!-- content -->

	<div class="main_content">

		<!-- sidebar -->
		<?php include_once('Templates/navigation_bar.php'); ?>

		<div class="right_content">
			<div id="product_box">

			<?php

			if (isset($_GET['product_id'] )) {


				$prod_id = $_GET['product_id'];
			
				$get_product = "SELECT * FROM product,category,segment WHERE product.segment_id = segment.segment_id AND product.category_id = category.cat_id WHERE product_id='$prod_id' " ; 

				$run_product = mysqli_query($conn, $get_product);



				while ($row_product=mysqli_fetch_array($run_product)) {	

					$product_id = $row_product['product_id'];
					$product_name = $row_product['product_name'];
					$product_price = $row_product['product_price'];
					$product_image = $row_product['product_image'];
					$product_segment = $row_product['segment_name'];
					$product_category= $row_product['cat_name'];
					$product_description = $row_product['product_description'];
					// $product_brand = $row_product['product_brand'];	

					echo "

						<div id='single_product'>

							<h4>$product_name</h4>

							<img src='admin_area/product_images/$product_image' width='100' height='100' />

							<p><b> Price: $product_price </b></p>

							<p> $product_description</p>

							<a href='index.php' style='float:left;' >Go Back</a>
							
							<a href='index.php?product_id=$product_id'><button style='float:right'>Add to Cart</button></a>

						</div>

			";	
	}

			}
			
			?>


		</div>
		



		</div>

	</div>


	<!-- footer -->
	<?php include_once('Templates/footer.php'); ?>
	

</body>
</html>

