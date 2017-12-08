<?php

// include('../includes/db.php');

// getting the segments

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

	if ($count_seg_product==0) {

	echo "<h2>There is no product in this segment</h2>";
		
	}

	while ($row_seg_product=mysqli_fetch_array($run_seg_product)) {
		
		$product_id = $row_seg_product['product_id'];
		$product_name = $row_seg_product['product_name'];
		$product_price = $row_seg_product['product_price'];
		$product_image = $row_seg_product['product_image'];
		$product_segment = $row_seg_product['product_segment'];
		$product_category= $row_seg_product['product_category'];
		$product_brand = $row_seg_product['product_brand'];

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


//getting products

function getProduct(){

	global $conn;

	$get_product = "SELECT * FROM product,category,segment WHERE product.segment_id = segment.segment_id AND product.category_id = category.cat_id order by RAND() LIMIT 0,6 " ; 

	$run_product = mysqli_query($conn, $get_product);

	// if (mysqli_num_rows($run_product) > 0) {

		// var_dump($run_product);
		while ($row_product=mysqli_fetch_array($run_product)) {

				// var_dump($row_product);

			$product_id = $row_product['product_id'];
			$product_name = $row_product['product_name'];
			$product_price = $row_product['product_price'];
			$product_image = $row_product['product_image'];
			$product_segment = $row_product['segment_name'];
			$product_category= $row_product['cat_name'];
			// $product_brand = $row_product['product_brand'];

			echo "

				<div id='single_product'>

					<h4>$product_name</h4>
					<img src='admin_area/product_images/$product_image' width='100' height='100' />





				</div>

			";	
	}


	// }




}


// pagination

function paginate($item_per_page, $current_page, $total_records, $total_pages, $page_url)
{
    $pagination = '';
    if($total_pages > 0 && $total_pages != 1 && $current_page <= $total_pages){ //verify total pages and current page number
        $pagination .= '<ul class="pagination">';
        
        $right_links    = $current_page + 3; 
        $previous       = $current_page - 3; //previous link 
        $next           = $current_page + 1; //next link
        $first_link     = true; //boolean var to decide our first link
        
        if($current_page > 1){
            $previous_link = ($previous==0)?1:$previous;
            $pagination .= '<li class="first"><a href="'.$page_url.'?page=1" title="First">&laquo;</a></li>'; //first link
            $pagination .= '<li><a href="'.$page_url.'?page='.$previous_link.'" title="Previous">&lt;</a></li>'; //previous link
                for($i = ($current_page-2); $i < $current_page; $i++){ //Create left-hand side links
                    if($i > 0){
                        $pagination .= '<li><a href="'.$page_url.'?page='.$i.'">'.$i.'</a></li>';
                    }
                }   
            $first_link = false; //set first link to false
        }
        
        if($first_link){ //if current active page is first link
            $pagination .= '<li class="first active">'.$current_page.'</li>';
        }elseif($current_page == $total_pages){ //if it's the last active link
            $pagination .= '<li class="last active">'.$current_page.'</li>';
        }else{ //regular current link
            $pagination .= '<li class="active">'.$current_page.'</li>';
        }
                
        for($i = $current_page+1; $i < $right_links ; $i++){ //create right-hand side links
            if($i<=$total_pages){
                $pagination .= '<li><a href="'.$page_url.'?page='.$i.'">'.$i.'</a></li>';
            }
        }
        if($current_page < $total_pages){ 
                $next_link = ($i > $total_pages)? $total_pages : $i;
                $pagination .= '<li><a href="'.$page_url.'?page='.$next_link.'" >&gt;</a></li>'; //next link
                $pagination .= '<li class="last"><a href="'.$page_url.'?page='.$total_pages.'" title="Last">&raquo;</a></li>'; //last link
        }
        
        $pagination .= '</ul>'; 
    }
    return $pagination; //return pagination links
}













?>