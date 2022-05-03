<?php
if(session_status()!=PHP_SESSION_ACTIVE)session_start();
?>
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
if (isset($_SESSION['email']))
{
	header('location: index.php');
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login to Upchaaar.com Indian Online Pharmacy | Buy Medicines Online, Fast Delivery </title>
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
<style>
 /* The alert message box */
.alert {
	margin-top:-65px;
    padding: 20px;
    background-color: #4CAF50; 
    color: white;
    margin-bottom: 15px;
}

/* The close button */
.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

/* When moving the mouse over the close button */
.closebtn:hover {
    color: black;
}
</style>
<style>
/* The alert message box */
.alert2 {
	
    padding: 20px;
    background-color: #f44336; 
    color: white;
    margin-bottom: 15px;
}

/* The close button */
.closebtn2 {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

/* When moving the mouse over the close button */
.closebtn2:hover {
    color: black;
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
.row {
    width: 100%;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-flow: row wrap;
    -ms-flex-flow: row wrap;
    flex-flow: row wrap;
}.col-8-12 {
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
	<?php
$con=new mysqli('localhost','upchaaar_root','babloo@098765','upchaaar_meds');
$query= $con->query("select * from basics");
$row = $query->fetch_assoc();
?>
<body>
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
							<ul class="dropdown-menu drp-mnu">
								<li><a href="login.php">Login</a></li> 
								<li><a href="login.php">Sign Up</a></li>
							</ul>
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
				<h1><a href="index.php"><span>.com</span> Upchaaar</a></h1>
			</div>
			<div class="w3ls_logo_products_left1">
			
				<ul class="special_items">
					<li><a href="#">UPCHAAAR SERVICES</a><i>/</i></li>
					<li><a href="non-prescriptions/baby-and-mother.php">BABY & MOTHER</a><i>/</i></li>
					<li><a href="non-prescriptions/personal-care.php">PERSONAL CARE</a><i>/</i></li>
					<li><a href="non-prescriptions/wellness.php">WELLNESS</a></li>
				</ul>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>+91 9878987876</li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:support@upchaaar.com">support@upchaaar.com</a></li>
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
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.html">Home</a><span>|</span></li>
				<li>Sign In & Sign Up</li>
			</ul>
		</div>
	</div>
<!-- //products-breadcrumb -->
<!-- banner -->
	<div class="banner">
		<center>
		<div class="w3l_banner_nav_right_log">
<!-- login -->
 <script>
     function checkAvailability() {
jQuery.ajax({
url: "check_availability.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
},
error:function (){}
});
}
 </script>

 
		<div class="w3_login">
			<h3>Sign In & Sign Up</h3>
			<div class="w3_login_module">
				<div class="module form-module">
				  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
					<div class="tooltip">Click Me</div>
				  </div>
				  <div class="form">
					<h2>Login to your account</h2>
					<form action="#" method="POST">
					  <input type="text" name="email" placeholder="Username" required=" ">
					  <input type="password" name="password" placeholder="Password" required=" ">
					  <input type="submit" value="Login" name="login">
					</form>
				  </div>
				  <div class="form">
					<h2>Create an account</h2>
					<form action="#" method="post">
					<input type="text" name="Name" placeholder="Name" required=" ">
					<input type="email" id="email" name="email" placeholder="Email Address" onBlur="checkAvailability()" required=" ">
					<div style="position: relative;">
					  
					  <span id="user-availability-status" style="float: right; margin-top: -53px; margin-right: 10px;"></span>
					</div>
					  
					  <input type="text" name="Phone" placeholder="Phone Number" required=" ">
					  <input type="submit" value="Register" name="signup" id="register" >
					</form>
				  </div>
				  
				  <div class="cta"><a href="#">Forgot your password?</a></div>
				</div>
			</div>
<?php 
$con=new mysqli('localhost','upchaaar_root','babloo@098765','upchaaar_meds');
if(isset($_POST['login']))
{
	$email=$_POST['email'];
    $pwd=$_POST['password'];
	$login_number= base_convert(uniqid('pass', true), 30, 29);
	$query=$con->query("select * from usersdata where email='$email' AND password='$pwd'");
	$count=$query->fetch_assoc();
	if($count==TRUE)
	{
		$_SESSION['email']="$email";
		if(isset($_SESSION['url']))
		{
			$url = $_SESSION['url']; 
		}
		else 
		{
			$url = "index.php"; 
		}
		
		
		
		echo "<script>window.location.href='$url'</script>";
		
	}
	else
	{
		echo "<script>window.location.href='login.php?error=password&username_mismatch'</script>";
	}	
}
?>
<?php

if(isset($_POST['signup']))
{
	$email=$_POST['email'];
	function generateRandomString($length = 10) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

    $pass= generateRandomString();

	$phone=$_POST['Phone'];
    $name=$_POST['Name'];
	// Create connection
$conn=new mysqli('localhost','upchaaar_root','babloo@098765','upchaaar_meds');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO usersdata (name, email, mobile, password)
VALUES ('$name', '$email', '$phone', '$pass')";

if ($conn->query($sql) === TRUE) {
    echo "<div class='alert'>
  <span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span>
  <strong>Success! </strong>Your Login Credentials has been sent to your Email.
</div>";


// mail

$to = "$email";

$subject = "Account Created";

$headers = "From: " . strip_tags('info@upchaaar.com') . "\r\n";
$headers .= "Reply-To: ". strip_tags('info@upchaaar.com') . "\r\n";
$headers .= "BCC: ankit@upchaaar.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = '<html><body>';
$message .= '<img src="http://upchaaar.com/images/logos/upchaaar.png">';
$message .= "<br><br><strong>Congratulations! You are ready to use Upchaaar.com as your own online pharmacy store. Below is your credentials-</strong><br><br>";
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['Name']) . "</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['Email']) . "</td></tr>";
$message .= "<tr><td><strong>Password:</strong> </td><td>" . strip_tags($pass) . "</td></tr>";
$message .= "<tr><td><strong>Mobile:</strong> </td><td>" . strip_tags($_POST['Phone']) . "</td></tr>";
$message .= "<tr><td><strong>For Login</strong> </td><td> <span><a href='http://www.upchaaar.com/login.php'>Click here</a></span></td></tr>";


$message .= "</table>";
$message .= "</body></html>";

mail($to, $subject, $message, $headers);

} 

else {
    echo "<div class='alert2'>
  <span class='closebtn2' onclick='this.parentElement.style.display='none';'>&times;</span>
  <strong>Failed! </strong>Please try again!.
</div>";
}

$conn->close();
}
?>
			<script>
				$('.toggle').click(function(){
				  // Switches the Icon
				  $(this).children('i').toggleClass('fa-pencil');
				  // Switches the forms  
				  $('.form').animate({
					height: "toggle",
					'padding-top': 'toggle',
					'padding-bottom': 'toggle',
					opacity: "toggle"
				  }, "slow");
				});
			</script>
		</div>
<!-- //login -->
		</div>
		</center>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->
<!-- newsletter-top-serv-btm -->
	<!--<div class="newsletter-top-serv-btm">
		<div class="container">
			<div class="col-md-4 wthree_news_top_serv_btm_grid">
				<div class="wthree_news_top_serv_btm_grid_icon">
					<i class="fa fa-shopping-cart" aria-hidden="true"></i>
				</div>
				<h3>Nam libero tempore</h3>
				<p>Temporibus autem quibINRam et aut officiis debitis aut rerum necessitatibus 
					saepe eveniet ut et voluptates repudiandae sint et.</p>
			</div>
			<div class="col-md-4 wthree_news_top_serv_btm_grid">
				<div class="wthree_news_top_serv_btm_grid_icon">
					<i class="fa fa-bar-chart" aria-hidden="true"></i>
				</div>
				<h3>officiis debitis aut rerum</h3>
				<p>Temporibus autem quibINRam et aut officiis debitis aut rerum necessitatibus 
					saepe eveniet ut et voluptates repudiandae sint et.</p>
			</div>
			<div class="col-md-4 wthree_news_top_serv_btm_grid">
				<div class="wthree_news_top_serv_btm_grid_icon">
					<i class="fa fa-truck" aria-hidden="true"></i>
				</div>
				<h3>eveniet ut et voluptates</h3>
				<p>Temporibus autem quibINRam et aut officiis debitis aut rerum necessitatibus 
					saepe eveniet ut et voluptates repudiandae sint et.</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>-->
<!-- //newsletter-top-serv-btm -->

<!-- footer -->
	<footer class="HJlsB9 _1ajLs1" data-reactid="274">
				<div class="TW4owM" data-reactid="275">
				<div data-reactid="276"><div class="row" data-reactid="325">
				<div class="_1DXv5h col col-8-12" data-reactid="326">
				<span class="_2tFDQF" data-reactid="334"><!-- react-text: 335 -->© 2017-<!-- /react-text -->
				<!-- react-text: 336 -->2017<!-- /react-text --><!-- react-text: 337 --> <!-- /react-text --><span data-reactid="338">Upchaaar.com. Medicine Store. All rights reserved. </span>
				<div class="_1DXv5h _2uGUAL col col-4-12" data-reactid="339"><span data-reactid="340">Need help? </span><span><!-- react-text: 4196 -->Visit the<!-- /react-text --><a href="/s/help?otracker=undefined_footer_navlinks" class="_2y0pv_"> Help Center</a><!-- react-text: 4198 --> or<!-- /react-text --><a href="/helpcentre?otracker=undefined_footer_navlinks" class="_2y0pv_"> Contact Us</a></span></div>
				</span></div></div></div><!-- react-empty: 4200 --></div></footer>
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