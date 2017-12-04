<!DOCTYPE html>
<html>
<head>
<title>GZone Technologies</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- //for-mobile-apps -->
<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="assets/css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
<!-- js -->
<script src="assets/js/jquery-1.11.1.min.js"></script>
<!-- //js -->

</head>
	
<body>
<!-- header -->


<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Register Page</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->

<!-- register form -->
<?php include_once('header.php'); ?>
	<div class="register">
		<div class="container">
			<h2>Register Here</h2>
			<div class="login-form-grids">
				<h5>profile information</h5>
				<form action="#" method="post">
					<input type="text" placeholder="First Name" required=" " >
					<input type="text" placeholder="Middle Name" required=" " >
					<input type="text" placeholder="Last Name" required=" " >
					<br>
					<input type="text" placeholder="Phone Number" required=" " >
					<br>
					<input type="text" placeholder="Address" required=" " >
				</form>
				<h6>Login information</h6>
					<form action="#" method="post">
					<input type="email" placeholder="Email Address" required=" " >
					<input type="password" placeholder="Password" required=" " >
					<input type="password" placeholder="Password Confirmation" required=" " >
					<div class="register-check-box">
						<div class="check">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>I accept the terms and conditions</label>
						</div>
					</div>
					<input type="submit" value="Register">
				</form>
			</div>
			<div class="register-home">
				<a href="index.php">Home</a>
			</div>
		</div>
	</div>
<!-- //register -->

<!-- //footer -->
<?php include_once('footer.php'); ?>

<!-- Bootstrap Core JavaScript -->
<!-- <script src="js/bootstrap.min.js"></script> -->
<!-- top-header and slider -->

<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->

<!-- <script src="js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script> -->

</body>
</html>
