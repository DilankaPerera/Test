<?php
include "includes/db.php";

session_start();

if(isset($_POST["username"]) && isset($_POST["password"])) {
    $username = mysqli_real_escape_string($con, $_POST["username"]);
    $password = password_hash($_POST["password"],PASSWORD_DEFAULT);

    $sql = "SELECT * FROM agent WHERE agent_username= '$username' AND agent_password = '$password'";
    $run_query = mysqli_query($con, $sql);
    $count = mysqli_num_rows($run_query);

    if($count == 1) {
        $row = mysqli_fetch_array($run_query);
        $_SESSION["uid"] = $row["user_id"];
        $_SESSION["name"] = $row["agent_username"];
        $_SESSION['LoggedIn'] = 1;
        $ip_add = getenv("REMOTE_ADDR");
    }

    else{
        $sql = "SELECT * FROM customer WHERE customer_username= '$username' AND customer_password = '$password'";
        $run_query = mysqli_query($con, $sql);
        $count = mysqli_num_rows($run_query);

        if($count == 1) {
            $row = mysqli_fetch_array($run_query);
            $_SESSION["uid"] = $row["user_id"];
            $_SESSION["name"] = $row["customer_username"];
            $_SESSION['LoggedIn'] = 1;
            $ip_add = getenv("REMOTE_ADDR");
        }
    }

}