<?php session_start(); ?>
<?php
if (!isset($_SESSION['id'])) {
    header('Location:../admin_login/admin_login.php');
}
?>

<?php include('../inc/db.php');?>
<?php include "header.php";?>
<?php include "../content/menu.php";?>
<?php
if (isset($_POST['submit'])){

    $v1= rand(1111,9999);
    $v2=rand(1111,9999);
    $v3=$v1 . $v2;
    $v3=md5($v3);
    $fnm=$_FILES['pimg']['name'];
    $des="../product_images/".$v3.$fnm;
    $des1="product_images/".$v3.$fnm;
    move_uploaded_file($_FILES['pimg']['tmp_name'],$des);

    $pname=mysqli_real_escape_string($conn,$_POST['pname']);
    $pdes=mysqli_real_escape_string($conn,$_POST['pdes']);
    $pprice=mysqli_real_escape_string($conn,$_POST['pprice']);
    $pdis=mysqli_real_escape_string($conn,$_POST['pdis']);
    $pkwrd=mysqli_real_escape_string($conn,$_POST['pkwrd']);
    $pcategory=mysqli_real_escape_string($conn,$_POST['pcategory']);
    $seg=mysqli_real_escape_string($conn,$_POST['pseg']);
    $pqnty=mysqli_real_escape_string($conn,$_POST['pqnty']);
    $pstatus=mysqli_real_escape_string($conn,$_POST['pstatus']);

    $query="INSERT INTO product(product_name,product_description,product_price,product_image,product_dicount,product_keywords,segment_id,product_quantity,category_id,status)";
    $query .="VALUES('{$pname}','{$pdes}','{$pprice}','{$des1}','{$pdis}','{$pkwrd}','{$seg}','{$pqnty}','{$pcategory}','{$pstatus}')";
    $result=mysqli_query($conn,$query);
    if ($result) {
    } else {
        echo 'error'. mysqli_error($conn);
    }

}
?>
<link rel="stylesheet" href="../css/product.css">
    <div class="grid_10">
        <div class="box round first">
            <h2>
                Product Sales</h2>
            <div class="block">
                <form name="form1" action="add_product.php" method="post" id="frm1" enctype="multipart/form-data">
                    <table>
                        <tr>
                            <td>Product Name :</td>
                            <td><input type="text" name="pname"></td>
                        </tr>

                        <tr>
                            <td>Product Description :</td>
                            <td><input type="text" name="pdes"></td>
                        </tr>

                        <tr>
                            <td>Product Price :</td>
                            <td><input type="text" name="pprice"></td>
                        </tr>

                        <tr>
                            <td>Product image :</td>
                            <td><input type="file" name="pimg"></td>
                        </tr>

                        <tr>
                            <td>Product discount :</td>
                            <td><input type="text" name="pdis"></td>
                        </tr>

                        <tr>
                            <td>Product Keyword :</td>
                            <td><input type="text" name="pkwrd"></td>
                        </tr>

                        <tr>
                            <td>Product Category :</td>
                            <td>
                                <select name="pcategory">
                                    <?php $query="SELECT * FROM category";
                                        $res=mysqli_query($conn,$query);

                                        while($row=mysqli_fetch_array($res)){
                                            $cate_id=$row['cat_id'];
                                            $cate_name=$row['cat_name'];
                                            echo "<option value='$cate_id'>"; echo $cate_name; echo "</option>";
                                        }
                                    ?>
                                </select>
                            </td>

                        </tr>

                        <tr>
                            <td>Segment :</td>
                            <td>
                                <select name="pseg" id="">
                                    <?php $query="SELECT * FROM segment";
                                    $res=mysqli_query($conn,$query);

                                    while($row=mysqli_fetch_array($res)){
                                        $seg_name=$row['segment_name'];
                                        $seg_id=$row['segment_id'];
                                        echo "<option value='$seg_id'>"; echo $seg_name; echo "</option>";
                                    }
                                    ?>
                                </select>

                            </td>
                        </tr>

                        <tr>
                            <td>Product Quantity :</td>
                            <td><input type="text" name="pqnty"></td>
                        </tr>

                        <tr>
                            <td>Product Status :</td>
                            <td><input type="text" name="pstatus"></td>
                        </tr>

                        <tr>
                            <td colspan="2" align="center"><input type="submit" name="submit" value="Upload"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>

    </div>


<?php include "../content/footer.php";?>

