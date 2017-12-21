<?php

include_once ('../includes/db.php');
session_start();
$uname=$_SESSION['SESS_USERNAME'];

if (isset($_POST["yes"])){
    $sql_2 = "DELETE FROM user WHERE username='$uname'";
    if (mysqli_query($conn, $sql_2)) {

       
        echo "<script language=\"JavaScript\">\n";
        echo "alert('Your account has been Deleted');\n";
        echo "window.location='../index.php'";
        echo "</script>";

         session_unset();
        session_destroy();

    header('location:../index.php');
    } else {
    echo "Error deleting record: " . mysqli_error($conn);
    }
/*
$sql_1 = "DELETE FROM customer WHERE user_username='$_SESSION['SESS_USERNAME']'";

  if (mysqli_query($conn, $sql_2)) {

    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }*/
}

if (isset($_POST["no"])){
  header('location:../index.php');
}

mysqli_close($conn);

?>
