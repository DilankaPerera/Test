<?php
if(isset($_POST['register'])) {

    include_once ('../../includes/db.php');




    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $repwd = $_POST['repwd'];


    //error handlers
    //check if input characters are valid
    if(!preg_match('/^[a-z A-Z 0-9]*$/x', $uname)){
        echo "<script language=\"JavaScript\">\n";
        echo "alert('Username invaild input');\n";
        echo "window.location='../../test_customer_registration.php'";
        echo "</script>";
    }
    else{
        //check if email is invalid
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo "<script language=\"JavaScript\">\n";
            echo "alert('Invalid email');\n";
            echo "window.location='../../test_customer_registration.php'";
            echo "</script>";
        }
        else{
            if($pwd!=$repwd){
                echo "<script language=\"JavaScript\">\n";
                echo "alert('Passwords not matching');\n";
                echo "window.location='../../test_customer_registration.php'";
                echo "</script>";

            }
            else{
                //$sql = "SELECT agent_username FROM agent WHERE agent_username='$uname' UNION SELECT customer_username FROM customer WHERE customer_username='$uname'";
                $sql = "SELECT username FROM user WHERE username='$uname'";
                $result = mysqli_query($conn, $sql);
                $result_check = mysqli_num_rows($result);
                if (!$result) {
                    die(mysqli_error($conn));
                }

                if($result_check>0){
                    echo "<script language=\"JavaScript\">\n";
                    echo "alert('Username already taken');\n";
                    echo "window.location='../../test_customer_registration.php'";
                    echo "</script>";
                }
                else{
                    //hashing the password
                    $hash_pwd = password_hash($pwd,PASSWORD_DEFAULT);
                    //inset the user into database
                    $insert_c = "INSERT INTO user(username,password,user_role_id)VALUES('$uname','$hash_pwd','2')";
                    $result = mysqli_query($conn, $insert_c);
                    $insert_c = "INSERT INTO customer(customer_email,customer_username) VALUES ('$email','$uname')";
                    $result = mysqli_query($conn, $insert_c);
                    if (!$result) {
                        die(mysqli_error($conn));
                    }

                    echo "<script language=\"JavaScript\">\n";
                    echo "alert('You have been registered successfully');\n";
                    echo "window.location='/Test/index.php'";
                    echo "</script>";
                }

            }
        }
    }


    //move_uploaded_file($a_image_tmp, "customer/customer_images/$image");


}

else{
    header("Location: ../test_customer_registration.php");
    exit();
}
?>
