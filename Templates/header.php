<?php
session_start();
if(isset($_SESSION['SESS_CHANGEID']) == TRUE) {
    session_unset();
    session_regenerate_id();
}

$hostname = "localhost";
$username = "root";
$password = "";
$database = "gzone_technologiesdb";
$config_basedir = "index.php";

// Create connection
$conn = mysqli_connect($hostname,$username,$password,$database);

?>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="../styles/style.css" media="all"/>
	<link href="../css/font-awesome.css" rel="stylesheet">
</head>

<body>
<!--Top header-->

<div class="topword">
<div class="hnavbar">

  <div class="hdropdown">
    <button class="hdropbtn">
      <i class="fa fa-user"></i>
    </button>
    <div class="hdropdown-content">
      <a href="#">View Profile</a>
      <a href="#">Delete Profile</a>
      <a href="#">Change Password</a>
    </div>
  </div>


  <a href="view_cart.php"><button class="view-cart" ><i class="fa fa-cart-arrow-down"></i></button></a>
  <a href="#home">Sign up</a>
    <a href="#home">Be an Agent</a>

  <?php
    if(isset($_SESSION['SESS_LOGGEDIN']) == 1){
        echo "Logged in as <strong>" . $_SESSION['SESS_USERNAME']. "</strong>[<a href='logout.php'>logout</a>]";
      }

    else {
        echo "<a href='login.php'>Login</a>";
    }
    ?>
    <!-- <a href="#home">Sign up</a>
    <a href="#home">Be an Agent</a> -->
  </div>
</div>

<!--//Top header-->

<!--Botttom header-->
<div class="header_bottom">
	<div class="container">
		<a href="index.php"><img src="./images/logo.png" id="logo"></a>
			<div class="search_bar">
				<form method="get" action="results.php" enctype="multipart/form-data">
					<input type="search" name="user_query" placeholder="Search..." required="">
					<!-- <input type="submit" name="Search" value="Search"> -->
					<button type="submit" name="search" value="Search" class="btn btn-default search" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"> </i>
					</button>
				</form>
			</div>
	</div>
</div>
<!--//Botttom header-->

<div class="menu">
	
</div>
