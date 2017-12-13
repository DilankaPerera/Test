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
        <div class="checkbox2">
                        <form method="post" action="checkout3.php">
                            <h1>Checkout - Order review</h1>
                            <ul class="nav nav-pills nav-justified">
                                <li><a href="checkout1.php"><i class="fa fa-truck"></i><br>Delivery Method</a>
                                </li>
                                <li class="active"><a href="#"><i class="fa fa-eye"></i><br>Order Review</a>
                                </li>

                                <li class="disabled"><a href=""><i class="fa fa-money"></i><br>Payment Method</a>
                                </li>

                            </ul>

                            <div class="content">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Product</th>
                                                <th>Quantity</th>
                                                <th>Unit price</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>   <!-- Should update the product information -->
                                                <td>

                                                <td><a href="single.php?product_id=$product_id"></a> 
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th colspan="5">Total</th>
                                                <th></th>   <!-- total should come -->
                                            </tr>
                                        </tfoot>
                                    </table>

                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.content -->

                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="checkout1.php" class="btn btn-default"><i class="fa fa-chevron-left"></i> Back to Delivery Method</a>
                                </div>
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary"> Continue to Payment Method <i class="fa fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

			





	</div>


	<!-- footer -->
	<?php include_once('Templates/footer.php'); ?>


</body>
</html>
