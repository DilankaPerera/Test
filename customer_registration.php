<html>

<head>
  <title> Customer Registration  </title>
  <link rel="stylesheet" type="text/css" href="styles/styles.css" media="all"/>
  <link href="css/font-awesome.css" rel="stylesheet">
</head>

<body>

  <?php include_once('Templates/header.php'); ?>


  <div >
    <form class="form">
      <fieldset>

          <legend> <b> Customer Registration <b> </legend>
          <br>
            <table >
              <div>
                <tr>
                  <td><label for="fname"> <b>First Name <span class="req">*</span></b> </label></td>
                  <td><input type="text" size="25" id="fname" required autocomplete="off"></td>
                </tr>
              </div>

              <div>
                <tr>
                  <td><label for="lname"><b> Last Name </b> <span class="req">*</span></label></td>
                  <td><input type="text" size="25" id="lname" required autocomplete="off"></td>
                </tr>
              </div>

              <div>
                <tr>
                  <td><label for="email"> <b>E-mail</b><span class="req">*</span></label></td>
                  <td><input type="varchar" size="25" id="email" required autocomplete="off"></td>
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
                  <td><label for="repwd"> <b> Re-enter Password </b> <span class="req">*</span></label></td>
                  <td><input type="password" size="25" id="repwd" required autocomplete="off"></td>
                </tr>
              </div>



              <div>
                <tr>
                  <td><label for="pnumber"> <b>Phone number</b><span class="req">*</span></label></td>
                  <td><input type="varchar" size="25" id="pnumber" required autocomplete="off"></td>
                </tr>
              </div>

              <div>

                <tr>
                  <td><b>Address </b></td>
                <td> </td>
                <tr>
                <tr>
                  <td> <label for="housenum">House Number <span class="req">*</span> </label> </td>
                  <td> <input type="varchar" size="30" id="housenum" required autocomplete="off"> </td>
                </tr>

                <tr>
                  <td> <label for="streetname">Street Name <span class="req">*</span> </label></td>
                  <td> <input type="varchar" size="30" id="streetname" required autocomplete="off"> </td>
                </tr>

                <tr>
                  <td> <label for="city">City <span class="req">*</span></label> </td>
                  <td> <input type="varchar" size="30" id="city" required autocomplete="off"> </td>
                </tr>

                <tr>
                  <td> <label for="country">Country <span class="req">*</span> </label></td>
                  <td> <input type="varchar" size="30" id="country" required autocomplete="off"> </td>
                </tr>
                <tr>
                  <td> <label for="pcode">Postal Code <span class="req">*</span> </label></td>
                  <td> <input type="varchar" size="30" id="pcode" required autocomplete="off"> </td>
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

<?php include_once('Templates/footer.php'); ?>

</body>


</html>
