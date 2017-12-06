<?php

$conn = mysqli_connect($hostname, $username, $password, $database);

// getting the categories

// function getCats(){

// 	global $conn;
	
// 	$get_cats = "select * from category";
	
// 	$run_cats = mysqli_query($con, $get_cats);
	
// 	while ($row_cats=mysqli_fetch_array($run_cats)){
	
// 		$cat_id = $row_cats['cat_id']; 
// 		$cat_name = $row_cats['cat_title'];
	
// 	echo "<li><a href='#'>$cat_name</a></li>";
	
// 	}
// }













// getting products from tables

function getProduct(){

	global $conn;

	$get_product = "select * from product order by rand() LIMIT 0,6";

	$run_product = mysqli_query($conn, $get_product);

	while ($row_product=mysqli_fetch_array($run_product)) {
		
		$product_id = $row_product['product_id'];
		$product_name = $row_product['product_name'];
		$product_price = $row_product['product_price'];
		$product_image = $row_product['product_image'];
		$product_segment = $row_product['product_segment'];
		$product_category= $row_product['product_category'];
		$product_brand = $row_product['product_brand'];

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








?>