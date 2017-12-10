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


<!--Top header-->
<div class="header-top">
	<div class="topword">
		<ul>

			<li><a href="#"> Be a Customer  </a></li>
			<li><a href="#"> Be an Agent </a></li>

            <?php
            if(isset($_SESSION['SESS_LOGGEDIN']) == TRUE){
                echo "Logged in as <strong>" . $_SESSION['SESS_USERNAME']. "</strong>[<a href='logout.php'>logout</a>]";
    }

            else {
                echo "<li><a href='../login.php'>Login</a></li>";
            }
?>

		</ul>	
	</div>
	<div class="view-cart-main">
		<a href="view_cart.php"><button class="view-cart" title="View Cart"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button></a>

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