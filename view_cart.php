<?php

include('functions/functions.php');
include('includes/db.php');


?>

<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Gzone Technologies</title>


	<link rel="stylesheet" type="text/css" href="styles/style.css" media="all"/>
	<link href="css/font-awesome.css" rel="stylesheet">

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
			        <tr>
			            <td></td>
			            <td></td>
			            <td></td>
			            <td></td> 
			            <!-- else -->
			            <tr><td colspan="4"><p>No items in your cart......</p></td>
			                
			               <!--  <a href="cartAction.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="glyphicon glyphicon-trash"></i></a> -->
			            </td>
			        </tr>
			    </tbody>
				<tfoot>
			        <tr>
			            <td colspan="3"></td>
			            <td class="text-center"><strong>Total LKR</strong></td> <!-- should come the amount in between -->
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
