<?php

include('functions/functions.php');
include('includes/db.php');
include ('functions/cartfunctions.php');


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
		<?php //include_once('Templates/navigation_bar.php'); ?>

			<!-- <div class="right_content">
			
			</div> -->

		<div class="slideshow">
			<div class="slideshow-container">

					<div class="mySlides fade">
					  <img src="images/s1.jpg" style="width:100%">
					</div>

					<div class="mySlides fade">
					  <img src="images/s2.jpg" style="width:100%">
					</div>

					<div class="mySlides fade">					 
					  <img src="images/s3.jpg" style="width:100%">					 
					</div>

					</div>
					<br>

					<div style="text-align:center">
					  <span class="dot"></span> 
					  <span class="dot"></span> 
					  <span class="dot"></span> 
					</div>

					<script>
					var slideIndex = 0;
					showSlides();

					function showSlides() {
					    var i;
					    var slides = document.getElementsByClassName("mySlides");
					    var dots = document.getElementsByClassName("dot");
					    for (i = 0; i < slides.length; i++) {
					       slides[i].style.display = "none";  
					    }
					    slideIndex++;
					    if (slideIndex > slides.length) {slideIndex = 1}    
					    for (i = 0; i < dots.length; i++) {
					        dots[i].className = dots[i].className.replace(" active", "");
					    }
					    slides[slideIndex-1].style.display = "block";  
					    dots[slideIndex-1].className += " active";
					    setTimeout(showSlides, 3000); // Change image every 2 seconds
					}
					</script>	
			
			</div>


		<div class="product_box1">

			<?php getProduct(); ?>
			

		</div>
		<div class="product_box1">

			<?php getProduct(); ?>
			

		</div>
		</div>



		


	</div>


	<!-- footer -->
	<?php include_once('Templates/footer.php'); ?>


</body>
</html>
