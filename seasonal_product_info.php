<?php
if(session_status()!=PHP_SESSION_ACTIVE)session_start();
?>
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!-- Modifier and Creator

Creator: Ankit Kumar
Algorithms Author : Ankit Kumar
Profile : https://www.linkedin.com/in/ankitk645/

-->
<?php
if(isset($_SESSION['email']))
{
	
	$sess=$_SESSION['email'];
	$con=new mysqli('localhost','upchaaar_root','babloo@098765','upchaaar_meds');
	$query= $con->query("select * from usersdata where email='$sess'");
	$info=$query->fetch_assoc();
}
?>
<?php
$p_id=$_REQUEST['p_id'];

if($p_id!=TRUE)
{
	header('Location:index.php');
}
?>
<?php
                                        $con=new mysqli('localhost','upchaaar_root','babloo@098765','upchaaar_meds');
                                        $query= $con->query("select * from products where id='$p_id' && flag='seasonal_products'");
                                        $row = $query->fetch_assoc();
										
										
                                         ?>
<!DOCTYPE html>
<html>
<head>
<title>Buy <?php echo $row['name'];?> | Buy Medicines Online, Fast Delivery Upchaaar.com</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="#" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
 <script src='js/okzoom.js'></script>
  <script>
    $(function(){
      $('#example').okzoom({
        width: 150,
        height: 150,
        border: "1px solid black",
        shadow: "0 0 5px #000"
      });
    });
  </script>
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
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
	<div class="agileits_header">
		<div class="w3l_offers">
			<a href="products.php">Today's special Offers !</a>
		</div>
		<div class="w3l_search">
			<form action="products_search.php" method="GET">
				<input type="text" name="Product" value="Search a product..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search a product...';}" required="">
				<input type="submit" value=" ">
			</form>
		</div>
		<div class="product_list_header">  
			<form action="#" method="post" class="last">
                <fieldset>
                    <input type="hidden" name="cmd" value="_cart" />
                    <input type="hidden" name="display" value="1" />
                    <input type="submit" name="submit" value="View your cart" class="button" />
                </fieldset>
            </form>
		</div>
		<div class="w3l_header_right">
			<ul>
				<li class="dropdown profile_details_drop">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
					<div class="mega-dropdown-menu">
						<div class="w3ls_vegetables">
							<?php
							if(isset($sess))
                                     {
	                                       echo "<ul class='dropdown-menu drp-mnu'>
							    
								<li>".$info['name']."</li> 
								<li><a href='account_info.php'>Account Info</a></li>
								<li><a href='logout.php'>Log Out</a></li>
							</ul>";
                                     }
									 else 
									 {
										 echo "<ul class='dropdown-menu drp-mnu'>
							    
								<li><a href='login.php'>Login</a></li> 
								<li><a href='login.php'>Sign Up</a></li>
							</ul>";
									 }
							?>
						</div>                  
					</div>	
				</li>
			</ul>
		</div>
		<div class="w3l_header_right1">
			<h2><a href="mail.php">Contact Us</a></h2>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- script-for sticky-nav -->
	<script>
	$(document).ready(function() {
		 var navoffeset=$(".agileits_header").offset().top;
		 $(window).scroll(function(){
			var scrollpos=$(window).scrollTop(); 
			if(scrollpos >=navoffeset){
				$(".agileits_header").addClass("fixed");
			}else{
				$(".agileits_header").removeClass("fixed");
			}
		 });
		 
	});
	</script>
<!-- //script-for sticky-nav -->
<div class="logo_products">
		<div class="container">
			<div class="w3ls_logo_products_left">
			<?php
$con=new mysqli('localhost','upchaaar_root','babloo@098765','upchaaar_meds');
$query= $con->query("select * from basics");
$basic = $query->fetch_assoc();
?>
				<h1><a href="index.php"><span><?php echo $basic['site_name']; ?></span> <?php echo $basic['site_2name']; ?></a></h1>
			</div>
			<div class="w3ls_logo_products_left1">
			
				<ul class="special_items">
					<li><a href="non-prescriptions/#">PRESCRIPTION</a><i>/</i></li>
					<li><a href="non-prescriptions/baby-and-mother.php">BABY & MOTHER</a><i>/</i></li>
					<li><a href="non-prescriptions/personal-care.php">PERSONAL CARE</a><i>/</i></li>
					<li><a href="non-prescriptions/wellness.php">WELLNESS</a></li>
				</ul>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i><?php echo $basic['contact_nu']; ?></li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:<?php echo $basic['email_id']; ?>"><?php echo $basic['email_id']; ?></a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Home</a><span>|</span></li>
				<li>Seasonal Product Info</li>
			</ul>
		</div>
	</div>
