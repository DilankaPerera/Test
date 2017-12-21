<?php include "../inc/db.php";?>
<?php session_start(); ?>
<?php
if (!isset($_SESSION['id'])) {
    header('Location:../admin_login/admin_login.php');
}
?>

?>
<?php include "header.php";?>
<?php include "../content/menu.php";?>
    <style type="text/css">
        table{
            max-width: 500px;
            margin:auto;
            table-layout: fixed;
        }

        .block table, tr, th, td{
            padding:10px;
            color:antiquewhite;
            border:1px solid #080808;
            border-collapse: collapse;
            font-size: 12px;
            background: linear-gradient(top,#3c3c3c 0%,#222222 100%);
            background: -webkit-linear-gradient(top,#3c3c3c 0%,#222222 100%);
        }
    </style>
    <div class="grid_10">
        <div class="box round first">
            <h2>
                Product Sales</h2>
            <div class="block">
                <?php
                $query="SELECT * FROM product";
                $result=mysqli_query($conn,$query);
                echo "<table>";
                echo "<tr>";
                echo "<td>";  echo 'product_image'; echo "</td>";
                echo "<td>";  echo 'product_name'; echo "</td>";
                echo "<td>";  echo 'product_description'; echo "</td>";
                echo "<td>";  echo 'product_price'; echo "</td>";
                echo "<td>";  echo 'product_discount'; echo "</td>";
                echo "<td>";  echo 'product_quantity'; echo "</td>";
                echo "<td>";  echo 'product_category'; echo "</td>";
                echo "<td>";  echo 'product_status'; echo "</td>";
                echo "<td>";  echo 'Delete_product'; echo "</td>";
                echo "<td>";  echo 'Edit_product'; echo "</td>";
                echo "</tr>";
                while($row=mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>";  ?><img style="height: 75px; width:75px;" src="<?php echo "../".$row['product_image'];?>" alt=""> <?php echo "</td>";
                    echo "<td>";  echo $row['product_name']; echo "</td>";
                    echo "<td>";  echo $row['product_description']; echo "</td>";
                    echo "<td>";  echo $row['product_price']; echo "</td>";
                    echo "<td>";  echo $row['product_dicount']; echo "</td>";
                    echo "<td>";  echo $row['product_quantity']; echo "</td>";
                    echo "<td>";  echo $row['category_id']; echo "</td>";
                    echo "<td>";  echo $row['status']; echo "</td>";
                    echo "<td>";  ?><a href="delete_product.php?id=<?php echo $row['product_id'];?>">Delete</a><?php echo "</td>";
                    echo "<td>";  ?><a href="edit_product.php?id=<?php echo $row['product_id'];?>">Edit</a><?php echo "</td>";


                    echo "</tr>";
                }
                echo "</table>";
                ?>
            </div>
        </div>

    </div>
<?php include "../content/footer.php";?>