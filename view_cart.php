<?php

include('functions/functions.php');
include('includes/db.php');
include ('functions/cartfunctions.php');
$cart = new Cart;


?>

<html>
<head>


	<link rel="stylesheet" type="text/css" href="styles/style.css" media="all"/>
	<link href="css/font-awesome.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script>
        function updateCartItem(obj,id){
            $.get("cartAction.php", {action:"updateCartItem", product_id:id, product_quantity:obj.value}, function(data){
                if(data == 'ok'){
                    location.reload();
                }else{
                    alert('Cart update failed, please try again.');
                }
            });
        }
    </script>

</head>
<body>

	<!-- header -->
	<?php include_once('Templates/header.php'); ?>

	<!-- content -->

	<div class="main_content">

		<!-- sidebar -->
		<?php //include_once(/'Templates/navigation_bar.php'); ?>

			<!-- <div class="right_content"> -->
		<form method="post" action="checkout1.php">
			<div class="container">
				<div id="checkbox">
			    <h1>My Cart</h1>
			    <table class="table">
                    <?php
                    $d=0;
                    if(is_array($_COOKIE['item']))
                    {
                        $d=$d+1;
                    }
                    if($d==0){
                        echo 'no records have found';
                    }else
                    {

                    ?>
                    <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($_COOKIE['item'] as $name1 => $value)
                    {
                        $value11 = explode("__", $value);
                        ?>
                        <tr>
                            <td><?php echo $value11[1]; ?></td>
                            <td><?php echo $value11[2]; ?></td>
                            <td><input type="text" class="form-control text-center" value="<?php echo $value11['3']; ?>"></td>
                            <td><?php echo $value11[4]; ?></td>
                            <td>
                                <!--<a href="cartAction.php?action=updateCartItem&id=" class="btn btn-info"><i class="glyphicon glyphicon-refresh"></i></a>-->
                                <input type="submit" value="delete">
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                    <td></td>
                    </tbody>
                </table>
                    <?php
                    }

                    ?>




                    <div class="box-footer">
                        <a href="index.php" style="float: left;" class="btn btn-default"><i class="fa fa-chevron-left"></i> Continue shopping</a>
                        <!--  <a href="#" style="float: right;" class="btn btn-info">Proceed to Checkout <i class="fa fa-chevron-right"></i></a> -->
                        <button style="float: right;" type="submit" class="btn btn btn-info"> Proceed with Checkout <i class="fa fa-chevron-right"></i>
                        </button>
                    </div>


                </div>


            </div>











    </div>
    </div>


    <!-- footer -->
    <?php include_once('Templates/footer.php'); ?>


</body>
</html>
