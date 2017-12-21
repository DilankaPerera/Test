<?php

include_once ('../../includes/db.php');
session_start();
if(isset($_POST['register'])){

  $fname=$_POST["fname"];
  $lname=$_POST["lname"];
  $email=$_POST["email"];
  $pnumber=$_POST["pnumber"];
  $bussname=$_POST["bussname"];
  $nic=$_POST["nic"];
  $lic=$_POST["lic"];
  //$pic=$_POST["pic"];
  $uname=$_POST["uname"];
  $pwd=$_POST["pwd"];
  $repwd=$_POST["repwd"];

  //error handlers
  //check if input characters are valid
  if(!preg_match('/^[a-z A-Z 0-9]*$/x', $fname)){
      echo "<script language=\"JavaScript\">\n";
      echo "alert('First name invaild input');\n";
      echo "window.location='../customer_registration.php'";
      echo "</script>";
    }else{
      if(!preg_match('/^[a-z A-Z 0-9]*$/x', $lname)){
          echo "<script language=\"JavaScript\">\n";
          echo "alert('Second name invaild input');\n";
          echo "window.location='../customer_registration.php'";
          echo "</script>";
      }else{
        //check if email is invalid
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo "<script language=\"JavaScript\">\n";
            echo "alert('Invalid email');\n";
            echo "window.location='../customer_registration.php'";
            echo "</script>";
          }else{
            //check if phone number is invalid
            if(!preg_match('/^[0-9]*$/x', $pnumber)){
                echo "<script language=\"JavaScript\">\n";
                echo "alert('Phone Number invaild input');\n";
                echo "window.location='../customer_registration.php'";
                echo "</script>";
              }else{
                //check if Address is invalid
                if(!preg_match('/^[a-z A-Z 0-9]*$/x', $bussname)){
                    echo "<script language=\"JavaScript\">\n";
                    echo "alert('Business name invaild input');\n";
                    echo "window.location='../customer_registration.php'";
                    echo "</script>";
                  }else{
                    if(!preg_match('/^[a-z A-Z 0-9]*$/x', $nic)){
                        echo "<script language=\"JavaScript\">\n";
                        echo "alert('NIC No.   invaild input');\n";
                        echo "window.location='../customer_registration.php'";
                        echo "</script>";

                      }else{
                        if(!preg_match('/^[a-z A-Z 0-9]*$/x', $lic)){
                        echo "<script language=\"JavaScript\">\n";
                        echo "alert('License No. invaild input');\n";
                        echo "window.location='../customer_registration.php'";
                        echo "</script>";
                        }else{
                        if($pwd!=$repwd){
                            echo "<script language=\"JavaScript\">\n";
                            echo "alert('Passwords not matching');\n";
                            echo "window.location='../../agent_registration.php'";
                            echo "</script>";

                        }
                        else{
                            $sql = "SELECT * FROM user WHERE username='$uname'";
                            $result = mysqli_query($conn, $sql);
                            $result_check = mysqli_num_rows($result);
                            echo $result_check;
                            if($result_check>0){
                                echo "<script language=\"JavaScript\">\n";
                                echo "alert('Username already taken');\n";
                                echo "window.location='../../agent_registration.php'";
                                echo "</script>";
                            }
                            else{
                                //hashing the password
                                $hash_pwd = md5($pwd);
                                echo $hash_pwd;
                                // getting images
                                //$pic = $_FILES['pic'] ['name'];
                                //$pic_tmp = $_FILES['pic']['tmp_name'];

                                //move_uploaded_file($pic_tmp,"../images/".$pic);




                                //inset the user into database
                                $insert_b = "INSERT INTO user(username,password,user_role_id)VALUES('$uname','$hash_pwd',1)";
                                $result_b = mysqli_query($conn, $insert_b);

                                $insert_a = "INSERT INTO agent(agent_first_name,agent_last_name,agent_email,agent_phone_num,agent_business_name,agent_nic,agent_license,status,user_username)VALUES('$fname','$lname','$email','$pnumber','$bussname','$nic','$lic','pending','$uname')";
                                $result_a = mysqli_query($conn, $insert_a);

                                echo "<script language=\"JavaScript\">\n";
                                echo "alert('Request For Approval');\n";
                                echo "window.location='../../index.php'";
                                echo "</script>";

                            }

                        }
                                              }
                                            }
                                          }
                                        }
                                      }

                                    }


                                  }


                                }else{
                                  header('Location: ../../index.php');
                                  exit();
                              }


?>
