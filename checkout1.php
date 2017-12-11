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

				<div class="checkbox1">
                        <form method="post" action="checkout2.php">
                            <h1>Checkout - Delivery method</h1>
                            <ul class="nav nav-pills nav-justified">
                                <li class="active"><a href="checkbox1.php"><i class="fa fa-truck"></i><br>Delivery Method</a>
                                </li>
                                <li class="disabled"><a href=""><i class="fa fa-eye"></i><br>Order Review</a>
                                </li>
                                <li class="disabled"><a href=""><i class="fa fa-money"></i><br>Payment Method</a>
                                </li>
                                
                            </ul>

                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="box shipping-method">

                                            <h3>Courier Service</h3>

                                            <div class="box-footer text-center">

                                                <input type="checkbox" name="courier" value="1">
                                            </div>
                                            <div id="delbox">
                                                <form id="cadd">
                                                    <label for="fname">First Name</label>
                                                    <input type="text" name="fname">
                                                    <label for="lname">Last name</label>
                                                    <input type="text" name="lname">
                                                    <label for="fname">Address</label>
                                                    <input type="text" name="fname">
                                                    <label for="lname">Postal Code</label>
                                                    <input type="text" name="lname">
                                                    <label for="fname">Contact Number</label>
                                                    <input type="text" name="fname">
                                                    <label for="lname">Email</label>
                                                    <input type="text" name="lname">
                                                    
                                                </form>
                                              
                                            </div>
                                        </div>
                                    </div>
                             

                                    <div class="col-sm-6">
                                        <div class="box shipping-method">

                                            <h3>Select Collection Point</h3>

                                            <div class="box-footer text-center">

                                                <input type="checkbox" name="collection_point" value="0">
                                            </div>
                                            <div id="delbox">
                                      
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->

                                <br>
                                <br>

                            </div>
                            <!-- /.content -->
                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="checkout1.php" class="btn btn-default"><i class="fa fa-chevron-left"></i> Back to My Cart</a>
                                </div>
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary"> Continue to Order Review <i class="fa fa-chevron-right"></i>
                                    </button>
                            </div>
                </div>
                            </div>
                        </form>
                    </div>
			

			









			</div>
	</div>


	<!-- footer -->
	<?php include_once('Templates/footer.php'); ?>


</body>
</html>
