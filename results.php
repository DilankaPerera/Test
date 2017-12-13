<?php

include('functions/functions.php');
include('includes/db.php');


?>

<html>
<head>
	<meta charset="UTF-8">
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

			<div class="product_box5">
				<?php

				if (isset($_GET['search'])) {

				$search_query = $_GET['user_query'];


				$get_product = "SELECT * FROM product WHERE product_keywords like '%$search_query%' OR product_name like '%$search_query%' ;" ; 

				// echo "$get_product";

				$run_product = mysqli_query($conn, $get_product);

				// IF(mysql_num_rows($))

					//var_dump($run_product);
					while ($row_product=mysqli_fetch_array($run_product)) {
						// echo "error";

					//var_dump($row_product);

						$product_id = $row_product['product_id'];
						$product_name = $row_product['product_name'];
						$product_price = $row_product['product_price'];
						$product_image = $row_product['product_image'];
						$product_segment = $row_product['segment_id'];
						$product_category= $row_product['category_id'];

						echo "

							<div id='single_product2'>

								<h4>$product_name</h4>

								<img src='admin_area/product_images/$product_image' width='200' height='200' />
								<center><p><b>LKR $product_price </b></p></center>
								
								<center><a href='single.php?product_id=$product_id' style='text-align:center;'>DETAILS</a></center>							

							</div>

						";	
					}
					// echo "error";

				}
	?>

<?php 
//pagination

		

		// if(isset($_GET["page"])){ //Get page number from $_GET["page"]
		// $page_number = filter_var($_GET["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH); //filter number
		// if(!is_numeric($page_number)){die('Invalid page number!');} //incase of invalid page number
		// }else{
		// $page_number = 1; //if there's no page number, set it to 1
		// }


		// $get_product = $mysqli_conn->query("SELECT COUNT(*) FROM product"); //get total number of records from database
		// $get_total_rows = $get_product->fetch_row(); //hold total records in variable

		// $total_pages = ceil($get_total_rows[0]/$item_per_page); //break records into pages

		// ################# Display Records per page ############################
		// $page_position = (($page_number-1) * $item_per_page); //get starting position to fetch the records
		// //Fetch a group of records using SQL LIMIT clause
		// // $get_product = $conn->query("SELECT id, name, message FROM product ORDER BY id ASC LIMIT $page_position, $item_per_page");

		// $get_product = "select * from products";

		// $run_product = mysqli_query(($conn, $get_product) ORDER BY $product_id ASC LIMIT $page_position, $item_per_page;);    //check this

		// 	// if (mysqli_num_rows($run_product) > 0) {

		// 	while ($row_product=mysqli_fetch_array($run_product)) {

		// 		$product_id = $row_product['product_id'];
		// 		$product_name = $row_product['product_name'];
		// 		$product_price = $row_product['product_price'];
		// 		$product_image = $row_product['product_image'];
		// 		$product_segment = $row_product['product_segment'];
		// 		$product_category= $row_product['product_category'];
		// 		// $product_brand = $row_product['product_brand'];

		// 	echo "

		// 		<div id='single_product'>

		// 			<h3>$product_name</h3>

		// 		</div>

		// 		";	
		// 	}


		// //create pagination 
		// echo '<div align="center">';
		// // We call the pagination function here. 
		// echo paginate($item_per_page, $page_number, $get_total_rows[0], $total_pages, $page_url);
		// echo '</div>';

		?>

		</div>


	</div>


	<!-- footer -->
	<?php include_once('Templates/footer.php'); ?>


</body>
</html>
