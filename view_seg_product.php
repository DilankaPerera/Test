<?php
include('functions/functions.php');
include('includes/db.php');
include ('functions/cartfunctions.php');
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
    <?php //include_once('Templates/navigation_bar.php'); ?>

    

        <div id="product_box2">

            <?php getSegProduct(); ?>








        </div>


</div>


<!-- footer -->
<?php include_once('Templates/footer.php'); ?>


</body>
</html>

