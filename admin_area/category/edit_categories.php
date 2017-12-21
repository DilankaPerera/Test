<?php include "../inc/db.php";?>
<?php session_start(); ?>
<?php
if (!isset($_SESSION['id'])) {
    header('Location:../admin_login/admin_login.php');
}
?>
<?php include_once('header.php');?>
<?php include "../content/menu.php";?>

<?php
if (isset($_POST['submit'])){
        $cat_name=$_POST['cat_name'];
        $id=$_POST['id'];
        $query ="UPDATE category SET cat_name='{$cat_name}' WHERE cat_id='{$id}'";
        $result=mysqli_query($conn,$query);
        if($result){
            //header('Location:dashboard.php');
            ?>
            <script type="text/javascript">
                window.location="view_category.php";
            </script> <?php
        }

}
?>

<?php
if (isset($_GET['id'])){
    $id=$_GET['id'];
    $result=mysqli_query($conn,"SELECT * FROM category WHERE cat_id='{$id}'");
    if($result){
        while ($row=mysqli_fetch_array($result)){
            $cat_name=$row['cat_name'];
        }
    }
}
?>

    <link rel="stylesheet" href="../css/product.css">
    <div class="grid_10">
        <div class="box round first">
            <h2>
                Product Sales</h2>
            <div class="block">
                <form name="form1" action="edit_categories.php" method="post" id="frm1">
                    <table>
                        <tr>
                            <td>category name :</td>
                            <td><input type="text" name="cat_name" value="<?php echo $cat_name; ?>"></td>
                        </tr>
                        <input type="hidden" name="id" value="<?php echo $id;?>"> </input>
                        <tr>
                            <td colspan="3" align="center"><input type="submit" name="submit" value="Update"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>

    </div>




<?php include "../content/footer.php";?>