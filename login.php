<?php include_once('Templates/header.php'); ?>
<html>

<head>
  <title> Login </title>
  <link rel="stylesheet" type="text/css" href="styles/style.css" media="all"/>
  <link href="css/font-awesome.css" rel="stylesheet">
</head>

<body>
  <div class="reg_form_grid">
    <h3 class="heading_reg">Log in</h3>
    <ul>
      <li> <label for="username"> Username  </label> </li>
      <li> <input type="text" size="50" id="username"> </li>
      <br>
      <li><label for="password"> Password  </label> </li>
      <li><input type="password" size="50" id="paasword"></li>
    </ul>
    <br>
    <input type="submit"  value="Login">
  </div>
</body>

</html>

<?php include_once('Templates/footer.php'); ?>
