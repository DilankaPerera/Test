<?php

include_once ('../includes/db.php');
session_start();
if(isset($_POST['editprofile'])){

  $fname=$_POST["fname"];
  $lname=$_POST["lname"];
  // $email=$_POST["email"];
  $pnumber=$_POST["pnumber"];
  $housenum=$_POST["housenum"];
  $streetname=$_POST["streetname"];
  $city=$_POST["city"];
  $country=$_POST["country"];
  $pcode=$_POST["pcode"];

  //error handlers
  //check if input characters are valid
  if(!preg_match('/^[a-z A-Z 0-9]*$/x', $fname)){
      echo "<script language=\"JavaScript\">\n";
      echo "alert('First name invaild input');\n";
      echo "window.location='../editprofile.php'";
      echo "</script>";
    }else{
      if(!preg_match('/^[a-z A-Z 0-9]*$/x', $lname)){
          echo "<script language=\"JavaScript\">\n";
          echo "alert('Second name invaild input');\n";
          echo "window.location='../editprofile.php'";
          echo "</script>";
      }else{
        //check if email is invalid
        // if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        //     echo "<script language=\"JavaScript\">\n";
        //     echo "alert('Invalid email');\n";
        //     echo "window.location='../editprofile.php'";
        //     echo "</script>";
        //   }else{
            //check if phone number is invalid
            if(!preg_match('/^[0-9]*$/x', $pnumber)){
                echo "<script language=\"JavaScript\">\n";
                echo "alert('Phone Number invaild input');\n";
                echo "window.location='../editprofile.php'";
                echo "</script>";
              }else{
                //check if Address is invalid
                if(!preg_match('/^[a-z A-Z 0-9]*$/x', $housenum)){
                    echo "<script language=\"JavaScript\">\n";
                    echo "alert('House No. invaild input');\n";
                    echo "window.location='../editprofile.php'";
                    echo "</script>";
                  }else{
                    if(!preg_match('/^[a-z A-Z 0-9]*$/x', $streetname)){
                        echo "<script language=\"JavaScript\">\n";
                        echo "alert('Street Name invaild input');\n";
                        echo "window.location='../editprofile.php'";
                        echo "</script>";

                      }else{
                        if(!preg_match('/^[a-z A-Z 0-9]*$/x', $city)){
                        echo "<script language=\"JavaScript\">\n";
                        echo "alert('City invaild input');\n";
                        echo "window.location='../editprofile.php'";
                        echo "</script>";
                        }else{
                          if(!preg_match('/^[a-z A-Z 0-9]*$/x', $country)){
                              echo "<script language=\"JavaScript\">\n";
                              echo "alert('Country invaild input');\n";
                              echo "window.location='../editprofile.php'";
                              echo "</script>";
                            }else{
                              if(!preg_match('/^[a-z A-Z 0-9]*$/x', $pcode)){
                                echo "<script language=\"JavaScript\">\n";
                                echo "alert('Postal Code invaild input');\n";
                                echo "window.location='../editprofile.php'";
                                echo "</script>";
                                            }else{
                                              $sql_1="INSERT INTO customer (customer_first_name, customer_last_name, customer_phone_num)
                                              VALUES ('$fname', '$lname', '$pnumber')";

                                              $result_1=mysqli_query($conn, $sql_1);

                                              echo "$result_1";

                                              $sql_2="INSERT INTO customer_address (house_number, street_name, city ,country,postal_code)
                                                      VALUES ('$housenum', '$streetname', '$city' ,'$country' ,'$pcode')";

                                              // $sql_3= "UPDATE customer SET customer_email='$email' WHERE customer_id=3";


                                              
                                              $result_2=mysqli_query($conn, $sql_2);
                                              // $result_3=mysqli_query($conn, $sql_3);
                                              echo "<script language=\"JavaScript\">\n";
                                              echo "alert('Changes Saved');\n";
                                              echo "window.location='../viewdetails.php'";
                                              echo "</script>";


                                                  }
                                                }
                                              }
                                            }
                                          }
                                        }
                                      }

                                    }


                                  // }


                                }else{
                                  header("Location: userprofile.php");
                                  exit();
                              }
?>