<!-- //products-breadcrumb -->
<!-- banner -->
	<div class="banner">
		<div class="w3l_banner_nav_left">
			<nav class="navbar nav_bottom">
			 <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header nav_2">
				  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
			   </div> 
			   <!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav nav_1">
						<li><a href="non-prescriptions/ortho-support.php">ORTHO SUPPORT</a></li>
						<li><a href="non-prescriptions/senior-care-and-aids.php">SENIOR CARE & AIDS</a></li>
						<li class="dropdown mega-dropdown active">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">OTC<span class="caret"></span></a>				
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>	
										<li><a href="non-prescriptions/otc/mens-care.php">Mens Care</a></li>
										<li><a href="non-prescriptions/otc/womens-care.php">Womens Care</a></li><br>
										
									</ul>
								</div>                  
							</div>				
						</li>
						<li><a href="non-prescriptions/baby-and-mother/maternity-and-mother-care.php">METERNITY & MOTHER CARE</a></li>
						<li><a href="prescriptions/skin-diseases.php">SKIN DISEASES</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">P DRUGS<span class="caret"></span></a>
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>
										<li><a href="prescriptions/anti-convulsants.php">Anti-Convulsants</a></li>
										<li><a href="prescriptions/anti-depressants.php">Anti-Depressants</a></li>
										<li><a href="prescriptions/anti-histamines.php">Anti-Histamines</a></li>
										<li><a href="prescriptions/anti-itch-medications.php">Anti-Itch Medications</a></li>
										<li><a href="prescriptions/analgesics-pain-relievers.php">Analgesics/Pain Relievers</a></li>
									</ul>
								</div>                  
							</div>	
						</li>
						<li><a href="prescriptions/osteoporosis.php">OSTEOPOROSIS</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">HEALTH AID<span class="caret"></span></a>
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>
										<li><a href="non-prescriptions/health-aid/health-monitor-and-equipments.php">Health Monitor & Equipments</a></li>
										<li><a href="non-prescriptions/health-aid/ortho-support.php">Ortho Support</a></li>
									</ul>
								</div>                  
							</div>	
						</li>
						<li><a href="bread.php">NON-PRESCRIPTIONS</a></li>
					</ul>
				 </div><!-- /.navbar-collapse -->
			</nav>
		</div>
		<div class="w3l_banner_nav_right">
			
			<div class="agileinfo_single">
				<h5><?php echo $row['name'];?></h5>
				<div class="col-md-4 agileinfo_single_left">
					<img id="example" src="<?php echo $row['image'];?>" alt=" " class="img-responsive" />
				</div>
				<div class="col-md-8 agileinfo_single_right">
					<div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked>
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
					</div>
					<div class="w3agile_description">
						<h4>Product Details :</h4>
						<p><?php echo $row['description'];?></p>
					</div>
					<div class="snipcart-item block">
						<div class="snipcart-thumb agileinfo_single_right_snipcart">
							<h4>Rs.<?php echo $row['offer_price'];?> <span>Rs.<?php echo $row['price'];?></span></h4>
						</div>
						<div class="snipcart-details agileinfo_single_right_details">
							<form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="<?php echo $row['name'];?>" />
													<input type="hidden" name="amount" value="<?php echo $row['price'];?>" />
													<input type="hidden" name="discount_amount" value="<?php echo $row['discount'];?>" />
													<input type="hidden" name="currency_code" value="INR" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>
											</form>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->
<!-- Seasonal products-->
<div class="top-brands">
		<div class="container">
			<h3>More Seasonal Products</h3>
			<div class="agile_top_brands_grids">
			<?php
                                        $con=new mysqli('localhost','upchaaar_root','babloo@098765','upchaaar_meds');
                                        $query= $con->query("select * from products where flag='seasonal_products' order by id DESC LIMIT 20 ");
                                        while($row4 = $query->fetch_assoc())
										{
										
                                         ?>
				<div class="col-md-3 top_brand_left">
					<div class="hover14 column">
						<div class="agile_top_brand_left_grid">
							<!--<div class="tag"><img src="images/tag.png" alt=" " class="img-responsive" /></div>-->
							<div class="agile_top_brand_left_grid1">
								<figure>
								
									<div class="snipcart-item block" >
										<div class="snipcart-thumb">
										
											<a href="seasonal_product_info.php?p_id=<?php echo $row4['id'];?>"><img title=" " alt=" " src="<?php echo $row4['image'];?>" /></a>		
											<p><?php echo $row4['name'];?></p>
											<h4>Rs.<?php echo $row4['offer_price'];?> <span>Rs.<?php echo $row4['price'];?></span></h4>
										</div>
										<div class="snipcart-details top_brand_home_details">
											<form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="<?php echo $row4['name'];?>" />
													<input type="hidden" name="amount" value="<?php echo $row4['price'];?>" />
													<input type="hidden" name="discount_amount" value="<?php echo $row4['discount'];?>" />
													<input type="hidden" name="currency_code" value="INR" />
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
										<?php } ?>
				
				
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //seasonal products-->
<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="w3agile_newsletter_left">
				<h3>sign up for our newsletter</h3>
			</div>
			<div class="w3agile_newsletter_right">
				<form action="#" method="post">
					<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" value="subscribe now">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //newsletter -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-3 w3_footer_grid">
				<h3>company information</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="mail.php">Contact Us</a></li>
					<li><a href="about.php">About Us</a></li>
					
					<li><a href="services.php">Services</a></li>
					<!--<li><a href="#">In the news</a></li>-->
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>policy info</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="faqs.php">FAQ</a></li>
					<li><a href="privacy.php">privacy policy</a></li>
					<li><a href="privacy.php">terms of use</a></li>
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>Your Account</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="#">Login</a></li>
					<li><a href="#">SignUp</a></li>
					
					
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>twitter posts</h3>
				<ul class="w3_footer_grid_list1">
							<?php
$con=new mysqli('localhost','upchaaar_root','babloo@098765','upchaaar_meds');
$query= $con->query("select * from twitter_posts order by id DESC LIMIT 4");
while($tweet = $query->fetch_assoc())
{
?>
					<li><label class="fa fa-twitter" aria-hidden="true"></label><i><?php echo $tweet['date']; ?></i><span><?php echo $tweet['tweet']; ?></span></li>

					<?php } ?>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<div class="agile_footer_grids">
				<div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
					<div class="w3_footer_grid_bottom">
						<h4>100% secure payments</h4>
						<img src="images/card.png" alt=" " class="img-responsive" />
					</div>
				</div>
				<div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
					<div class="w3_footer_grid_bottom">
						<h5>connect with us</h5>
						<ul class="agileits_social_icons">
							<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#" class="dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="wthree_footer_copy">
				<p>© 2017 Upchaaar.com Medicine Store. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
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
<script src="js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>
</body>
</html>