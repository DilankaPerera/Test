<?php include_once('header.php'); ?>

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
