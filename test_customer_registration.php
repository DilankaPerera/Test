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
    <form class = "register-form" action = "customer/includes/customer_reg_inc.php" method="POST">
	<div class="reg">
		<div class="container">
			<h2 class="heading_reg">Customer Registration</h2>
			<div class="reg_form_grid">
				<ul>
					<li><label for="uname"> <b> Username <span class="req">*</span></b> </label></li>
			    <li><input type="text" size="50" name="uname" required autocomplete="off"></li>
					<br>
					<li><label for="email"> <b>E-mail</b><span class="req">*</span></label></li>
			    <li><input type="varchar" size="50" name="email" required autocomplete="off"></li>
					<br>
					<li><label for="pwd"> <b>Password </b> <span class="req">*</span></label></li>
			    <li><input type="password" size="50" name="pwd" required autocomplete="off"></li>
					<br>
					<li><label for="repwd"> <b> Re-enter Password </b> <span class="req">*</span></label></li>
			    <li><input type="password" size="50" name="repwd" required autocomplete="off"></li>
				</ul>
				<br>
				<form action="index.php" method="get">
				<input type="submit" name="register" value="Register"></form>
				<br>
				Already have an account?  <a href="login.php"> Sign in </a>
			</div>
		</div>
	</div>
    </form>>
</div>

<!-- footer -->
<?php include_once('Templates/footer.php'); ?>

</body>
</html>
