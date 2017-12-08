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
			
				$get_product = "select * from product where  product_id=''$prod_id'";

				$run_product = mysqli_query($conn, $get_product);

				while ($row_product=mysqli_fetch_array($run_product)) {
		
					$product_id = $row_product['product_id'];
					$product_name = $row_product['product_name'];
					$product_price = $row_product['product_price'];
					$product_image = $row_product['product_image'];
					$product_segment = $row_product['product_segment'];
					$product_category= $row_product['product_category'];
					$product_brand = $row_product['product_brand'];
					$product_descrption = $row_product['product_descrption'];



					echo "

						<div id='single_product'>
							<h3>$product_name<h3>
							<img src='admin_area/product_images/$product_image' width='400' height='300'>
							<p> $product_price </p>
							<p>$product_descrption</p>

							<a href='index.php' style='float:left;'></a>

						  
							<a href='index.php?product_id=$product_id'><button style='float:right'>Add to Cart></a>

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

