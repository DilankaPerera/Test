<?php include_once('Templates/header.php'); ?>

<html>
<head>
  <title> Navigation Bar </title>
  <link rel="stylesheet" type="text/css" href="styles/style.css" media="all"/>
  <link href="css/font-awesome.css" rel="stylesheet">
</head>
<body>
  <div class="navbar">
    <ul>
      <li><a href="#home"><i class="fa fa-home"></i> Home </a></li>
      <li><a href="#news"><i class="fa fa-newspaper-o"></i> News</a></li>
      <li><a href="#electronics"><i class="fa fa-plug"></i> Electronics</a>
        <div class="dropdown">
          <ul>
            <li><a href="#">Cell phones and Accessories</a></li>
            <li><a href="#" >Cameras and Photos</a></li>
            <li><a href="#">Computer and Tablets</a></li>
            <li><a href="#">TV and Audio</a></li>
          </ul>
        </div>
      </li>
      <li><a href="#fashion"><i class="fa fa-briefcase"></i> Fashion</a>
        <div class="dropdown">
          <ul>
            <li><a href="#">Men's</a></li>
            <li><a href="#" >Women's</a></li>
            <li><a href="#">Kid's</a></li>
          </ul>
        </div>
      </li>
      <li><a href="#sports"><i class="fa fa-futbol-o"></i> Sports Goods</a>
        <div class="dropdown">
          <ul >
            <li><a href="#">Cricket</a></li>
            <li><a href="#" >Football</a></li>
            <li><a href="#">Rugger</a></li>
            <li><a href="#">Basketball</a></li>
          </ul>
        </div>
      </li>
      <li><a href="#motors"><i class="fa fa-car"></i> Motors</a>
        <div class="dropdown">
          <ul>
            <li><a href="#">Cars & Vans</a></li>
            <li><a href="#" >Motocycles</a></li>
            <li><a href="#">Parts and Accessories</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
</body>
</html>

<?php include_once('Templates/footer.php'); ?>
