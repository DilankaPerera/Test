<html>

<head>
<title> Customer Registration  </title>
<link rel="stylesheet" type="text/css" href="styles/styles.css" media="all"/>
<link href="css/font-awesome.css" rel="stylesheet">
</head>

<body>

<?php include_once('templates/header.php'); ?>


  <div  >
    <form class="form">
      <fieldset>

          <legend> <b> Customer Registration <b> </legend>
    <br>
<table >
      <div>
        <tr>
      <td><label for="fname"> <b>First Name </b> </label></td>
      <td><input type="text" size="25" id="fname"></td>
    </tr>
      </div>

    <div>
      <tr>
    <td><label for="lname"><b> Last Name </b> </label></td>
    <td><input type="text" size="25" id="lname"></td>
</tr>
    </div>

    <div>
      <tr>
    <td><label for="email"> <b>E-mail</b></label></td>
    <td><input type="varchar" size="25" id="email"></td>
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
<td><label for="pnumber"> <b>Phone number</b></label></td>
<td><input type="varchar" size="25" id="pnumber"></td>
</tr>
</div>

<div>
  <tr>
    <td><b>Address </b></td>
    <td> </td>
    <tr>
<tr>
<td> <label for="housenum">House Number  </label> </td>
<td> <input type="varchar" size="30" id="housenum" > </td>
</tr>

<tr>
<td> <label for="streetname">Street Name  </label></td>
<td> <input type="varchar" size="30" id="streetname"> </td>
</tr>

<tr>
<td> <label for="city">City </label> </td>
<td> <input type="varchar" size="30" id="city"> </td>
</tr>

<tr>
<td> <label for="country">Country  </label></td>
<td> <input type="varchar" size="30" id="country"> </td>
</tr>
<tr>
<td> <label for="pcode">Postal Code  </label></td>
<td> <input type="varchar" size="30" id="pcode"> </td>
</tr>




</div>


</table>



          </fieldset>

    </form>


  </div>


<?php include_once('templates/footer.php'); ?>

</body>


</html>


