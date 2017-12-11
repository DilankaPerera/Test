<?php
//session_start();
include("Templates/header.php");
include("includes/db.php");
// unset($_SESSION['SESS_LOGGEDIN']);
// unset($_SESSION['SESS_USERNAME']);
session_destroy();
header("Location: " . $config_basedir);
include("Templates/footer.php");
?>
