<?php
session_start();
include "includes/db.php";


//a check is made to see if the user is already logged in
if(isset($_SESSION['SESS_LOGGEDIN']) == TRUE) {

    header("Location: " . $config_basedir);

}

if($_POST['login'])

{
    $username = mysqli_real_escape_string($con, $_POST["username"]);
    $password = password_hash($_POST["password"],PASSWORD_DEFAULT);

    $loginsql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $loginres = mysqli_query($conn,$loginsql);
    $numrows = mysqli_query($loginres);

    if($numrows == 1) {

        $loginrow = mysqli_fetch_array($loginres);
        $_SESSION['SESS_LOGGEDIN'] = 1;
        $_SESSION['SESS_USERNAME'] = $loginrow['username'];

        $ordersql = "SELECT order_id FROM orders WHERE user_username = " . $_SESSION['SESS_USERNAME'] . " AND status < 2";

        $orderres = mysqli_query($ordersql);

        $orderrow = mysqli_fetch_assoc($orderres);

        $_SESSION['SESS_ORDERNUM'] = $orderrow['id'];

        header("Location: " . $config_basedir);

    }

    else

    {

        header("Location: http://" .$_SERVER['HTTP_HOST']. $_SERVER['SCRIPT_NAME'] . "?error=1");

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