
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
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->

</head>

<body>

<!-- header -->

<?php include_once('header.php'); ?>

<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Login Page</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->

<!-- login -->
	<div class="login">
		<div class="container">
			<h2>Login Form</h2>
		
			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
				<form>
					<input type="email" placeholder="Email Address" required=" " >
					<input type="password" placeholder="Password" required=" " >
					<div class="forgot">
						<a href="#">Forgot Password?</a>
					</div>
					<input type="submit" value="Login">
				</form>
			</div>
			<h4>For New People</h4>
			<p><a href="registered.php">Register Here</a> (Or) go back to <a href="index.php">Home<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
		</div>
	</div>
<!-- //login -->

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
</script> -->s

</body>
</html>