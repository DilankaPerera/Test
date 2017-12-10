<?php
session_start();
include "includes/db.php";


//a check is made to see if the user is already logged in
if(isset($_SESSION['SESS_LOGGEDIN']) == TRUE) {

    header("Location: " . $config_basedir);

}

if($_POST['login']) {
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = password_hash($_POST["password"],PASSWORD_DEFAULT);

    $loginsql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $loginres = mysqli_query($conn,$loginsql);
    $numrows = mysqli_num_rows($loginres);

    if($numrows == 1) {

        $loginrow = mysqli_fetch_array($loginres);
        $_SESSION['SESS_LOGGEDIN'] = 1;
        $_SESSION['SESS_USERNAME'] = $loginrow['username'];

        $ordersql = "SELECT order_id FROM order WHERE user_username = " . $_SESSION['SESS_USERNAME'] . " AND status < 2";

        $orderres = mysqli_query($ordersql);

        $orderrow = mysqli_fetch_assoc($orderres);

        $_SESSION['SESS_ORDERNUM'] = $orderrow['id'];

        header("Location: " . $config_basedir);

    }

    else {
        $loginusername = "SELECT username FROM user WHERE username='$username' ";
        $run = mysqli_query($conn,$loginusername);
        $numrows  = mysqli_num_rows($run);

        if($numrows==1){
            echo "<script language=\"JavaScript\">\n";
            echo "alert('Incorrect Password');\n";
            echo "window.location='login.php'";
            echo "</script>";
        }

        else{
            $loginpass = "SELECT password FROM user WHERE password='$password' ";
            $run1 = mysqli_query($conn,$loginpass);
            $numrows1  = mysqli_num_rows($run1);

            if($numrows1==1){
                echo "<script language=\"JavaScript\">\n";
                echo "alert('Incorrect Username');\n";
                echo "window.location='login.php'";
                echo "</script>";
            }

            else{
                echo "<script language=\"JavaScript\">\n";
                echo "alert('Incorrect password and username. Pleaase sign up from below if you don't have an account');\n";
                echo "window.location='login.php'";
                echo "</script>";
            }
        }


    }

}
?>


//if(isset($_POST["username"]) && isset($_POST["password"])) {
//    $username = mysqli_real_escape_string($con, $_POST["username"]);
//    $password = password_hash($_POST["password"],PASSWORD_DEFAULT);
//
//    $sql = "SELECT * FROM agent WHERE agent_username= '$username' AND agent_password = '$password'";
//    $run_query = mysqli_query($con, $sql);
//    $count = mysqli_num_rows($run_query);
//
//    if($count == 1) {
//        $row = mysqli_fetch_array($run_query);
//        $_SESSION["uid"] = $row["user_id"];
//        $_SESSION["name"] = $row["agent_username"];
//        $_SESSION['LoggedIn'] = 1;
//        $ip_add = getenv("REMOTE_ADDR");
//    }
//
//    else{
//        $sql = "SELECT * FROM customer WHERE customer_username= '$username' AND customer_password = '$password'";
//        $run_query = mysqli_query($con, $sql);
//        $count = mysqli_num_rows($run_query);
//
//        if($count == 1) {
//            $row = mysqli_fetch_array($run_query);
//            $_SESSION["uid"] = $row["user_id"];
//            $_SESSION["name"] = $row["customer_username"];
//            $_SESSION['LoggedIn'] = 1;
//            $ip_add = getenv("REMOTE_ADDR");
//        }
//    }
//
//}