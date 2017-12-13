<?php

include('functions/functions.php');
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

			<div id="product_box2">

			<?php

			$get_product = "select * from product";

			$run_product = mysqli_query($conn, $get_product);

			

			while ($row_product=mysqli_fetch_array($run_product)) {

				$product_id = $row_product['product_id'];
				$product_name = $row_product['product_name'];
				$product_price = $row_product['product_price'];
				$product_image = $row_product['product_image'];
				$product_segment = $row_product['segment_id'];
				$product_category= $row_product['category_id'];
				// $product_brand = $row_product['product_brand'];

			echo "

				<div id='single_product5'>

					<h4>$product_name</h4>

					<center><img src='admin_area/product_images/$product_image' width='200' height='200' />
					<br>
					<p><b> LKR $product_price </b></p></center>
					
					<center><a href='single.php?product_id=$product_id' >Details</a></center>

				</div>

				";	
			}


		?>


		</div>



		</div>









	</div>


	<!-- footer -->
	<?php include_once('Templates/footer.php'); ?>


</body>
</html>
