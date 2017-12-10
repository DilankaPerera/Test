<?php include_once('Templates/header.php');
include('functions/functions.php');
include('includes/db.php');
include ('functions/cartfunctions.php');
?>
<html>

<head>
  <title> Login </title>
  <link rel="stylesheet" type="text/css" href="styles/style.css" media="all"/>
  <link href="css/font-awesome.css" rel="stylesheet">
</head>

<body>
  <div class="main_content">
    <div class="reg">
      <h3 class="heading_reg">Log in</h3>
      <div class="reg_form_grid" id="loginform">
          <form class = "loginform" action = "loggedin.php" method="POST">

        <ul>
          <li> <label for="username"> Username  </label> </li>
          <li> <input type="text" size="37" name="username" id="username"> </li>
          <br>
          <li><label for="password"> Password  </label> </li>
          <li><input type="password" size="37" name="password" id="password"></li>
        </ul>
        <br>
        <input type="submit"  name="login" value="Login">
        <br>
        New to Gzone ?<a href="test_customer_registration.php"> click here to sign up </a>
          </form>
      </div>
    </div>
  </div>
</body>

</html>

<?php include_once('Templates/footer.php'); ?>
