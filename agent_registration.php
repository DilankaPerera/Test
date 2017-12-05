<?php include_once('Templates/header.php'); ?>

<html>

<head>
<title> Agent Registration  </title>
<link rel="stylesheet" type="text/css" href="css/styles.css" media="all"/>
<link href="css/font-awesome.css" rel="stylesheet">
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
    <td>  <label for="fname"> <b>First Name<span class="req">*</span> </b> </label></td>
      <td> <input type="text" size="25" id="fname" required autocomplete="off"></td>
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
    <td> <label for="lname"> <b>Last Name <span class="req">*</span></b> </label></td>
    <td> <input type="text" size="25" id="lname" required autocomplete="off"></td>
</tr>
    </div>


  <div>
<tr>
    <td> <label for="email"> <b>E-mail </b> <span class="req">*</span></label></td>
    <td> <input type="varchar" size="25" id="email" required autocomplete="off"></td>
</tr>
    </div>
    <div>
      <tr>
        <td><label for="pwd"> <b>Password </b> <span class="req">*</span></label></td>
        <td><input type="password" size="25" id="pwd" required autocomplete="off"></td>
      </tr>
    </div>
    <div>
      <tr>
        <td><label for="repwd"> <b> Re-enter Password<span class="req">*</span> </b> </label></td>
        <td><input type="password" size="25" id="repwd" required autocomplete="off"></td>
      </tr>
    </div>

<tr>
    <td> <label for="agentpic"> <b>Insert your pictue </b> </label></td>
 <td> <input type="file" name="pic" accept="image/*" id="agentpic">
 <input type="submit" value="Insert image"></td>
</tr>

<div>
  <tr>
<td> <label for="pnumber"> <b>Phone number </b><span class="req">*</span> </label></td>
<td> <input type="varchar" size="25" id="pnumber" required autocomplete="off"></td>
</tr>
</div>

</table>
<div>
<br>
<input type="submit" value="Create account">
</div>
          </fieldset>

    </form>


  </div>

</body>


</html>

<?php include_once('Templates/footer.php'); ?>
