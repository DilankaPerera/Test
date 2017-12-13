<?php

include_once ('../includes/db.php');
session_start();

if (isset($_POST["request"])){

  $cpwd=$_POST["cpwd"];
  $npwd=$_POST["npwd"];
  $renpwd=$_POST["renpwd"];
  $uname=$_SESSION['SESS_USERNAME'];

  //hashing the password
  $hash_pwd = md5($cpwd);


  $sql="SELECT*FROM user";
  $result=mysqli_query($conn, $sql);

  while($row = mysqli_fetch_assoc($result)){

    if($row["password"]==$hash_pwd){
      echo $row["username"] ;
      echo "<br>";
      echo $row["password"];
      echo "<br>";



      //hashing the password
     $hash_pwd_1 = md5($npwd);

      $sql_1 = "UPDATE user SET password='$hash_pwd_1' WHERE username='$uname'";
      $result_1=mysqli_query($conn, $sql_1);

      if($result_1){
      echo "changed password successfully";
    }
  }else {
    continue;
    echo "no good";
  }
}

}

mysqli_close($conn);


?>
