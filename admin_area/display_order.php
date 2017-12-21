<?php include "inc/db.php";?>
<?php session_start(); ?>
<?php
if (!isset($_SESSION['id'])) {
    header('Location: admin_login.php');
}
?>
<style type="text/css">
    table{
        width: 1000px;
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
<?php include "header.php";?>
<?php include "./content/menu.php";?>
<link rel="stylesheet" href="css/product.css">
<div class="grid_10">
    <div class="box round first">
        <h2>
            Product Sales</h2>
        <div class="block">
            <?php
                $query="SELECT * FROM orderr,customer WHERE customer.user_username=orderr.user_username";
                $result=mysqli_query($conn,$query);
                echo "<table>";
                echo "<tr>";
                echo "<td>"; echo "First Name";echo "</td>";
                echo "<td>"; echo "Last Name ";echo "</td>";
                echo "<td>"; echo "Email";echo "</td>";
                echo "<td>"; echo "Address";echo "</td>";
                echo "<td>"; echo "Contact No";echo "</td>";
                echo "<td>"; echo "View Orders";echo "</td>";
                echo "</tr>";
                if ($result){
                while($row=mysqli_fetch_array($result))
                {

                    echo "<tr>";
                    echo "<td>"; echo $row["customer_first_name"];echo "</td>";
                    echo "<td>"; echo $row["customer_last_name"];echo "</td>";
                    echo "<td>"; echo $row["customer_email"];echo "</td>";
                    echo "<td>";
                    $addr_id=$row["customer_address_id"];
                    $res=mysqli_query($conn,"SELECT * FROM customer_address WHERE id='{$addr_id}'");
                    while($row1=mysqli_fetch_array($res)){
                        echo $row1['house_number']."<br/>";
                        echo $row1['street_name']."<br/>";
                        echo $row1['city']."<br/>";
                        echo $row1['country']."<br/>";
                        echo $row1['postal_code']."<br/>";
                    }
                    echo "</td>";
                    echo "<td>"; echo $row["customer_phone_num"];echo "</td>";
                    echo "<td>"; ?><a href="display_order_1.php?id=<?php echo $row['user_username']; ?> ">View Orders</a> <?php echo "</td>";
                    echo "</tr>";
                }
                }else{
                    echo mysqli_error($conn);
                }
                echo "</table>";
            ?>
        </div>
    </div>

</div>
<?php include "./content/footer.php";?>
