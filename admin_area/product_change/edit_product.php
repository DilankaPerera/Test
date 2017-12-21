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
    $pnm=$_FILES["pimg"]["name"];
    if ($pnm==""){
        $pname=$_POST['pname'];
        $des=$_POST['pdes'];
        $pprice=$_POST['pprice'];
        $pdis=$_POST['pdis'];
        $pkwrd=$_POST['pkwrd'];
        $seg=$_POST['seg'];
        $pqnty=$_POST['pqnty'];
        $pcategory=$_POST['pcategory'];
        $status=$_POST['status'];
        $id=$_POST['id'];
        $query ="UPDATE product SET product_name='{$pname}',product_description='{$des}',product_price='{$pprice}',
                          status='{$status}',product_dicount='{$pdis}',product_keywords='{$pkwrd}',
                          segment_id='{$seg}',product_quantity='{$pqnty}',category_id='{$pcategory}' WHERE product_id='{$id}'";
        $result=mysqli_query($conn,$query);
        if($result){
            //header('Location:dashboard.php');
            ?>
            <script type="text/javascript">
                window.location="display_product.php";
            </script> <?php
        }
    }else{
        $pname=$_POST['pname'];
        $des=$_POST['pdes'];
        $pprice=$_POST['pprice'];
        $pdis=$_POST['pdis'];
        $pkwrd=$_POST['pkwrd'];
        $seg=$_POST['seg'];
        $pqnty=$_POST['pqnty'];
        $pcategory=$_POST['pcategory'];
        $status=$_POST['status'];
        $id=$_POST['id'];


        $v1= rand(1111,9999);
        $v2=rand(1111,9999);
        $v3=$v1 . $v2;
        $v3=md5($v3);
        $fnm=$_FILES['pimg']['name'];
        $des2="../product_images/".$v3.$fnm;
        $des1="product_images/".$v3.$fnm;
        move_uploaded_file($_FILES['pimg']['tmp_name'],$des2);

        $query ="UPDATE product SET product_name='{$pname}',product_description='{$des}',product_price='{$pprice}',
                          product_image='{$des1}',status='{$status}',product_dicount='{$pdis}',product_keywords='{$pkwrd}',
                          segment_id='{$seg}',product_quantity='{$pqnty}',category_id='{$pcategory}' WHERE product_id='{$id}'";

        $result=mysqli_query($conn,$query);
        if($result){
            //header('Location:dashboard.php');
            ?>
            <script type="text/javascript">
                window.location="display_product.php";
            </script> <?php
        }
    }
}
?>

<?php
if (isset($_GET['id'])){
   $id=$_GET['id'];
   $result=mysqli_query($conn,"SELECT * FROM product WHERE product_id='{$id}'");
   if($result){
    while ($row=mysqli_fetch_array($result)){
       $pname=$row['product_name'];
       $des=$row['product_description'];
       $pprice=$row['product_price'];
       $pimg=$row['product_image'];
       $pdis=$row['product_dicount'];
       $pkwrd=$row['product_keywords'];
       $seg=$row['segment_id'];
       $pqnty=$row['product_quantity'];
       $pcategory=$row['category_id'];
       $status=$row['status'];

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
                <form name="form1" action="edit_product.php" method="post" id="frm1" enctype="multipart/form-data">
                    <table>
                        <tr>
                            <td colspan="2" align="center">
                                <img style="height: 150px; width: 150px;" src="<?php echo '../'.$pimg; ?>" alt="">
                            </td>
                        </tr>

                        <tr>
                            <td>Product Name :</td>
                            <td><input type="text" name="pname" value="<?php echo $pname; ?>"></td>
                        </tr>

                        <tr>
                            <td>Product Description :</td>
                            <td><input type="text" name="pdes" value="<?php echo $des; ?>"></td>
                        </tr>

                        <tr>
                            <td>Product Price :</td>
                            <td><input type="text" name="pprice" value="<?php echo $pprice; ?>"></td>
                        </tr>

                        <tr>
                            <td>Product image :</td>
                            <td><input type="file" name="pimg"></td>
                        </tr>

                        <tr>
                            <td>Product discount :</td>
                            <td><input type="text" name="pdis" value="<?php echo $pdis; ?>"></td>
                        </tr>

                        <tr>
                            <td>Product Keyword :</td>
                            <td><input type="text" name="pkwrd" value="<?php echo $pkwrd; ?>"></td>
                        </tr>

                        <tr>
                            <td>Product Category :</td>
                            <td>
                                <input type="text" name="pcategory" value="<?php echo $pcategory; ?>">
                            </td>

                        </tr>

                        <tr>
                            <td>Segment :</td>
                            <td>
                                <input type="text" name="seg" value="<?php echo $seg; ?>">
                            </td>
                        </tr>

                        <tr>
                            <td>Product Quantity :</td>
                            <td><input type="text" name="pqnty" value="<?php echo $pqnty; ?>"></td>
                        </tr>

                        <tr>
                            <td>Product Model :</td>
                            <td><input type="text" name="status" value="<?php echo $status; ?>"></td>
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