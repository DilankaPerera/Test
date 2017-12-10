<?php include_once('../Templates/header.php'); ?>

<html>
<head>
  <title> change password </title>
  <link rel="stylesheet" type="text/css" href="../styles/style.css" media="all"/>
  <link href="../css/font-awesome.css" rel="stylesheet">
</head>

<body>
  <div class="main_content">
    <form class = "register-form" action = "includes/agentval.php" method="POST">
    <div class="reg">
      <h2 class="heading_reg"> Change Password </h2>
      <div class="reg_form_grid">



      <ul>
        <li><label for="cpwd"> <b>Current Password </b> </label></li>
        <li><input type="password" size="60" id="cpwd" ></li>
        <br>

        <li><label for="npwd"> <b> New Password </b> </label></li>
        <li><input type="password" size="60" id="npwd" ></li>
        <br>

        <li><label for="renpwd"> <b> Re-enter New Password </b> </label></li>
        <li><input type="password" size="60" id="renpwd" ></li>
      </ul>
      <br>
      <input type="submit" name = "request" value="Request For Register">
    </div>
  </div>
</form>
  </div>
</body>
</html>

<?php include_once('../Templates/footer.php'); ?>
