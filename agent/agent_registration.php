<html>

<head>

  <?php //include_once('header.php');
  include("../includes/db.php");
  ?>

  <title> Agent Registration  </title>
  <link rel="stylesheet" type="text/css" href="../css/styles.css" media="all"/>
  <link href="../css/font-awesome.css" rel="stylesheet">
  </head>

<body>
  <div  >
    <form class = "register-form" action = "includes/agent_reg_inc.php" method="POST">
      <fieldset>

          <legend> <b> Agent Registration <b> </legend>
    <br>
<table>
      <div>

<tr>
    <td>  <label for="fname"> <b>First Name<span class="req">*</span> </b> </label></td>
      <td> <input type="text" size="25" name="fname" required autocomplete="off"></td>
</tr>
      </div>

    <div>
<tr>
    <td> <label for="mname"> <b>Middle Name </b> </label></td>
    <td> <input type="text" size="25" name="mname"></td>
</tr>
    </div>

    <div>
<tr>
    <td> <label for="lname"> <b>Last Name <span class="req">*</span></b> </label></td>
    <td> <input type="text" size="25" name="lname" required autocomplete="off"></td>
</tr>
    </div>


  <div>
<tr>
    <td> <label for="email"> <b>E-mail </b> <span class="req">*</span></label></td>
    <td> <input type="varchar" size="25" name="email" required autocomplete="off"></td>
</tr>
    </div>
    <div>
      <tr>
        <td><label for="pwd"> <b>Password </b> <span class="req">*</span></label></td>
        <td><input type="password" size="25" name="pwd" required autocomplete="off"></td>
      </tr>
    </div>
    <div>
      <tr>
        <td><label for="repwd"> <b> Re-enter Password<span class="req">*</span> </b> </label></td>
        <td><input type="password" size="25" name="repwd" required autocomplete="off"></td>
      </tr>
    </div>
<!--
<tr>
    <td> <label for="a_image"> <b>Insert your pictue </b> </label></td>
 <td> <input type="file" name="a_image">
 <input type="submit" value="Insert image"></td>
</tr>-->

<div>
  <tr>
<td> <label for="pnumber"> <b>Phone number </b><span class="req">*</span> </label></td>
<td> <input type="varchar" size="25" name="pnumber" required autocomplete="off"></td>
</tr>
</div>

<div>

  <tr>
    <td><b>Address </b></td>
  <td> </td>
  <tr>
  <tr>
    <td> <label for="housenum">House Number <span class="req">*</span> </label> </td>
    <td> <input type="varchar" size="30" name="housenum" required autocomplete="off"> </td>
  </tr>

  <tr>
    <td> <label for="streetname">Street Name <span class="req">*</span> </label></td>
    <td> <input type="varchar" size="30" name="streetname" required autocomplete="off"> </td>
  </tr>

  <tr>
    <td> <label for="city">City <span class="req">*</span></label> </td>
    <td> <input type="varchar" size="30" name="city" required autocomplete="off"> </td>
  </tr>

  <tr>
    <td> <label for="country">Country <span class="req">*</span> </label></td>
    <td> <input type="varchar" size="30" name="country" required autocomplete="off"> </td>
  </tr>
  <tr>
    <td> <label for="pcode">Postal Code <span class="req">*</span> </label></td>
    <td> <input type="varchar" size="30" name="pcode" required autocomplete="off"> </td>
  </tr>

</div>

</table>
<div>
<br>
<input type="submit" name='register' value="Create account">
</div>
          </fieldset>

    </form>


  </div>

</body>


</html>

<?php //include_once('footer.php'); ?>

