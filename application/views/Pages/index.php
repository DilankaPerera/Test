<!DOCTYPE html>
<html>
<head>
<title>GZone Technologies</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- //for-mobile-apps -->
<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="assets/css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->

<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>

<!-- header -->

<?php include_once('header.php'); ?>

<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
		<h2>Top selling offers</h2>
			<!-- <div class="grid_3 grid_5">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#expeditions" id="expeditions-tab" role="tab" data-toggle="tab" aria-controls="expeditions" aria-expanded="true">Advertised offers</a></li>
						<li role="presentation"><a href="#tours" role="tab" id="tours-tab" data-toggle="tab" aria-controls="tours">Today Offers</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab">
							<div class="agile-tp">
								<h5>Advertised this week</h5>
							</div>
							<div class="agile_top_brands_grids">
								<div class="col-md-4 top_brand_left">
									<div class="hover14 column">
										<div class="agile_top_brand_left_grid">
											<div class="agile_top_brand_left_grid_pos">
												<img src="images/offer.png" alt=" " class="img-responsive" />
											</div>
											<div class="agile_top_brand_left_grid1">
												<figure>
													<div class="snipcart-item block" >
														<div class="snipcart-thumb">
															<a href="products.html"><img title=" " alt=" " src="images/1.png" /></a>		
															<p>Tata-salt</p>
															<div class="stars">
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star gray-star" aria-hidden="true"></i>
															</div>
															<h4>$20.99 <span>$35.00</span></h4>
														</div>
														<div class="snipcart-details top_brand_home_details">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Fortune Sunflower Oil" />
																	<input type="hidden" name="amount" value="20.99" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="USD" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Add to cart" class="button" />
																</fieldset>
															</form>
														</div>
													</div>
												</figure>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4 top_brand_left">
									<div class="hover14 column">
										<div class="agile_top_brand_left_grid">
											<div class="agile_top_brand_left_grid_pos">
												<img src="images/offer.png" alt=" " class="img-responsive" />
											</div>
											<div class="agile_top_brand_left_grid1">
												<figure>
													<div class="snipcart-item block" >
														<div class="snipcart-thumb">
															<a href="products.html"><img title=" " alt=" " src="images/2.png" /></a>		
															<p>Fortune-sunflower</p>
															<div class="stars">
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star gray-star" aria-hidden="true"></i>
															</div>
															<h4>$20.99 <span>$35.00</span></h4>
														</div>
														<div class="snipcart-details top_brand_home_details">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="basmati rise" />
																	<input type="hidden" name="amount" value="20.99" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="USD" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Add to cart" class="button" />
																</fieldset>
															</form>
														</div>
													</div>
												</figure>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4 top_brand_left">
									<div class="hover14 column">
										<div class="agile_top_brand_left_grid">
											<div class="agile_top_brand_left_grid_pos">
												<img src="images/offer.png" alt=" " class="img-responsive" />
											</div>
											<div class="agile_top_brand_left_grid1">
												<figure>
													<div class="snipcart-item block">
														<div class="snipcart-thumb">
															<a href="products.html"><img src="images/3.png" alt=" " class="img-responsive" /></a>
															<p>Aashirvaad-atta</p>
															<div class="stars">
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star gray-star" aria-hidden="true"></i>
															</div>
															<h4>$40.99 <span>$65.00</span></h4>
														</div>
														<div class="snipcart-details top_brand_home_details">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Pepsi soft drink" />
																	<input type="hidden" name="amount" value="40.00" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="USD" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Add to cart" class="button" />
																</fieldset>
															</form>
														</div>
													</div>
												</figure>
											</div>
										</div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="agile_top_brands_grids">
								<div class="col-md-4 top_brand_left">
									<div class="hover14 column">
										<div class="agile_top_brand_left_grid">
											<div class="agile_top_brand_left_grid_pos">
												<img src="images/offer.png" alt=" " class="img-responsive" />
											</div>
											<div class="agile_top_brand_left_grid1">
												<figure>
													<div class="snipcart-item block" >
														<div class="snipcart-thumb">
															<a href="products.html"><img title=" " alt=" " src="images/4.png" /></a>		
															<p>Sampann-toor-dal</p>
															<div class="stars">
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star gray-star" aria-hidden="true"></i>
															</div>
															<h4>$35.99 <span>$55.00</span></h4>
														</div>
														<div class="snipcart-details top_brand_home_details">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Fortune Sunflower Oil" />
																	<input type="hidden" name="amount" value="35.99" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="USD" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Add to cart" class="button" />
																</fieldset>
															</form>
														</div>
													</div>
												</figure>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4 top_brand_left">
									<div class="hover14 column">
										<div class="agile_top_brand_left_grid">
											<div class="agile_top_brand_left_grid_pos">
												<img src="images/offer.png" alt=" " class="img-responsive" />
											</div>
											<div class="agile_top_brand_left_grid1">
												<figure>
													<div class="snipcart-item block" >
														<div class="snipcart-thumb">
															<a href="products.html"><img title=" " alt=" " src="images/5.png" /></a>		
															<p>Parryss-sugar</p>
															<div class="stars">
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star gray-star" aria-hidden="true"></i>
															</div>
															<h4>$30.99 <span>$45.00</span></h4>
														</div>
														<div class="snipcart-details top_brand_home_details">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="basmati rise" />
																	<input type="hidden" name="amount" value="30.99" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="USD" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Add to cart" class="button" />
																</fieldset>
															</form>
														</div>
													</div>
												</figure>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4 top_brand_left">
									<div class="hover14 column">
										<div class="agile_top_brand_left_grid">
											<div class="agile_top_brand_left_grid_pos">
												<img src="images/offer.png" alt=" " class="img-responsive" />
											</div>
											<div class="agile_top_brand_left_grid_pos">
												<img src="images/offer.png" alt=" " class="img-responsive" />
											</div>
											<div class="agile_top_brand_left_grid1">
												<figure>
													<div class="snipcart-item block">
														<div class="snipcart-thumb">
															<a href="products.html"><img src="images/6.png" alt=" " class="img-responsive" /></a>
															<p>Saffola-gold</p>
															<div class="stars">
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star gray-star" aria-hidden="true"></i>
															</div>
															<h4>$80.99 <span>$105.00</span></h4>
														</div>
														<div class="snipcart-details top_brand_home_details">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Pepsi soft drink" />
																	<input type="hidden" name="amount" value="80.00" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="USD" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Add to cart" class="button" />
																</fieldset>
															</form>
														</div>
													</div>
												</figure>
											</div>
										</div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="tours" aria-labelledby="tours-tab">
							<div class="agile-tp">
								<h5>This week</h5>
								<p class="w3l-ad">We've pulled together all our advertised offers into one place, so you won't miss out on a great deal.</p>
							</div>
							<div class="agile_top_brands_grids">
								<div class="col-md-4 top_brand_left">
									<div class="hover14 column">
										<div class="agile_top_brand_left_grid">
											<div class="agile_top_brand_left_grid_pos">
												<img src="images/offer.png" alt=" " class="img-responsive" />
											</div>
											<div class="agile_top_brand_left_grid1">
												<figure>
													<div class="snipcart-item block" >
														<div class="snipcart-thumb">
															<a href="products.html"><img title=" " alt=" " src="images/7.png" /></a>		
															<p>Sona-masoori-rice</p>
															<div class="stars">
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star gray-star" aria-hidden="true"></i>
															</div>
															<h4>$35.99 <span>$55.00</span></h4>
														</div>
														<div class="snipcart-details top_brand_home_details">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Fortune Sunflower Oil" />
																	<input type="hidden" name="amount" value="35.99" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="USD" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Add to cart" class="button" />
																</fieldset>
															</form>
														</div>
													</div>
												</figure>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4 top_brand_left">
									<div class="hover14 column">
										<div class="agile_top_brand_left_grid">
											<div class="agile_top_brand_left_grid_pos">
												<img src="images/offer.png" alt=" " class="img-responsive" />
											</div>
											<div class="agile_top_brand_left_grid1">
												<figure>
													<div class="snipcart-item block" >
														<div class="snipcart-thumb">
															<a href="products.html"><img title=" " alt=" " src="images/8.png" /></a>		
															<p>Milky-mist-paneer</p>
															<div class="stars">
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star gray-star" aria-hidden="true"></i>
															</div>
															<h4>$30.99 <span>$45.00</span></h4>
														</div>
														<div class="snipcart-details top_brand_home_details">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="basmati rise" />
																	<input type="hidden" name="amount" value="30.99" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="USD" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Add to cart" class="button" />
																</fieldset>
															</form>
														</div>
													</div>
												</figure>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4 top_brand_left">
									<div class="hover14 column">
										<div class="agile_top_brand_left_grid">
											<div class="agile_top_brand_left_grid_pos">
												<img src="images/offer.png" alt=" " class="img-responsive" />
											</div>
											<div class="agile_top_brand_left_grid_pos">
												<img src="images/offer.png" alt=" " class="img-responsive" />
											</div>
											<div class="agile_top_brand_left_grid1">
												<figure>
													<div class="snipcart-item block">
														<div class="snipcart-thumb">
															<a href="products.html"><img src="images/9.png" alt=" " class="img-responsive" /></a>
															<p>Basmati-Rice</p>
															<div class="stars">
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star gray-star" aria-hidden="true"></i>
															</div>
															<h4>$80.99 <span>$105.00</span></h4>
														</div>
														<div class="snipcart-details top_brand_home_details">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Pepsi soft drink" />
																	<input type="hidden" name="amount" value="80.00" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="USD" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Add to cart" class="button" />
																</fieldset>
															</form>
														</div>
													</div>
												</figure>
											</div>
										</div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="agile_top_brands_grids">
								<div class="col-md-4 top_brand_left">
									<div class="hover14 column">
										<div class="agile_top_brand_left_grid">
											<div class="agile_top_brand_left_grid_pos">
												<img src="images/offer.png" alt=" " class="img-responsive" />
											</div>
											<div class="agile_top_brand_left_grid1">
												<figure>
													<div class="snipcart-item block" >
														<div class="snipcart-thumb">
															<a href="products.html"><img title=" " alt=" " src="images/10.png" /></a>		
															<p>Fortune-sunflower</p>
															<div class="stars">
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star gray-star" aria-hidden="true"></i>
															</div>
															<h4>$20.99 <span>$35.00</span></h4>
														</div>
														<div class="snipcart-details top_brand_home_details">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Fortune Sunflower Oil" />
																	<input type="hidden" name="amount" value="20.99" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="USD" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Add to cart" class="button" />
																</fieldset>
															</form>
														</div>
													</div>
												</figure>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4 top_brand_left">
									<div class="hover14 column">
										<div class="agile_top_brand_left_grid">
											<div class="agile_top_brand_left_grid_pos">
												<img src="images/offer.png" alt=" " class="img-responsive" />
											</div>
											<div class="agile_top_brand_left_grid1">
												<figure>
													<div class="snipcart-item block" >
														<div class="snipcart-thumb">
															<a href="products.html"><img title=" " alt=" " src="images/12.png" /></a>		
															<p>Nestle-a-slim</p>
															<div class="stars">
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star gray-star" aria-hidden="true"></i>
															</div>
															<h4>$20.99 <span>$35.00</span></h4>
														</div>
														<div class="snipcart-details top_brand_home_details">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="basmati rise" />
																	<input type="hidden" name="amount" value="20.99" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="USD" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Add to cart" class="button" />
																</fieldset>
															</form>
														</div>
													</div>
												</figure>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4 top_brand_left">
									<div class="hover14 column">
										<div class="agile_top_brand_left_grid">
											<div class="agile_top_brand_left_grid_pos">
												<img src="images/offer.png" alt=" " class="img-responsive" />
											</div>
											<div class="agile_top_brand_left_grid1">
												<figure>
													<div class="snipcart-item block">
														<div class="snipcart-thumb">
															<a href="products.html"><img src="images/13.png" alt=" " class="img-responsive" /></a>
															<p>Bread-sandwich</p>
															<div class="stars">
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star gray-star" aria-hidden="true"></i>
															</div>
															<h4>$40.99 <span>$65.00</span></h4>
														</div>
														<div class="snipcart-details top_brand_home_details">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Pepsi soft drink" />
																	<input type="hidden" name="amount" value="40.00" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="USD" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Add to cart" class="button" />
																</fieldset>
															</form>
														</div>
													</div>
												</figure>
											</div>
										</div>
									</div> -->
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- //top-brands -->
	

