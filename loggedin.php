<?php
session_start();
include "includes/db.php";


//a check is made to see if the user is already logged in
if(isset($_SESSION['SESS_LOGGEDIN']) == 1) {

    header("Location: " . $config_basedir);

}

if($_POST['login']) {
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $hashpwd = md5($password);
    $loginsql = "SELECT * FROM user WHERE username = '$username' AND password = '$hashpwd'";
    //$loginres = mysqli_query($conn, $loginsql) or die(mysqli_error($conn));
    $loginres = $conn ->query($loginsql);
    $numrows = mysqli_fetch_array($loginres);
    //$count=mysqli_num_rows($numrows);


    //while($numrows=$loginres->fetch_array()){

        if($numrows['username']===$username) {
            if ($numrows['password'] === $hashpwd) {
                $_SESSION['SESS_LOGGEDIN'] = 1;
                $_SESSION['SESS_USERNAME'] = $numrows['username'];
                //echo $_SESSION['SESS_USERNAME'];
                //$ordersql = "SELECT order_id FROM order WHERE user_username = " . $_SESSION['SESS_USERNAME'] . " AND status < 2";
                //$orderres = mysqli_query($ordersql);
                //$orderrow = mysqli_fetch_assoc($orderres);
                //$_SESSION['SESS_ORDERNUM'] = $orderrow['id'];

                header("Location: " . $config_basedir);

            } else {
                echo "<script language=\"JavaScript\">\n";
                echo "alert('Invalid');\n";
                echo "window.location='login.php'";
                echo "</script>";
            }
        }
        else{
            echo "<script language=\"JavaScript\">\n";
            echo "alert('Invalid');\n";
            echo "window.location='login.php'";
            echo "</script>";
        }


}

?>

