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

    if($row["username"]==$uname){


          if($row["password"]==$hash_pwd){

            //hashing the password
           $hash_pwd_1 = md5($npwd);

            $sql_1 = "UPDATE user SET password='$hash_pwd_1' WHERE username='$uname'";
            $result_1=mysqli_query($conn, $sql_1);

            if($result_1){
              echo "<script language=\"JavaScript\">\n";
              echo "alert('Changes Saved');\n";
              echo "window.location='../index.php'";
              echo "</script>";
          }
        }

      }else {
    continue;}
  }

}

mysqli_close($conn);


?>
