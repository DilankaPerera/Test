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
                                <li><a href="idex.php"><i class="fa fa-truck"></i><br>Delivery Method</a>
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

                                                <input type="radio" name="payment" value="payment1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="box shipping-method">

                                            <h3>PayPal Service</h3>

                                            <div class="box-footer text-center">

                                                <input type="radio" name="payment" value="payment2">
                                            </div>
                                            <div id="delbox5">

                                                    <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" >

                                                    <!-- Identify your business so that you can collect the payments. -->
                                                    <input type="hidden" name="business" value="shoppinggzone@gmail.com">

                                                    <!-- Specify a Buy Now button. -->
                                                    <input type="hidden" name="cmd" value="_xclick">

                                                    <!-- Specify details about the item that buyers will purchase. -->
                                                    <!-- <input type="hidden" name="product_name" value="<?//php echo $product_name; ?>">
                                                    <input type="hidden" name="product_id" value="<?//php echo $product_id; ?>">
                                                    <input type="hidden" name="amount" value="<?//php echo $total; ?>">
                                                    <input type="hidden" name="quantity" value="<?//php echo $qty; ?>">
                                                 -->

                                                    <!-- Display the payment button. -->
                                                    <input type="image" name="submit" border="0"
                                                    src="paypal_button.png"
                                                    alt="PayPal - The safer, easier way to pay online">
                                                    <img alt="" border="0" width="1" height="1"
                                                    src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

                                                    </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                

                                <br>
                                <br>

                            </div>
                          

                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="checkout1.php" class="btn btn-default"><i class="fa fa-chevron-left"></i> Back to Delivery Method </a>
                                </div>
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary"> Place the Order <i class="fa fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
			
				
			   <!--  cash on delivery 0
                paypal 1
 -->



	</div>


	<!-- footer -->
	<?php include_once('Templates/footer.php'); ?>


</body>
</html>


<?php

// if (isset($_POST['submit'])) {
//    $p1 = $_POST['radio'] 
//    if ($p1=='payment1') {
//        $query = "INSERT INTO payment_method  "
//    }
// }



?>




