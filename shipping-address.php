<?php
if(session_status()!=PHP_SESSION_ACTIVE)session_start();
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
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
if (!isset($_SESSION['email']))
{
	header('location:login.php');
}
?>

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
<title>Upchaaar.com: Indian Online Pharmacy | Buy Medicines Online, Fast Delivery</title>
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
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<style>
#mask {
  position:absolute;
  left:0;
  top:0;
  z-index:9000;
  background-color:#000;
  display:none;
}  
#boxes .window {
  position:absolute;
  left:0;
  top:0;
  width:440px;
  height:200px;
  display:none;
  z-index:9999;
  padding:20px;
  border-radius: 15px;
  text-align: center;
}
#boxes #dialog {
  width:450px; 
  height:auto;
  padding:10px;
  background-color:#ffffff;
  font-family: 'Segoe UI Light', sans-serif;
  font-size: 15pt;
}
.maintext{
	text-align: center;
  font-family: "Segoe UI", sans-serif;
  text-decoration: none;
}

#lorem{
	font-family: "Segoe UI", sans-serif;
	font-size: 12pt;
  text-align: left;
}
#popupfoot{
	font-family: "Segoe UI", sans-serif;
	font-size: 16pt;
  padding: 10px 20px;
}
#popupfoot a{
	text-decoration: none;
}
.agree:hover{
  background-color: #D1D1D1;
}
.popupoption:hover{
	background-color:#D1D1D1;
	color: green;
}
.popupoption2:hover{
	
	color: red;
}
<!---------- Confirm Button CSS -->
.proceed_checkout input[type="submit"]{
	margin-left:420px;
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
.proceed_checkout input[type="submit"]:hover{
	background:#84C639;
	border: 1px solid #84C639;
	color:#fff;
}
.name_1 {
    display: inline-block;
    width: 288px;
}
.name_2 {
    position: relative;
    margin-bottom: 12px;
	margin-left:10px;
}
.text_box_name {
    width: 100%;
    font-size: 14px;
    border: 1px solid #e0e0e0;
    outline: none;
    border-radius: 2px;
    padding: 20px 16px 10px 13px;
    box-shadow: none;
    -moz-appearance: textfield /* stylelint-enable property-no-vendor-prefix */;
}
.span_name
{
	 position: absolute;
    left: 0;
	
    padding: 15px 14px 10px;
    font-size: 14px;
    color: #878787;
    pointer-events: none;
    width: 100%;
    transition: -webkit-transform 0.2s ease;
    transition: transform 0.2s ease;
    transition: transform 0.2s ease, -webkit-transform 0.2s ease;
	transform: translate3d(-13.25%, -10px, 0) scale(0.714);

}
.address_1 {
    display: inline-block;
    width: 288px;
}
.address_2 {
    position: relative;
    margin-bottom: 12px;
}
.text_box_address {
    width: 570px;
	margin-left:10px;
    font-size: 14px;
    border: 1px solid #e0e0e0;
    outline: none;
    border-radius: 2px;
    padding: 20px 16px 10px 13px;
    box-shadow: none;
    -moz-appearance: textfield /* stylelint-enable property-no-vendor-prefix */;
}
.span_address
{
	 position: absolute;
    left: 0;
	margin-top:-90px;
	margin-left:10px;
    padding: 15px 14px 10px;
    font-size: 14px;
    color: #878787;
    pointer-events: none;
    width: 100%;
    transition: -webkit-transform 0.2s ease;
    transition: transform 0.2s ease;
    transition: transform 0.2s ease, -webkit-transform 0.2s ease;
	transform: translate3d(-13.25%, -10px, 0) scale(0.714);

}
.place_button
{
	position:relative;
	font-size: 20px; margin-left:330px; background-color: #4CAF50; border:none; color:white;
							cursor: pointer; width:250px; height:50px; margin-top:15px;
}

.place_button:hover
{
	background-color:red;
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
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- Redirection after 3 seconds script -- -->

<!--
<script>
        var timer = setTimeout(function() {
            window.location='login.php'
        }, 3000);
</script>
-- -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script> 
<script src="css/main.js"></script>
<!-- PHP CODE STARTS HERE -->
<?php
$con=new mysqli('localhost','root','','upchaaar_meds');
$query= $con->query("select * from basics");
$row = $query->fetch_assoc();
?>
<!-- PHP CODE ENDS HERE -->
<!-- header -->
	<div class="agileits_header">
		<div class="w3l_offers">
			<a href="#">We Deliver Healthcare</a>
		</div>
		<div class="w3l_search">
			<form action="products_search.php" method="GET">
				<input type="text" name="Product" value="Search Medicines..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search a product...';}" required="">
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
	</div>
<!-- //header -->
<!-- Address -->
	<div class="banner" style="padding:20px; padding-left:30px; padding-right:60px;">
		<div style="width:680px; float:left;">
		
			<?php
                $con=new mysqli('localhost','root','','upchaaar_meds');
                $query= $con->query("select * from usersdata where email='$sess'");
                $data = $query->fetch_assoc();
			{		
            ?>
			<form method="POST">
				
				<div style="height:60px; border:1px solid #84C639; font-size:22px; padding-top:11px; padding-left:20px; background-color:#84C639; color:white; font-weight:500; font-family: Roboto, Arial, sans-serif;">
					Shipping Address
				</div>
				
				<div style="padding-left:40px; padding-top:30px; font-size:14px; padding-bottom:10px;  background-color:#e6ffee; font-family: Roboto, Arial, sans-serif;">
				
						
						<div class="name_1">
							<div class="name_2">
								<input type="text" value="<?php echo $data['reciever_name'];?>" placeholder="" class="text_box_name" name="fullname" required="" autocomplete="name" tabindex="1">
								<span class="span_name">Name</span>
							</div>
						</div>
						
						<div class="name_1">
							<div class="name_2">
								<input type="text" value="<?php echo $data['mobile'];?>" placeholder="" class="text_box_name" name="mobile" required="" autocomplete="name" tabindex="1">
								<span class="span_name">Mobile</span>
							</div>
						</div>
						
						<div class="clearfix"></div>
						
						<div class="address_1">
							<div class="address_2">
								<textarea type="text" placeholder="" class="text_box_address" name="address" required="" autocomplete="name" tabindex="1"><?php echo $data['address'];?></textarea>
								<span class="span_address">Address(Area and Street)</span>
							</div>
						</div>
						
						<div class="clearfix"></div>
						
						<div class="name_1">
							<div class="name_2">
								<input type="text" value="<?php echo $data['landmark'];?>" placeholder="" class="text_box_name" name="landmark" required="" autocomplete="name" tabindex="1">
								<span class="span_name">Landmark</span>
							</div>
						</div>
						
						<div class="name_1">
							<div class="name_2">
								<input type="text" value="<?php echo $data['city'];?>" placeholder="" class="text_box_name" name="city" required="" autocomplete="name" tabindex="1">
								<span class="span_name">City/Town</span>
							</div>
						</div>
						
						<div class="clearfix"></div>
						
						<div class="name_1">
							<div class="name_2">
								<input type="text" value="<?php echo $data['state'];?>" placeholder="" class="text_box_name" name="state" required="" autocomplete="name" tabindex="1">
								<span class="span_name">State</span>
							</div>
						</div>
						
						<div class="name_1">
							<div class="name_2">
								<input type="text" value="<?php echo $data['pin'];?>" placeholder="" class="text_box_name" name="pin" required="" autocomplete="name" tabindex="1">
								<span class="span_name">PIN</span>
							</div>
						</div>
						
						<input class="place_button" style="" type="submit" value="Proceed to checkout" name="Submit">
							
						
				</div>
			</form>
			
			<?php } ?>
			
			<?php
			
				if(isset($_POST['Submit']))
				{
					$reciever_name=$_POST['fullname'];
					$mobile=$_POST['mobile'];
					$address=$_POST['address'];
					$landmark=$_POST['landmark'];
					$city=$_POST['city'];
					$state=$_POST['state'];
					$pin=$_POST['pin'];
					
					$conn=new mysqli('localhost','root','','upchaaar_meds');
					
					if ($conn->connect_error) 
					{
						die("Connection failed: " . $conn->connect_error);
					}

					$sql = "UPDATE usersdata SET reciever_name='$reciever_name', mobile='$mobile' address='$address', landmark='$landmark', city='$city', state='$state', pin='$pin' WHERE email=$sess";
	
					if ($conn->query($sql) == TRUE) 
					{
						echo "Address updated successfully";
						header('location:review-order.php');
					} 
					else 
					{
						echo "Error updating Address: " . $conn->error;
					}

					$conn->close();
				}
			?>
			
		</div>
		<!-- Cart -->
		<div style="float:right; width:550px;">
			
			<div>
					<div style="height:60px; border:1px solid #84C639; font-size:22px; padding-top:11px; padding-left:20px; background-color:#84C639; color:white; font-weight:500; font-family: Roboto, Arial, sans-serif;">
					Order Summary 
					</div>
					<div style="padding-left:40px; padding-top:10px; font-size:14px; padding-bottom:10px;  background-color:#e6ffee; font-family: Roboto, Arial, sans-serif;">
						Order Summary : ORDERS IN CART 
					</div>
			</div>
			
		</div>
		<div class="clearfix"> </div>
	</div>
	<div class="clearfix"> </div>

<!-- footer -->
	<footer class="HJlsB9 _1ajLs1" data-reactid="274">
				<div class="TW4owM" data-reactid="275">
				<div data-reactid="276"><div class="row" data-reactid="325">
				<div class="_1DXv5h col col-8-12" data-reactid="326">
				<span class="_2tFDQF" data-reactid="334"><!-- react-text: 335 -->© 2017-<!-- /react-text -->
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