<?php
//session_start();
include "includes/db.php";


//a check is made to see if the user is already logged in
if(isset($_SESSION['SESS_LOGGEDIN']) == TRUE) {

    header("Location: " . $config_basedir);

}

if($_POST['login']) {
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $hashpwd = md5($password);
    var_dump($username);
    var_dump($password);
    var_dump($hashpwd);
    $loginsql = "SELECT * FROM user WHERE username = '$username' AND password = '$hashpwd'";
    $loginres = mysqli_query($conn, $loginsql) or die(mysqli_error($conn));
    //$numrows = mysqli_fetch_array($loginres);
    //$count=mysqli_num_rows($numrows);
    echo "error";


    while ($numrows = mysqli_fetch_array($loginres)){
        echo "error";
        $_SESSION['SESS_LOGGEDIN'] = 1;
        $_SESSION['SESS_USERNAME'] = $numrows['username'];

        $ordersql = "SELECT order_id FROM order WHERE user_username = " . $_SESSION['SESS_USERNAME'] . " AND status < 2";

        $orderres = mysqli_query($ordersql);

        $orderrow = mysqli_fetch_assoc($orderres);

        $_SESSION['SESS_ORDERNUM'] = $orderrow['id'];

        header("Location: " . $config_basedir);

    }

    var_dump($numrows);

//    else {
//        $loginusername = "SELECT username FROM user WHERE username='$username' ";
//        $run = mysqli_query($conn,$loginusername);
//        $numrows  = mysqli_num_rows($run);
//
//        if($numrows==1){
//            echo "<script language=\"JavaScript\">\n";
//            echo "alert('Incorrect Password');\n";
//            echo "window.location='login.php'";
//            echo "</script>";
//        }
//
//        else{
//            $loginpass = "SELECT password FROM user WHERE password='$password' ";
//            $run1 = mysqli_query($conn,$loginpass);
//            $numrows1  = mysqli_num_rows($run1);
//
//            if($numrows1==1){
//                echo "<script language=\"JavaScript\">\n";
//                echo "alert('Incorrect Username');\n";
//                echo "window.location='login.php'";
//                echo "</script>";
//            }
//
//            else{
//                echo "<script language=\"JavaScript\">\n";
//                echo "alert('Incorrect password and username. Pleaase sign up from below if you don't have an account');\n";
//                echo "window.location='login.php'";
//                echo "</script>";
//            }
//        }
//
//
//    }
//
//}
}
?>

