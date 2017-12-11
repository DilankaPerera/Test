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
                        <form method="post" action="index.php">
                            <h1>Checkout - Payment method</h1>
                            <ul class="nav nav-pills nav-justified">
                                <li><a href="checkout1.php"><i class="fa fa-truck"></i><br>Delivery Method</a>
                                </li>
                                <li><a href="checkout2.php"><i class="fa fa-eye"></i><br>Order Review</a>
                                </li>
                                <li class="active"><a href="checkout3.php"><i class="fa fa-money"></i><br>Payment Method</a>
                                </li>
                                
                            </ul>

                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="box shipping-method">

                                            <h3>Cash on Delivery</h3>
                                            <div class="box-footer text-center">

                                                <input type="checkbox" name="delivery" value="delivery1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="box shipping-method">

                                            <h3>PayPal Service</h3>

                                            <div class="box-footer text-center">

                                                <input type="checkbox" name="delivery" value="delivery2">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                

                                <br>
                                <br>

                            </div>
                          

                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="checkout2.php" class="btn btn-default"><i class="fa fa-chevron-left"></i> Back to Order Review </a>
                                </div>
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary"> Place the Order <i class="fa fa-chevron-right"></i>
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
