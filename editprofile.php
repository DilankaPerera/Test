<?php include_once('Templates/header.php'); ?>

<html>

<head>
  <title> My Gzone  </title>
  <link rel="stylesheet" type="text/css" href="styles/style.css" media="all"/>
  <link href="css/font-awesome.css" rel="stylesheet">
</head>

<body>
  <div class="main_content">
    <form class="reg_form_grid">
      <h2 class="heading_reg"> Customer Registration </h2>
      <br>
      <ul>
        <li><label for="fname"> <b>First Name </b> </label></li>
        <li><input type="text" size="60" id="fname" ></li>
        <br>
        <li><label for="lname"><b> Last Name </b> </label></li>
        <li><input type="text" size="60" id="lname" ></li>
        <br>
        <li><label for="email"> <b>E-mail</b></li>
        <li><input type="varchar" size="60" id="email" ></li>
        <br>
        <li><label for="pnumber"> <b>Phone number</b></label></li>
        <li><input type="varchar" size="60" id="pnumber" ></li>
      </ul>
      <b>Address </b>
      <br>
      <table class="tablestyles">
        <tr>
          <td> <label for="housenum">House Number </label> </td>
          <td> <input type="varchar" size="39" id="housenum" > </td>
        </tr>

        <tr>
          <td> <label for="streetname">Street Name  </label></td>
          <td> <input type="varchar" size="39" id="streetname"> </td>
        </tr>

        <tr>
          <td> <label for="city">City </label> </td>
          <td> <input type="varchar" size="39" id="city" > </td>
        </tr>

        <tr>
          <td> <label for="country">Country  </label></td>
          <td> <input type="varchar" size="39" id="country" > </td>
        </tr>

        <tr>
          <td> <label for="pcode">Postal Code  </label></td>
          <td> <input type="varchar" size="39" id="pcode" > </td>
        </tr>
      </table>
      <div>
        <br>
        <input type="submit" value="Create account">
      </div>
    </form>
  </div>

</body>
</html>

<?php include_once('Templates/footer.php'); ?>
