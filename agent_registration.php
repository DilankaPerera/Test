<?php include_once('header.php');
include("includes/db.php");
?>

<html>

<head>
<title> Agent Registration  </title>
<link rel="stylesheet" type="text/css" href="css/styles.css" media="all"/>
</head>

<body>
  <div  >
    <form class="form">
      <fieldset>

          <legend> <b> Agent Registration <b> </legend>
    <br>
<table>
      <div>

<tr>
    <td>  <label for="fname"> <b>First Name </b> </label></td>
      <td> <input type="text" size="25" id="fname"></td>
</tr>
      </div>

    <div>
<tr>
    <td> <label for="mname"> <b>Middle Name </b> </label></td>
    <td> <input type="text" size="25" id="mname"></td>
</tr>
    </div>

    <div>
<tr>
    <td> <label for="lname"> <b>Last Name </b> </label></td>
    <td> <input type="text" size="25" id="lname"></td>
</tr>
    </div>


  <div>
<tr>
    <td> <label for="email"> <b>E-mail </b> </label></td>
    <td> <input type="varchar" size="25" id="email"></td>
</tr>
    </div>
    <div>
      <tr>
        <td><label for="pwd"> <b>Password </b> </label></td>
        <td><input type="password" size="25" id="pwd"></td>
      </tr>
    </div>
    <div>
      <tr>
        <td><label for="repwd"> <b> Re-enter Password </b> </label></td>
        <td><input type="password" size="25" id="repwd"></td>
      </tr>
    </div>

<tr>
    <td> <label for="agentpic"> <b>Insert your pictue </b> </label></td>
 <td> <input type="file" name="pic" accept="image/*" id="agentpic">
 <input type="submit" value="Insert image"></td>
</tr>

<div>
  <tr>
<td> <label for="pnumber"> <b>Phone number </b> </label></td>
<td> <input type="varchar" size="25" id="pnumber"></td>
</tr>
</div>

</table>
          </fieldset>

    </form>


  </div>


</body>


</html>

<?php include_once('footer.php'); ?>

<?php
if(isset($_POST['register'])){


    $ip = getIp();

    $c_name = $_POST['c_name'];
    $c_email = $_POST['c_email'];
    $c_pass = $_POST['c_pass'];
    $c_image = $_FILES['c_image']['name'];
    $c_image_tmp = $_FILES['c_image']['tmp_name'];
    $c_country = $_POST['c_country'];
    $c_city = $_POST['c_city'];
    $c_contact = $_POST['c_contact'];
    $c_address = $_POST['c_address'];


    move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");

    ?>
