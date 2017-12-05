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

      <div>
      <label for="fname"> First Name : </label>
      <input type="text" size="25" id="fname">
      </div>

    <br>
    <div>
    <label for="mname"> Middle Name : </label>
    <input type="text" size="25" id="mname">
    </div>

    <br>
    <div>
    <label for="lname"> Last Name : </label>
    <input type="text" size="25" id="lname">
    </div>

    <br>
    <div>
    <label for="email"> E-mail : </label>
    <input type="text" size="25" id="email">
    </div>

    <br>
    <label for="agentpic"> Insert your pictue : </label>
 <input type="file" name="pic" accept="image/*" id="agentpic">
 <input type="submit" value="Insert image">

<br>
          </fieldset>

    </form>


  </div>




</body>


</html>

<?php include_once('footer.php'); ?>
