<?php

$conn = mysqli_connect($hostname, $username, $password, $database);

getting the segments

function get_segment(){

	global $conn;
	
	$get_segment = "select * from segment";
	
	$run_segment= mysqli_query($con, $get_segment);
	
	while ($row_segment=mysqli_fetch_array($run_segment)){
	
		$segment_id = $row_segment['segment_id']; 
		$segment_name = $row_cats['segment_name'];
	
	echo "<li><a href='index.php?segment='$segment_id'>$segment_name</a></li>";
	
	}
}













// getting products from tables by segment

function getSegProduct(){

	if (!isset($_GET['segment'])) {

	global $conn;

	$get_seg_product = "select * from product where product_segment='$segment_id'";

	$run_seg_product = mysqli_query($conn, $get_seg_product);

	$count_seg_product = mysqli_num_rows($run_seg_product);

	

	while ($row_seg_product=mysqli_fetch_array($run_seg_product)) {
		
		$product_id = $row_seg_product['product_id'];
		$product_name = $row_seg_product['product_name'];
		$product_price = $row_seg_product['product_price'];
		$product_image = $row_seg_product['product_image'];
		$product_segment = $row_seg_product['product_segment'];
		$product_category= $row_seg_product['product_category'];
		$product_brand = $row_seg_product['product_brand'];


		if ($count_seg_product==0) {

		echo "<h2>There is no product in this segment</h2>";
		
		}

		else{

		echo "

		<div id='single_product'>
			<h3>$product_name<h3>
			<img src='admin_area/product_images/$product_image' width='180' height='180'>
			<p> $product_price </p>

			<a href='single.php?product_id=$product_id'>Details</a>   
			<a href='index.php?product_id=$product_id'><button style='float:right'>Add to Cart></a>

		</div>

		";
		}
	}
	}
}


//getting segments














?>