<?php include_once('Templates/header.php'); ?>

<html>

<head>
  <title> Gzone Technologies  </title>
  <link rel="stylesheet" type="text/css" href="styles/style.css" media="all"/>
  <link href="css/font-awesome.css" rel="stylesheet">
</head>

<body>
  <div class="main_content">
    <div class="reg">
    <h2 class="heading_reg"> Edit my gzone </h2>
    <form class="reg_form_grid" action = "customer/alteruser.php" method="POST">

      <br>
      <ul>
        <li><label for="fname"> <b>First Name </b> </label></li>
        <li><input type="text" size="60" id="fname" name="fname"></li>
        <br>
        <li><label for="lname"><b> Last Name </b> </label></li>
        <li><input type="text" size="60" id="lname" name="lname" ></li>
       <!--  <br>
        <li><label for="email"> <b>E-mail</b></li>
        <li><input type="varchar" size="60" id="email" name="email" ></li> -->
        <br>
        <li><label for="pnumber"> <b>Phone number</b></label></li>
        <li><input type="varchar" size="60" id="pnumber" name="pnumber"></li>
      </ul>
      <b>Address </b>
      <br>
      <table class="tablestyles">
        <tr>
          <td> <label for="housenum">House Number </label> </td>
          <td> <input type="varchar" size="39" id="housenum" name="housenum"> </td>
        </tr>

        <tr>
          <td> <label for="streetname">Street Name  </label></td>
          <td> <input type="varchar" size="39" id="streetname"name="streetname"> </td>
        </tr>

        <tr>
          <td> <label for="city">City </label> </td>
          <td> <input type="varchar" size="39" id="city" name="city"> </td>
        </tr>

        <tr>
          <td> <label for="country">Country  </label></td>
          <td> <input type="varchar" size="39" id="country" name="country"> </td>
        </tr>

        <tr>
          <td> <label for="pcode">Postal Code  </label></td>
          <td> <input type="varchar" size="39" id="pcode" name="pcode"> </td>
        </tr>
      </table>
      <div>
        <br>
        <input type="submit" value="Save Changes" name="editprofile">
      </div>
    </form>
  </div>
  </div>

</body>
</html>

<?php

include_once('Templates/footer.php');
?>
