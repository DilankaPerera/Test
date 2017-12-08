<html>

<head>
<title> cuslog </title>


<link rel="stylesheet" type="text/css" href="styles/style.css" media="all"/>
<link href="css/font-awesome.css" rel="stylesheet">

<style>
.hnavbar {
    overflow: hidden;
    background-color: #2b2a2a;
    font-family: Arial;
		height: 50px;




}

.hnavbar a {
	float: right;

    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.hdropdown {
    float: left;
    overflow: hidden;
}

.hdropdown .hdropbtn {
    font-size: 16px;
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
		float: left;
}

.hnavbar a:hover, .hdropdown:hover .hdropbtn {
    background-color: red;

}


.hdropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.hdropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.hdropdown-content a:hover {
    background-color: #ddd;
}

.hdropdown:hover .hdropdown-content {
    display: block;
}
</style>


</head>



<body>



<!--Top header-->
<div class="header-top">

		<div class="hnavbar">
		  <a href="#home">Home</a>
		  <a href="#news">News</a>
			<a href="#news"><i class="fa fa-cart-arrow-down" ></i></a>
		  <div class="hdropdown">
		    <button class="hdropbtn">
					<i class="fa fa-user" ></i>

		    </button>
		    <div class="hdropdown-content">
		      <a href="#">Link 1</a>
		      <a href="#">Link 2</a>
		      <a href="#">Link 3</a>
		    </div>
		  </div>
			<div class="search_bar">
				<form method="get" action="#" enctype="multipart/form-data">
					<input type="search" name="Search" placeholder="Search..." required="">
					<!-- <input type="submit" name="Search" value="Search"> -->
					<button type="submit" class="btn btn-default search" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"> </i>
					</button>
				</form>
			</div>


		</div>
</div>
<!--//Top header-->

<!--Botttom header-->
<div class="header_bottom">
	<div class="container">
		<a href="index.php"><img src="./images/logo.png" id="logo"></a>

	</div>
</div>
<!--//Botttom header-->


</body>
</html>
