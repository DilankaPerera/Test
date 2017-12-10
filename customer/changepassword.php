<?php include_once('../Templates/header.php'); ?>

<html>
<head>
  <title> change password </title>
  <link rel="stylesheet" type="text/css" href="../styles/style.css" media="all"/>
  <link href="../css/font-awesome.css" rel="stylesheet">
</head>

<body>
  <div class="main_content">
    <div class="reg_form_grid">

      <h2 class="heading_reg"> Change Password </h2>

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
      <div class="edituserbtn" >
        <a href="editprofile.php">Change Password</a>
      </div>
    </div>
  </div>
</body>
</html>

<?php include_once('../Templates/footer.php'); ?>
