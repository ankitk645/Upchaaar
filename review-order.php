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

Algorithms Author : Ankit Kumar
Profile : https://www.linkedin.com/in/ankitk645/

-->
<?php
if(isset($_SESSION['email']))
{
	
	$sess=$_SESSION['email'];
	$con=new mysqli('localhost','root','','upchaaar_meds');
	$query= $con->query("select * from usersdata where email='$sess'");
	$info=$query->fetch_assoc();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Order Review | Upchaaar.com: Indian Online Pharmacy | Buy Medicines Online, Fast Delivery</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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
<!---------- Confirm Button CSS -->
<style>
.confirm_order input[type="submit"]{
	margin-left:400px;
	margin-top:20px;
	outline: none;
    padding: 10px 0;
    background: #FA1818;
    border: 1px solid #fff;
    font-size: 14px;
    color: #fff;
    width: 25.7%;
    text-transform: uppercase;
}
.confirm_order input[type="submit"]:hover{
	background:#84C639;
	border: 1px solid #84C639;
	color:#fff;
}
.HJlsB9._1ajLs1 {
    background-color: inherit;
}
.HJlsB9 {
    background-color: #fff;
    min-width: 978px;
    margin-top: 25px;
    border-top: 1px solid #ddd;
}
.TW4owM {
    width: 90%;
    margin: 0 auto;
    text-align: left;
    padding: 25px;
}

.col-8-12 {
    width: 66.66%;
}
.col {
    display: inline-block;
    vertical-align: top;
    width: 100%;
}
._1DXv5h {
    color: #565656;
    font-weight: 300;
    line-height: 31px;
	font-size: 14px;
}
._1DXv5h ._3llQHu {
    padding: 0 5px;
    border-right: 1px solid #878787;
}
._2tFDQF {
    margin-left: 25px;
}
.col-4-12 {
    width: 33.33%;
}
._2uGUAL {
    text-align: right;
}
._1DXv5h ._2y0pv_ {
    color: #2874f0;
}
</style>
</head>
	<?php
$con=new mysqli('localhost','root','','upchaaar_meds');
$query= $con->query("select * from basics");
$row = $query->fetch_assoc();
?>
<body>
<!-- header -->
	<div class="agileits_header">
		<div class="w3l_offers">
			<a href="products.php">Upchaaar.com</a>
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
				<h1><a href="index.php"><span><?php echo $row['site_name']; ?></span> Upchaaar</a></h1>
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
					<li><i class="fa fa-phone" aria-hidden="true"></i><?php echo $row['contact_nu']; ?></li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:<?php echo $row['email_id']; ?>"><?php echo $row['email_id']; ?></a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
	</div>
<!-- //header -->
	</div>
<!-- //header -->

<!-- banner -->
	
	<div class="banner">
		
			<div style="width:700px; margin-left:60px; float:left; padding-top:20px; padding-bottom:20px">
			
			<?php
                $con=new mysqli('localhost','root','','upchaaar_meds');
                $query= $con->query("select * from usersdata where email='$sess'");
                $data = $query->fetch_assoc();
			{		
            ?>
			
				
				<div>
					<div style="height:60px; border:1px solid #84C639; font-size:22px; padding-top:11px; padding-left:20px; background-color:#84C639; color:white; font-weight:600; font-family: Roboto, Arial, sans-serif;">
					Shipping Address 
					</div>
					<div style="padding-top:10px; padding-bottom:10px; background-color:#e6ffee; font-family: Roboto, Arial, sans-serif;">
						<div style="margin-left:2px; margin-top:2px; width:696px; font-family: Roboto, Arial, sans-serif; padding:20px; background-color:#ffffff; font-family: Roboto, Arial, sans-serif;">
							<table style="font-size:14px; border-collapse: separate; border-spacing: 15px 0px;"><tr>
										<td><input type="radio" name="address" value="address" checked></td><td><b><?php echo $data['reciever_name'];?> &nbsp&nbsp <?php echo $data['mobile'];?></b></td>
										</tr>
										<tr>
										<td></td>
										<td><?php echo $data['address'];?></td>
										</tr>
										<tr>
										<td></td><td> Landmark - <?php echo $data['landmark'];?> , <?php echo $data['city'];?> , <?php echo $data['state'];?></td>
										</tr>
										<tr>
										<td></td><td>PIN - <?php echo $data['pin'];?></td>
										</tr>
							</table>
						</div>	
					</div>
				</div>
				
				<div>
					<div style="height:60px; margin-top:20px; border:1px solid #84C639; font-size:22px; padding-top:11px; padding-left:20px; background-color:#84C639; color:white; font-weight:600; font-family: Roboto, Arial, sans-serif;">
					Order Summary 
					</div>
					<div style="padding-left:40px; padding-top:10px; font-size:14px; padding-bottom:10px;  background-color:#e6ffee; font-family: Roboto, Arial, sans-serif;">
						Order Summary : ORDERS IN CART 
					</div>
				</div>
				<div>
					<div style="height:60px; font-family: Roboto, Arial, sans-serif; margin-top:20px; border:1px solid #84C639; font-size:22px; padding-top:11px; padding-left:20px; background-color:#84C639; color:white; font-weight:600; font-family: Roboto, Arial, sans-serif;">
					Payment Method 
					</div>
					<div style="font-family: Roboto, Arial, sans-serif; padding-top:10px; padding-bottom:10px; background-color:#ddffcc; 	font-family: Roboto, Arial, sans-serif;">
								<div style="margin-left:2px; font-size:14px; height:60px; width:696px; font-family: Roboto, Arial, sans-serif; padding:20px; background-color:#ffffff;">
									<input type="radio" name="payments" value="cod"> Cash On Delivery
								</div>
								<div style="margin-left:2px; font-size:14px; margin-top:2px; height:60px; width:696px; font-family: Roboto, Arial, sans-serif; padding:20px; background-color:#ffffff;">
									<input type="radio" name="payments" value="net_banking"> Net Banking
								</div>
								<div style="margin-left:2px; font-size:14px; margin-top:2px; height:60px; width:696px; font-family: Roboto, Arial, sans-serif; padding:20px; background-color:#ffffff;">
									<input type="radio" name="payments" value="credit_debit_card"> Credit/Debit Card
								</div>
								
								<div class='confirm_order'>
									<input type="submit" value="Confirm Order" name="Submit"> 
									<a href="#">Cancel Order</a>
								</div>
					</div>	
				</div>
				
			<?php
			}
			?>
			</div>
			<div style="float:left; width:500px; padding-top:20px; margin-left:20px;">
			
			<div>
					<div style="height:60px; border:1px solid #fb641b; font-size:22px; padding-top:11px; padding-left:20px; background-color:#fb641b; color:white; font-weight:600; font-family: Roboto, Arial, sans-serif;">
					Price Details
					</div>
					
					<div style="margin-left:2px; font-size:14px; margin-top:2px; height:60px; width:696px; font-family: Roboto, Arial, sans-serif; padding:20px; background-color:#ffffff;">
					Price
					</div>
					
					
					
					
			</div>
			
		</div>
		<div class="clearfix"></div>
	</div>
	
<!-- //banner -->

<!-- footer -->
	<footer class="HJlsB9 _1ajLs1" data-reactid="274">
				<div class="TW4owM" data-reactid="275">
				<div data-reactid="276"><div class="row" data-reactid="325">
				<div class="_1DXv5h col col-8-12" data-reactid="326">
				<span class="_2tFDQF" data-reactid="334"><!-- react-text: 335 -->?? 2017-<!-- /react-text -->
				<!-- react-text: 336 -->2018<!-- /react-text --><!-- react-text: 337 --> <!-- /react-text --><span data-reactid="338">Upchaaar.com. Medicine Store. All rights reserved. </span>
				<div class="_1DXv5h _2uGUAL col col-4-12" data-reactid="339"><span data-reactid="340"> My Account </span><span><!-- react-text: 4196 --><!-- /react-text --><a href="login.php" class="_2y0pv_"> Login / Signup</a><!-- react-text: 4198 --> or Need Help?<!-- /react-text --><a href="http://upchaaar.com/contact_us.php" class="_2y0pv_"> Contact Us</a></span></div><a href="faqs.php" class="_2y0pv_" style="float:right; margin-left:10px; margin-right:10px;"> FAQ </a><a href="policy.php" class="_2y0pv_" style="float:right; margin-left:10px; margin-right:10px;"> Policy </a><a href="tos.php" class="_2y0pv_" style="float:right; margin-left:10px; margin-right:10px;"> Terms</a>
				
				
				</span></div></div></div><!-- react-empty: 4200 --></div>
</footer>
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