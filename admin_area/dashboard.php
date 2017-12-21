<?php include "inc/db.php";?>
<?php session_start(); ?>
<?php
if (!isset($_SESSION['id'])) {
    header('Location: admin_login.php');
}

?>
<?php include "header.php";?>
<?php include "content/menu.php";?>
        <div style="margin-top: 20px;" class="grid_10">
            <ul class="product_details">
                <li style="float: left;
                    background-color: #1A3A52;
                    font-size: 14px;
                    margin-top: 20px;
                    list-style: none;
                    padding: 40px 80px 40px 40px;
                    margin-right: 30px;
                    margin-left: 100px;



                ">

                    <a style="color: white;text-decoration: none;" href="product_change/add_product.php">Add Products</a></li>

                <li style="float: left;
                    background-color: #1A3A52;
                    font-size: 14px;
                    margin-top: 20px;
                    list-style: none;
                    padding: 40px 70px 40px 40px;
                    margin-right: 30px;


                ">

                    <a style="color: white;text-decoration: none;" href="customer_view.php">Customer Details</a></li>
                <li style="float: left;
                    background-color: #1A3A52;
                    font-size: 14px;
                    margin-top: 20px;
                    list-style: none;
                    padding: 40px 80px 40px 40px;
                    margin-right: 30px;
                ">

                    <a style="color: white;text-decoration: none;" href="product_change/display_product.php">Display Products</a></li>
            </ul>

            <ul class="product_details">
                <li style="float: left;
                    background-color: #1A3A52;
                    font-size: 14px;
                    margin-top: 20px;
                    list-style: none;
                    padding: 40px 90px 40px 40px;
                    margin-right: 30px;
                    margin-left: 100px;


                ">

                    <a style="color: white;text-decoration: none;" href="agent%20file/agent_view.php">Agent View</a></li>

                <li style="float: left;
                    background-color: #1A3A52;
                    font-size: 14px;
                    margin-top: 20px;
                    list-style: none;
                    padding: 40px 120px 40px 40px;
                    margin-right: 30px;
                ">

                    <a style="color: white;text-decoration: none;" href="category/view_category.php">categories</a></li>
                <li style="float: left;
                    background-color: #1A3A52;
                    font-size: 14px;
                    margin-top: 20px;
                    list-style: none;
                    padding: 40px 80px 40px 40px;
                    margin-right: 30px;
                ">

                    <a style="color: white;text-decoration: none;" href="">Display Products</a></li>
            </ul>

            <ul class="product_details">
                <li style="float: left;
                    background-color: #1A3A52;
                    font-size: 14px;
                    margin-top: 20px;
                    list-style: none;
                    padding: 40px 75px 20px 40px;
                    margin-right: 30px;
                    margin-left: 100px;
                    margin-bottom: 200px;

                " >

                    <a style="color: white;text-decoration: none;" href="display_order.php">Display Order<br>
                        Members</a></li>

                <li style="float: left;
                    background-color: #1A3A52;
                    font-size: 14px;
                    margin-top: 20px;
                    list-style: none;
                    padding: 40px 88px 40px 40px;
                    margin-right: 30px;


                ">

                    <a style="color: white;text-decoration: none;" href="display_order_1.php">Display Orders</a></li>

            </ul>

        </div>
<?php include "content/footer.php";?>