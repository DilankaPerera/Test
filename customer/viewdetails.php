<?php include_once('../Templates/header.php'); ?>

<html>
<head>
  <title> Gzone Technologies </title>
  <link rel="stylesheet" type="text/css" href="../styles/style.css" media="all"/>
  <link href="../css/font-awesome.css" rel="stylesheet">
</head>

<body>
  <div class="main_content">
    <div class="reg">
      <div class="container">
        <h2 class="heading_reg"> My Gzone </h2>
        <form class="reg_form_grid" >
          <br>
          <table class="tablestyles">

<?php

include_once ('../includes/db.php');
session_start();

$uname=$_SESSION['SESS_USERNAME'];
$sql = "SELECT * FROM customer";
$result = mysqli_query($conn, $sql);

$sql_1 = "SELECT * FROM customer_address";
$result_1 = mysqli_query($conn, $sql_1);

/* Output all records */

while ($row=mysqli_fetch_assoc($result)) {
  if($row["user_username"]==$uname){
    $row_1=mysqli_fetch_assoc($result_1);

  echo "  <tr>
          <td > <b>Username  </b>  </td>
          <td > :"." ".$row['user_username']."</td>
          <tr>";

  echo "  <tr>
        <td > <b>First Name  </b>  </td>
        <td > :"." ".$row['customer_first_name']."</td>
        <tr>";

  echo "  <tr>
          <td > <b>Last Name  </b>  </td>
          <td > :"." ".$row['customer_last_name']."</td>
          <tr>";

  echo "  <tr>
          <td > <b>E-mail  </b>  </td>
          <td > :"." ".$row['customer_email']."</td>
          <tr>";

  echo "  <tr>
          <td > <b>Phone number  </b>  </td>
          <td > :"." ".$row['customer_phone_num']."</td>
          <tr>";

  echo "  <tr>
          <td > <b> <u>Address </ul> </b>  </td>
          <td > </td>
          <tr>";

  echo "  <tr>
          <td > <b>House Number  </b>  </td>
          <td > :"." ".$row_1['house_number']."</td>
          <tr>";

  echo "  <tr>
          <td > <b>Street Name  </b>  </td>
          <td > :"." ".$row_1['street_name']."</td>
          <tr>";

  echo "  <tr>
          <td > <b>City  </b>  </td>
          <td > :"." ".$row_1['city']."</td>
          <tr>";

  echo "  <tr>
          <td > <b>Country  </b>  </td>
          <td > :"." ".$row_1['country']."</td>
          <tr>";

  echo "  <tr>
          <td > <b>Postal Code  </b>  </td>
          <td > :"." ".$row_1['postal_code']."</td>
          <tr>";
        }
      }
mysqli_close($conn);?>

</div>
</table>
<br>
<div class="edituserbtn" >
<a href="../editprofile.php">Edit Profile</a>
</div>
</div>
</div>
</form>
</div>
</body>


</html>

<?php

include_once('../Templates/footer.php');
?>
