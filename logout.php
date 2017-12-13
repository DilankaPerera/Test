<?php
$config_basedir = "index.php";
//session_start();
// unset($_SESSION['SESS_LOGGEDIN']);
// unset($_SESSION['SESS_USERNAME']);
session_start();
session_destroy();
header("Location: " . $config_basedir);
include("Templates/header.php");
include("includes/db.php");
include("Templates/footer.php");
?>
