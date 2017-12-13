<?php

include_once ('../includes/db.php');
//session_start();

//$uname="aaa";

if (isset($_POST["yes"])){
   
   $sql_1 = "DELETE FROM user WHERE username='$_SESSION['SESS_USERNAME']'";

   echo "sql_1";

  if (mysqli_query($conn, $sql_1)) {
    //header('location:../index.php');
    echo "done"
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }

  // $sql_2 = "DELETE FROM user WHERE username='$uname'";

  // if (mysqli_query($conn, $sql_2)) {

  //   echo "Record deleted successfully";
  // } else {
  //   echo "Error deleting record: " . mysqli_error($conn);
  // }
}

if (isset($_POST["no"])){

  header('location:../index.php');
}

mysqli_close($conn);

?>
