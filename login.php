<?php include_once('Templates/header.php'); ?>

<html>

<head>
<title> Login </title>

<link rel="stylesheet" type="text/css" href="styles/style.css" media="all"/>
<link href="css/font-awesome.css" rel="stylesheet">

</head>

<body>

<div>
  <form class="form">
    <fieldset>
      <legend> <b> User Login </b> </legend>

      <div>
        <table>
          <tr>
            <td> <label for="username"> Username : </label> </td>
            <td> <input type="text" size="25" id="username"> </td>
          </tr>
          <tr>
            <td><label for="password"> Password : </label> </td>
            <td><input type="password" size="25" id="paasword"></td>
          </tr>
        </table>
      </div>
      <input type="submit"  value="Login">
    </fieldset>
  </form>
</div>


</body>
</html>

<?php include_once('Templates/footer.php'); ?>
