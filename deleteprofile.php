<?php include_once('Templates/header.php'); ?>


<html>
<head>
<title> Gzone Technologies </title>

<link rel="stylesheet" type="text/css" href="styles/style.css" media="all"/>
<link href="css/font-awesome.css" rel="stylesheet">
</head>

<div class="main_content">
  <div class="reg">
  <h2 class="heading_reg" > Delete Profile </h2>
    <form class="reg_form_grid" class="reg" id="loginform" action="customer/deletecus.php" method="post">
    Do you want to delete your profile?
<div id="deleteuser">
    <input type="submit" name="yes" value="Yes" >
    <input type="submit" name="no" value="No">
</div>


    </form>
  </div>
    </div>

</body>
</html>


<?php include_once('Templates/footer.php'); ?>
