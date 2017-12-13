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
      <a href="viewdetails.php">View Profile</a>
      <a href="deleteprofile.php">Delete Profile</a>
      <a href="changepassword.php">Change Password</a>
    </div>
  </div>


  <a href="view_cart.php"><button class="view-cart" ><i class="fa fa-cart-arrow-down"></i></button></a>
  <a href="customer_registration">Sign up</a>
    <a href="agent_registration.php">Be an Agent</a>

    <?php if(isset($_SESSION['SESS_LOGGEDIN']) == 1){ ?>
        <a href="logout.php" style='color:white';><?php echo "<text style='color:white;'>".$_SESSION['SESS_USERNAME']."</text>"; ?> (Log out)</a>

    <?php }else{ echo "error"?>
        <a class="link" href="login.php" style='color:white';>Login</a>
    <?php } ?>





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

<!-- <div class="menu"> -->

  <div class="hbnavbar">
	  <a href="index.php">Home</a>
	  <a href="all_product.php">All Products</a>

		<div class="hbdropdown">
	    <button class="hbdropbtn">Mobile & Tablets
	      <i class="fa fa-caret-down"></i>
	    </button>

	    <div class="hbdropdown-content">
	    	<?php
                $query="SELECT * FROM segment WHERE category_cat_id=1";
                $res=mysqli_query($conn,$query);
                if($res){
                while($row = mysqli_fetch_array($res)){
                    $seg_id=$row['segment_id'];
                    ?> 
                <a href="../ecom/view_seg_product.php?segment=<?php echo $seg_id;?>"><?php echo $row['segment_name'];?></a>
                <?php
                }
                }else{
                    echo mysqli_error($conn);
                }


            ?>
	     <!--  <a href="#">Mobile & Tablets</a>
	      <a href="#">Mobile & Tablets Accessories</a>
	      <a href="#">Other Smart Devices</a> -->
	    </div>
	  </div>

		<div class="hbdropdown">
			<button class="hbdropbtn">Computers & Laptops
				<i class="fa fa-caret-down"></i>
			</button>
			<div class="hbdropdown-content">
				<!-- <a href="#">Computer Accessories</a>
				<a href="#">Datacards & Routers</a>
				<a href="#">Storage</a>
				<a href="#">Gaming</a> -->
				<?php
                $query="SELECT * FROM segment WHERE category_cat_id=2";
                $res=mysqli_query($conn,$query);
                if($res){
                while($row = mysqli_fetch_array($res)){
                    $seg_id=$row['segment_id'];
                    ?> 
                <a href="../ecom/view_seg_product.php?segment=<?php echo $seg_id;?>"><?php echo $row['segment_name'];?></a>
                <?php
                }
                }else{
                    echo mysqli_error($conn);
                }


            ?>
			</div>
		</div>

		<div class="hbdropdown">
			<button class="hbdropbtn">Electronics
				<i class="fa fa-caret-down"></i>
			</button>
			<div class="hbdropdown-content">
			<!-- 	<a href="#">Camera</a>
				<a href="#">Audio & Video Accessories</a>
				<a href="#">Speakers</a>
				<a href="#">Headphones</a>
				<a href="#">Personal Care Applications</a> -->
				<?php
                $query="SELECT * FROM segment WHERE category_cat_id=3";
                $res=mysqli_query($conn,$query);
                if($res){
                while($row = mysqli_fetch_array($res)){
                    $seg_id=$row['segment_id'];
                    ?> 
                <a href="../ecom/view_seg_product.php?segment=<?php echo $seg_id;?>"><?php echo $row['segment_name'];?></a>
                <?php
                }
                }else{
                    echo mysqli_error($conn);
                }


            ?>
			</div>
		</div>

		<!-- <a href="#">Other Products</a>

 -->

            <?php
                $query="SELECT * FROM segment WHERE category_cat_id=4";
                $res=mysqli_query($conn,$query);
                if($res){
                while($row = mysqli_fetch_array($res)){
                    $seg_id=$row['segment_id'];
                    ?> 
                <a href="../ecom/view_seg_product.php?segment=<?php echo $seg_id;?>"><?php echo $row['segment_name'];?></a>
                <?php
                }
                }else{
                    echo mysqli_error($conn);
                }


            ?>

</div>
