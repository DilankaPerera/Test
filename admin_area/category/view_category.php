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
            width: 800px;
            margin:auto;
            margin-bottom: 130px;

        }

        .block table, tr, th, td{
            padding:20px;
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
                </h2>
            <div class="block">
                <?php
                $query="SELECT * FROM category";
                $result=mysqli_query($conn,$query);
                echo "<table>";
                echo "<tr>";
                echo "<td>";  echo 'Category name'; echo "</td>";
                echo "<td>";  echo 'Edit Category'; echo "</td>";
                echo "<td>";  echo 'Delete Category'; echo "</td>";
                echo "</tr>";
                while($row=mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>";  echo $row['cat_name']; echo "</td>";
                    echo "<td>";  ?><a href="edit_categories.php?id=<?php echo $row['cat_id'];?>">Edit</a><?php echo "</td>";
                    echo "<td>";  ?><a href="delete_category.php?id=<?php echo $row['cat_id'];?>">Delete</a><?php echo "</td>";


                    echo "</tr>";
                }
                echo "</table>";
                ?>
            </div>
        </div>

    </div>
<?php include "../content/footer.php";?>