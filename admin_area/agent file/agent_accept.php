<?php include "../inc/db.php";?>
<?php session_start(); ?>
<?php
if (!isset($_SESSION['id'])) {
    header('Location: admin_login.php');
}
?>

<?php
if (isset($_GET['id'])){
    $id=$_GET['id'];
    $query="UPDATE agent SET status='accepted' WHERE agent_id='{$id}'";
    $res=mysqli_query($conn,$query);
    if($res){
        header('Location:agent_view.php');
    }



}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>