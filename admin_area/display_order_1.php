<?php include "inc/db.php";?>
<?php session_start(); ?>
<?php
if (!isset($_SESSION['id'])) {
    header('Location: admin_login.php');
}

?>
<?php include "header.php";?>
<?php include "./content/menu.php";?>
    <style type="text/css">
        table{
            width: 1100px;
            margin:auto;
            table-layout: fixed;
        }
        .block table, tr, th, td{
            padding:22px;
            color:black;
            border:1px solid #080808;
            border-collapse: collapse;
            font-size: 14px;
            background: linear-gradient(top,#bdc3c7 0%,#ecf0f1 100%);
            background: -webkit-linear-gradient(top,#bdc3c7 0%,#ecf0f1 100%);
        }
    </style>
    <div class="grid_10">
        <div class="box round first">
            <h2>
                Order Items</h2>
            <div class="block">
                <?php
                    $id=$_GET['id'];
                    $query="SELECT * FROM orderr WHERE user_username='{$id}'";
                    $result=mysqli_query($conn,$query);
                    echo "<table>";
                    echo "<tr>";
                    echo "<td>";  echo 'order_date'; echo "</td>";
                    echo "<td>";  echo 'order_quantity'; echo "</td>";
                    echo "<td>";  echo 'order_price'; echo "</td>";
                    echo "<td>";  echo 'order_discount'; echo "</td>";
                    echo "<td>";  echo 'status'; echo "</td>";
                    echo "<td>";  echo 'Send confirm Email'; echo "</td>";

                     echo "</tr>";
                    while($row=mysqli_fetch_array($result)){
                        echo "<tr>";
                            echo "<td>";  echo $row['order_date']; echo "</td>";
                            echo "<td>";  echo $row['order_quantity']; echo "</td>";
                            echo "<td>";  echo $row['order_price']; echo "</td>";
                            echo "<td>";  echo $row['order_discount']; echo "</td>";
                            echo "<td>";  echo $row['status']; echo "</td>";


                                echo"<td>" ?> <a href="display_order_confirm.php">Send</a><?php echo"</td>";


                        echo "</tr>";
                    }
                echo "</table>";
                ?>
            </div>
        </div>

    </div>
<?php include "./content/footer.php";?>