<?php include "../inc/db.php";?>
<?php session_start(); ?>
<?php
if (!isset($_SESSION['id'])) {
    header('Location:agent_view.php');
}
?>

<?php
if (isset($_GET['id'])){
    $id=$_GET['id'];
    $query="DELETE FROM agent WHERE agent_id='{$id}'";
    mysqli_query($conn,$query);
    header('Location : agent_view.php');


}
?>