<!--brands-->
	<div class="brands">
		<div class="container">
		<h3>Brand Store</h3>
			<div class="brands-agile">
				<!-- <div class="col-md-2 w3layouts-brand">
					<div class="brands-w3l">
						<p><a href="#">Lorem</a></p>
					</div>
				</div>
				<div class="col-md-2 w3layouts-brand">
					<div class="brands-w3l">
						<p><a href="#">Lorem</a></p>
					</div>
				</div>
				<div class="col-md-2 w3layouts-brand">
					<div class="brands-w3l">
						<p><a href="#">Lorem</a></p>
					</div>
				</div>
				
				<div class="col-md-2 w3layouts-brand">
					<div class="brands-w3l">
						<p><a href="#">Lorem</a></p>
					</div>
				</div>
				<div class="col-md-2 w3layouts-brand">
					<div class="brands-w3l">
						<p><a href="#">Lorem</a></p>
					</div>
				</div>
				<div class="col-md-2 w3layouts-brand">
					<div class="brands-w3l">
						<p><a href="#">Lorem</a></p>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="brands-agile-1">
				<div class="col-md-2 w3layouts-brand">
					<div class="brands-w3l">
						<p><a href="#">Lorem</a></p>
					</div>
				</div>
				<div class="col-md-2 w3layouts-brand">
					<div class="brands-w3l">
						<p><a href="#">Lorem</a></p>
					</div>
				</div>
				<div class="col-md-2 w3layouts-brand">
					<div class="brands-w3l">
						<p><a href="#">Lorem</a></p>
					</div>
				</div>
				
				<div class="col-md-2 w3layouts-brand">
					<div class="brands-w3l">
						<p><a href="#">Lorem</a></p>
					</div>
				</div>
				<div class="col-md-2 w3layouts-brand">
					<div class="brands-w3l">
						<p><a href="#">Lorem</a></p>
					</div>
				</div>
				<div class="col-md-2 w3layouts-brand">
					<div class="brands-w3l">
						<p><a href="#">Lorem</a></p>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="brands-agile-2">
				<div class="col-md-2 w3layouts-brand">
					<div class="brands-w3l">
						<p><a href="#">Lorem</a></p>
					</div>
				</div>
				<div class="col-md-2 w3layouts-brand">
					<div class="brands-w3l">
						<p><a href="#">Lorem</a></p>
					</div>
				</div>
				<div class="col-md-2 w3layouts-brand">
					<div class="brands-w3l">
						<p><a href="#">Lorem</a></p>
					</div>
				</div>
				
				<div class="col-md-2 w3layouts-brand">
					<div class="brands-w3l">
						<p><a href="#">Lorem</a></p>
					</div>
				</div>
				<div class="col-md-2 w3layouts-brand">
					<div class="brands-w3l">
						<p><a href="#">Lorem</a></p>
					</div>
				</div>
				<div class="col-md-2 w3layouts-brand">
					<div class="brands-w3l">
						<p><a href="#">Lorem</a></p>
					</div> -->
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>	
<!--//brands-->
<!-- new -->
	<div class="newproducts-w3agile">
		<div class="container">
			<h3>New Products</h3>
				<!-- <div class="agile_top_brands_grids">
					<div class="col-md-3 top_brand_left-1">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid_pos">
									<img src="images/offer.png" alt=" " class="img-responsive">
								</div>
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
												<a href="products.html"><img title=" " alt=" " src="images/14.png"></a>		
												<p>Fried-gram</p>
												<div class="stars">
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star gray-star" aria-hidden="true"></i>
												</div>
													<h4>$35.99 <span>$55.00</span></h4>
											</div>
											<div class="snipcart-details top_brand_home_details">
												<form action="#" method="post">
													<fieldset>
														<input type="hidden" name="cmd" value="_cart">
														<input type="hidden" name="add" value="1">
														<input type="hidden" name="business" value=" ">
														<input type="hidden" name="item_name" value="Fortune Sunflower Oil">
														<input type="hidden" name="amount" value="35.99">
														<input type="hidden" name="discount_amount" value="1.00">
														<input type="hidden" name="currency_code" value="USD">
														<input type="hidden" name="return" value=" ">
														<input type="hidden" name="cancel_return" value=" ">
														<input type="submit" name="submit" value="Add to cart" class="button">
													</fieldset>
												</form>
											</div>
										</div>
									</figure>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 top_brand_left-1">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid_pos">
									<img src="images/offer.png" alt=" " class="img-responsive">
								</div>
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
												<a href="products.html"><img title=" " alt=" " src="images/15.png"></a>		
												<p>Navaratan-dal</p>
												<div class="stars">
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star gray-star" aria-hidden="true"></i>
												</div>
													<h4>$30.99 <span>$45.00</span></h4>
											</div>
											<div class="snipcart-details top_brand_home_details">
												<form action="#" method="post">
													<fieldset>
														<input type="hidden" name="cmd" value="_cart">
															<input type="hidden" name="add" value="1">
															<input type="hidden" name="business" value=" ">
															<input type="hidden" name="item_name" value="basmati rise">
															<input type="hidden" name="amount" value="30.99">
															<input type="hidden" name="discount_amount" value="1.00">
															<input type="hidden" name="currency_code" value="USD">
															<input type="hidden" name="return" value=" ">
															<input type="hidden" name="cancel_return" value=" ">
															<input type="submit" name="submit" value="Add to cart" class="button">
													</fieldset>
												</form>
											</div>
										</div>
									</figure>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 top_brand_left-1">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid_pos">
									<img src="images/offer.png" alt=" " class="img-responsive">
								</div>
								<div class="agile_top_brand_left_grid_pos">
									<img src="images/offer.png" alt=" " class="img-responsive">
								</div>
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
												<a href="products.html"><img src="images/16.png" alt=" " class="img-responsive"></a>
												<p>White-peasmatar</p>
												<div class="stars">
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star gray-star" aria-hidden="true"></i>
												</div>
													<h4>$80.99 <span>$105.00</span></h4>
											</div>
											<div class="snipcart-details top_brand_home_details">
												<form action="#" method="post">
													<fieldset>
														<input type="hidden" name="cmd" value="_cart">
														<input type="hidden" name="add" value="1">
														<input type="hidden" name="business" value=" ">
														<input type="hidden" name="item_name" value="Pepsi soft drink">
														<input type="hidden" name="amount" value="80.00">
														<input type="hidden" name="discount_amount" value="1.00">
														<input type="hidden" name="currency_code" value="USD">
														<input type="hidden" name="return" value=" ">
														<input type="hidden" name="cancel_return" value=" ">
														<input type="submit" name="submit" value="Add to cart" class="button">
													</fieldset>
												</form>
											</div>
										</div>
									</figure>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 top_brand_left-1">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid_pos">
									<img src="images/offer.png" alt=" " class="img-responsive">
								</div>
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
												<a href="products.html"><img title=" " alt=" " src="images/17.png"></a>		
												<p>Channa-dal</p>
												<div class="stars">
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star gray-star" aria-hidden="true"></i>
												</div>
													<h4>$35.99 <span>$55.00</span></h4>
											</div>
											<div class="snipcart-details top_brand_home_details">
												<form action="#" method="post">
													<fieldset>
														<input type="hidden" name="cmd" value="_cart">
														<input type="hidden" name="add" value="1">
														<input type="hidden" name="business" value=" ">
														<input type="hidden" name="item_name" value="Fortune Sunflower Oil">
														<input type="hidden" name="amount" value="35.99">
														<input type="hidden" name="discount_amount" value="1.00">
														<input type="hidden" name="currency_code" value="USD">
														<input type="hidden" name="return" value=" ">
														<input type="hidden" name="cancel_return" value=" ">
														<input type="submit" name="submit" value="Add to cart" class="button">
													</fieldset>
												</form>
											</div>
										</div>
									</figure>
								</div>
							</div>
						</div>
					</div> -->
						<div class="clearfix"> </div>
				</div>
		</div>
	</div>
<!-- //new -->

<!-- footer -->

<?php include_once('footer.php'); ?>

<!-- Bootstrap Core JavaScript -->
<!-- <script src="js/bootstrap.min.js"></script> -->

<!-- top-header and slider -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->


</body>
</html>