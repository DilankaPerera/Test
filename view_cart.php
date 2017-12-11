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
		<?php include_once('Templates/navigation_bar.php'); ?>

			<div class="right_content">
			<div class="container">
				<div id="checkbox">
			    <h1>Shopping Cart</h1>
			    <table class="table">
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
                if($cart->total_items() > 0){
                //get cart items from session
                $cartItems = $cart->contents();
                foreach($cartItems as $item){
                ?>
			        <tr>
                        <td><?php echo $item["product_name"]; ?></td>
                        <td><?php echo '$'.$item["product_price"].' USD'; ?></td>
                        <td><input type="number" class="form-control text-center" value="<?php echo $item["product_quantity"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"></td>
                        <td><?php echo '$'.$item["subtotal"].' USD'; ?></td>
                        <td>
                            <!--<a href="cartAction.php?action=updateCartItem&id=" class="btn btn-info"><i class="glyphicon glyphicon-refresh"></i></a>-->
                            <a href="cartactions.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="glyphicon glyphicon-trash"></i></a>
                        </td>
                    </tr>
                <?php } }else{ ?>
			            <tr><td colspan="4"><p>No items in your cart......</p></td>
			        </tr>
                <?php } ?>
			    </tbody>
				<tfoot>
			        <tr>
			            <td colspan="3"></td>
                        <?php if($cart->total_items() > 0){ ?>
			            <td class="text-center"><strong>Total LKR <?php echo '$'.$cart->total().' LKR'; ?></strong></td> <!-- should come the amount in between -->
                        <?php } ?>
			        </tr>
			    </tfoot>
			    </table>
			    <div class="box-footer">
			        <a href="#" style="float: left;" class="btn btn-default"><i class="fa fa-chevron-left"></i> Continue shopping</a>
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
