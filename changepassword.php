<?php include_once('Templates/header.php'); ?>

<html>
<head>
  <title> Gzone Technologies </title>
  <link rel="stylesheet" type="text/css" href="styles/style.css" media="all"/>
  <link href="css/font-awesome.css" rel="stylesheet">
</head>

<body>
  <div class="main_content">
    <form class = "register-form" action = "customer/alterpass.php" method="POST">
    <div class="reg">
      <h2 class="heading_reg"> Change Password </h2>
      <div class="reg_form_grid">



      <ul>
        <li><label for="cpwd"> <b>Current Password </b> </label></li>
        <li><input type="password" size="60" id="cpwd" name="cpwd" ></li>
        <br>

        <li><label for="npwd"> <b> New Password </b> </label></li>
        <li><input type="password" size="60" id="npwd" name="npwd" ></li>
        <br>

        <li><label for="renpwd"> <b> Re-enter New Password </b> </label></li>
        <li><input type="password" size="60" id="renpwd" name="renpwd"></li>
      </ul>
      <br>
      <input type="submit" name = "request" value="Change Password">
    </div>
  </div>
</form>
  </div>
</body>
</html>

<?php include_once('Templates/footer.php'); ?>
