<?php include "../inc/db.php";?>
<?php session_start(); ?>
<?php
if (!isset($_SESSION['id'])) {
    header('Location:../admin_login/admin_login.php');
}
?>
<?php
    $id1=$_GET['id'];
    $res1=mysqli_query($conn,"SELECT * FROM product WHERE product_id='{$id1}' ");
    while ($row=mysqli_fetch_array($res1)){
        $img=$row['product_image'];
    }
    unlink($img);
    $res=mysqli_query($conn,"DELETE FROM product WHERE product_id='{$id1}'");
    if($res){
        header('Location:display_product.php?delete=successful');

    }
?>
