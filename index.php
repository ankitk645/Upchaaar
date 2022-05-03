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
	$c_id=$info['id'];
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
<!---- Mobile Redirect ---->
<script type="text/javascript">
 <!--
  if (screen.width <= 700) {
  window.location = "http://m.upchaaar.com";
  }
 //-->
</script>
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
.search_bgr{
	background: #84C639;
width: 80%;
height: auto;
margin: 10px 0 14px;
opacity: .94;
padding: 15px 5px;
color: #262523;
font-size: 22px;
display: inline-block;

}
.search_bgr .col-sm-9 {
    width: 72%;
    display: inline-block;
    float: left;
}
.padding-none {
    padding: 0 !important;
}
.search_mrg {
    margin: 7px 0 25px -2px;
    display: inline-block;
}
.clear1 {
    clear: both;
    height: 10px;
}
.search_inputbg {
    height: auto;
    background: #FFF;
   margin-top:7px;
  
   box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2);
    padding: 3px;
    margin-right: 8px;
    float: left;
}
.pull-left {
    float: left !important;
	margin-left: 23px;
}

.algolia-autocomplete {
    width: 100%;
}

.search_bgr input[type="text"] {
    height: 34px !important;
    padding-top: 0;
    margin-bottom: -6px;
}
.search_bgr input[type="text"] {
    width: 545px;
    border: none;
        border-top-color: currentcolor;
        border-right-color: currentcolor;
        border-bottom-color: currentcolor;
        border-left-color: currentcolor;
    float: left;
    font-weight: 200;
    padding: 0 10px;
        padding-top: 0px;
    font-size: 18px;
    outline: 0;
}
pre {
    display: block;
    padding: 9.5px;
    margin: 0 0 10px;
    font-size: 13px;
    line-height: 1.42857143;
    color: #333;
    word-break: break-all;
    word-wrap: break-word;
    background-color: #f5f5f5;
    border: 1px solid #ccc;
    border-radius: 4px;
}
aa-dropdown-menu {
    background-color: #FFF;
    border: 2px solid rgba(228,228,228,.6);
        border-top-width: 2px;
    border-top-width: 1px;
    font-family: open_sansregular;
    margin-top: 10px;
    font-size: 13px;
    border-radius: 4px;
    box-sizing: border-box;
    width: 100%;
    overflow-y: scroll;
    max-height: 180px;
}
.search-select {
    height: 36px;
    display: none;
}
.search-select select {
    border: none;
    color: #505052;
    display: inline;
    height: 36px;
    width: 230px;
    float: left;
    box-shadow: none;
    font-size: 18px;
    font-style: italic;
    padding: 0;
    -webkit-appearance: none;
    background-color: #fff;
}
.search_btn {
    float: right;
	height:32px;
}
.search_bgr button {
    background-color: #231f20;
   
    font-size: 20px;
    font-weight: 200;
    padding: 7px 29px 6px;
    border: none;
    color: #fff;
    cursor: pointer;
	margin-top:7px;
}
.search_divd {
    border-left: 2px solid #231f20;
    height: 117px;
    margin: 0 9px;
}
.search_bgr .col-sm-3 {
    width: 26%;
    display: inline-block;
    float: right;
}
.padding-none {
    padding: 0 !important;
}
.search_mrg {
    margin: 7px 0 25px -2px;
    display: inline-block;
}
.clear1 {
    clear: both;
    height: 10px;
}
.search_upd {
    margin: 0 auto;
}

.sub-content > .sub-content-container {
    padding-bottom: 60px;
    text-align: center;
}
.how-to-order {
    background-color: #fff;
    padding: 15px 0;
	border-radius: 2px;
	width: 1344px;
box-shadow: 0 1px 2px 0 rgba(0, 0, 0, .2);

}
.row {
    margin-top: 10px;
}
.row {
    margin-left: -15px;
    margin-right: -15px;
}
.row {
    margin-top: 10px;
}
.col-md-offset-1 {
    margin-left: 8.33333333%;
}
.col-md-offset-1 {
    margin-left: 8.33333333%;
}
.col-md-12 {
    width: 100%;
	float: left;
}
.circle-wrap {
    display: table;
    height: 80px;
	margin-left: 65px;
}
.circle-wrap > div {
    display: table-cell;
    vertical-align: middle;
}
.dots-line {
    display: inline-block;
    height: 1px;
    width: 100%;
    position: absolute;
    background-color: green;
    margin-top: 15px;
    margin-left: 30px;
}
.circle-filled {
    width: 30px;
    height: 30px;
    background-color: #4a9034;
    border-radius: 15px;
    display: inline-block;
    vertical-align: middle;
}
.steps-text {
    line-height: 27px;
    font-family:sans-serif;
	font-weight:500;
    font-size: 23px;
	
}

#we-call-section {
    text-align: center;
}

.bg-grey {
    background: #f8f8f8;
}

.wc_row {
    margin-left: -10px;
    margin-right: -10px;
}

.col-1, .col-4, .col-8, .col-16, .col-24 {
    
	position: relative;
    min-height: 1px;
    padding-left: 10px;
    padding-right: 10px;
    float: left;

}

.col-24 {
    width: 100%;
}

.col-1 
{
	width: 4.16666667%;
}

.wc-title {
    font-size: 36px;
    color: #037b55;
    margin: 50px 0 0;
	font-family: SFNS Display,Helvetica Neue,Helvetica,Arial,sans-serif;
    letter-spacing: .5px;

}
.wc-desc {
    font-size: 30px;
	font-weight:600;
}
.wc-container {
    margin-top: 70px;
    margin-left: 80px;
    height: 200px;
}

.wc-container .flow {
    height: 125px;
    display: inline-block;
    float: left;
}
.wc-container .medicine {
    padding: 0;
}
.col-4 {
    width: 16.66666667%;
}

.wc-container .flow-image {
    height: 130px;
    width: 130px;
	margin-left: -30px;
margin-right: -20px;

}
.wc-container .medicine .wc-desc {
    margin: 22px 0 10px;
    font-weight: 800;
    color: dimgray;
    font-size: 16px;
}
.wc-container .arrow {
    margin-top: 40px;
}
.wc-container .arrow-image {
    width: 100px;
    max-width: 100%;
    max-height: 15px;
    margin-top: 55px;
    padding: 0 15px;
    float: left;
	margin-left: -35px;
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
.easy-section {
    min-height: calc(100vh - 81px - 96px);
    position: relative;
    letter-spacing: .5px;
	background-color: #fff;

}
#top-section .top-row {
    margin: 40px -10px;
}
.col-16 {
    width: 66.66666667%;
}

.col-8 {
    width: 33.33333333%;
}
.savings {
	font-family:sans-serif;
	font-weight: normal;
    font-size: 24px;
    line-height: 40px;
    margin: 0;
    letter-spacing: 1px;
}
.inline-block {
    display: inline-block;
}

.download-button.android {
    background-image: url(images/xDnhbnUymk87bkNbin.png);
    background-position-y: center;
}
.download-button.android:hover
{
	background-color:#fff;
	color:#353535;
}
.download-button.ios {
    margin-right: 0;
    background-image: url(images/7867gUygg87gu7gg87ggynBU97.png);
    background-size: 22px;
}
.download-button.ios:hover
{
	background-color:#fff;
	background-image: url(images/7867gUygg87gu7gg87ggynBU97hv.png);
	background-position-y: center;
	color:#353535;
}

.download-button {
    background-color: #353535;
    color: #fff;
    padding: 12px 15px 10px 45px;
    font-size: 15px;
    font-weight: 700;
    border-radius: 5px;
    margin-right: 10px;
    background-size: 25px;
    background-position: calc(0% + 12px) 8px;
        background-position-y: 8px;
    background-position-y: 8px;
    background-repeat: no-repeat;
    box-shadow: 2px 2px 2px 0 #ddd;
    height: 45px;
    width: auto;
    margin-bottom: 10px;
}

.quick-order-btn {
    margin-top: 5px;
    font-weight: 700;
    display: block;
    border-radius: 4px;
    padding: 10px;
    text-align: center;
    background-color: #12926f;
    color: #fff;
    font-size: 15px;
    cursor: pointer;
}
.or-class {
    text-align: center;
    line-height: 25px;
    position: relative;
    color: #a7a7a7;
    margin: 5px 0;
}
#order-overlay {
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    z-index: 9999;
    background-color: rgba(0,0,0,.44);
    overflow: auto;
    display: none;
}
#order-overlay .overlay-content {
    padding: 80px 100px 50px;
    background-color: #fff;
    width: 600px;
    max-width: 100vw;
    position: absolute;
    right: 0;
    min-height: 100vh;
}
#order-overlay .order-close {
    position: absolute;
    top: 20px;
    left: 25px;
    cursor: pointer;
}

/* Formatting search box */
    .search-box{
        width: 480px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
		padding:19px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"]{
        width: 100%;
        box-sizing: border-box;
    }
	.result{
        width: 100%;
        box-sizing: border-box;
    }
	
	
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
		background-color:#f2f2f2;
    }
    .result p:hover{
        background: #e6e6e6;
    }



</style>
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
<!---- Search Script ---->
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("adv-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>

<?php if(isset($_GET['status']) & !empty($_GET['status'])){ 
			if($_GET['status'] == 'success'){
				echo "<div class=\"alert alert-success\" role=\"alert\">Item Successfully Added to Cart</div>";
			}elseif ($_GET['status'] == 'incart') {
				echo "<div class=\"alert alert-info\" role=\"alert\">Item is Already Exists in Cart</div>";
			}elseif ($_GET['status'] == 'failed') {
				echo "<div class=\"alert alert-danger\" role=\"alert\">Failed to Add item, try to Add Again</div>";
			}
			elseif ($_GET['status'] == 'no_item_in_cart') {
				echo "<div id='boxes'>
  <div style='top: 199.5px; left: 551.5px; display: none;' id='dialog' class='window'>No items in Cart<hr style='border: 2px solid #000; margin-top:2px;'>
   
    <div id='popupfoot'> <a href='#' class='close agree' style='margin-right:170px;'>Visit</a> </div>
  </div>
  <div style='width: 1478px; font-size: 32pt; color:white; height: 602px; display: none; opacity: 0.8;' id='mask'></div>
</div>";
			}
	}
?>
<!-- start-smoth-scrolling -->
</head>
	
<body>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script> 
<script src="css/main.js"></script>

<?php
$con=new mysqli('localhost','upchaaar_root','babloo@098765','upchaaar_meds');
$query= $con->query("select * from basics");
$row = $query->fetch_assoc();
?>

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
			<form action="checkout.php" method="post" class="last">
                <fieldset>
                    
                    <input type="hidden" name="display" value="1" />
                    <input type="submit" name="submit" value="<?php
if(isset($_SESSION['email']))
{
	$con=new mysqli('localhost','upchaaar_root','babloo@098765','upchaaar_meds');
	$query2= $con->query("select * from cart where c_id='$c_id'");
	$info2=$query2->fetch_assoc();
	echo $total_item=count($info2['c_id']);
	

}

else
{
	echo "0";
}

?> Items in Cart" class="button" />
					
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
					<li><a href="services.php">UPCHAAAR SERVICES</a><i>/</i></li>
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


<!--Overlay-->


<div id="order-overlay" style="display: none;">

<div class="overlay-content">

<div>

<img class="order-close" src="images/bt677Jh8Jbj9H56bN877ybKhuo9.png">

<div>

<div class="order-form-caption" style="text-align: center; font-size: 18px;">Please fill in your details below</div>

<div style="position: relative; margin: 20px 0px;">

<img src="images/f75g8ia07A21nzxWopnBhb8.png" style="width: 18px; position: absolute; left: 11px; top: 8px;">


<input placeholder="Name" name="name" value="" maxlength="Infinity" style="display: block; width: 100%; padding: 7px 7px 7px 40px; outline: medium none; border-radius: 4px; border: 1px solid rgb(235, 235, 235); box-shadow: 0px 0.5px 1px 0px rgb(235, 235, 235);" type="text" recquired>

</div>

<div style="position: relative; margin: 20px 0px;">

<img src="images/7u8iAm92nJplQmxSeR.png" style="width: 18px; position: absolute; left: 11px; top: 8px;">

<input placeholder="Enter Building Name and Flat No" name="flat_number" value="" maxlength="Infinity" style="display: block; width: 100%; padding: 7px 7px 7px 40px; outline: medium none; border-radius: 4px; border: 1px solid rgb(235, 235, 235); box-shadow: 0px 0.5px 1px 0px rgb(235, 235, 235);" type="text">

</div>

<div style="position: relative; margin: 20px 0px;">

<img src="images/7u8iAm92nJplQmxSeR.png" style="width: 18px; position: absolute; left: 11px; top: 8px;">

<input placeholder="Enter Street Name, Landmark" name="street_name" value="" maxlength="Infinity" style="display: block; width: 100%; padding: 7px 7px 7px 40px; outline: medium none; border-radius: 4px; border: 1px solid rgb(235, 235, 235); box-shadow: 0px 0.5px 1px 0px rgb(235, 235, 235);" type="text">

</div>

<div style="position: relative; margin: 20px 0px;">

<img src="images/41DgyPolXb7t620Kln.png" style="width: 18px; position: absolute; left: 11px; top: 8px;">


<input placeholder="Pincode" name="pincode" value="" maxlength="6" style="display: block; width: 100%; padding: 7px 7px 7px 40px; outline: medium none; border-radius: 4px; border: 1px solid rgb(235, 235, 235); box-shadow: 0px 0.5px 1px 0px rgb(235, 235, 235);" type="text">

</div>

<div style="position: relative; margin: 20px 0px;">

<img src="images/788GhPbQgLbh876BvhZ67MadF.png" style="width: 18px; position: absolute; left: 11px; top: 12px;">

<input multiple="" accept="image/*" style="display: none;" type="file">

<div class="upload-prescription-btn" style="display: block; width: 100%; padding: 7px 7px 7px 40px; outline: medium none; border-radius: 4px; border: 1px solid rgb(235, 235, 235); box-shadow: 0px 0.5px 1px 0px rgb(235, 235, 235); color: rgb(169, 169, 169);">

<span>Upload Prescription</span>

<span style="float: right; color: rgb(3, 123, 85); margin-right: 5px; cursor: pointer;">Browse</span>


</div>

<div style="position: relative; top: -2px;"></div>

<div style="font-size: 11px; color: rgb(128, 128, 128); margin-top: 5px;">

<div><!-- react-text: 76 -->1. Order processing will take longer if you do not upload the prescription now<!-- /react-text --><br><!-- react-text: 78 -->2. You can email (rx@pharmeasy.in) or WhatsApp (99929 99929) your prescription later<!-- /react-text --></div>

</div>

</div>

<div style="position: relative; margin: 20px 0px;">

<img src="images/eBhTD679bxGta79MlaqThs87.png" style="width: 18px; position: absolute; left: 11px; top: 8px;">


<input placeholder="Email" name="profileEmail" value="" maxlength="Infinity" style="display: block; width: 100%; padding: 7px 7px 7px 40px; outline: medium none; border-radius: 4px; border: 1px solid rgb(235, 235, 235); box-shadow: 0px 0.5px 1px 0px rgb(235, 235, 235);" type="email">

</div>

<div style="position: relative; margin: 20px 0px;">

<img src="images/ca7hVgv784njhAeZmlp125Ghj.png" style="width: 18px; position: absolute; left: 11px; top: 8px;">


<input placeholder="Mobile Number" name="mobile_number" value="" maxlength="10" style="display: block; width: 100%; padding: 7px 7px 7px 40px; outline: medium none; border-radius: 4px; border: 1px solid rgb(235, 235, 235); box-shadow: 0px 0.5px 1px 0px rgb(235, 235, 235);" type="text">

<span style="color: rgb(3, 123, 85); margin-right: 5px; cursor: pointer; position: absolute; top: 0px; right: 10px; line-height: 36px; pointer-events: none; opacity: 0.6;">

<span>Send OTP</span>

</span>

<div style="font-size: 11px; color: rgb(128, 128, 128); margin-top: 5px;">* OTP will be sent to verify your number</div>

</div>

<div style="position: relative; margin: 20px 0px;">

<input placeholder="Enter OTP" name="otp" value="" maxlength="4" style="display: block; width: auto; padding: 7px 10px; outline: medium none; border-radius: 4px; border: 1px solid rgb(235, 235, 235); box-shadow: 0px 0.5px 1px 0px rgb(235, 235, 235);" type="text">

</div>

<button class="place-order-btn" style="display: block; width: 100%; border: medium none; padding: 10px; font-size: 18px; border-radius: 4px; background-color: rgb(3, 123, 85); color: rgb(255, 255, 255); text-align: center; outline: medium none; pointer-events: none; opacity: 0.6;">Place Order</button></div></div></div></div>

<!--//overlay-->

<!-- banner -->
<center  style="background-color: #fff;"> 
		<div class="search_bgr">
				<div class="col-sm-9 padding-none">
				<div class="search_mrg">
					<div style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; ">Search from thousands of products available on Upchaaar.com</div>
					<div class="clear1"></div>
					<!-- Search Box ---->
					
					
					<div class="search-box">
						<input type="text" autocomplete="off" placeholder="Search for Prescription Medicines &amp; OTC Products...." /><br>
					<div class="result"></div>
					
					</div>
					
					<!--  Search Button -->
					<div class="search_btn">
					<button onclick="if(!fnCheckEmpty(document.getElementById('header1_keyword').value)) { document.getElementById('header1_keyword').focus(); return false; } __doPostBack('header1$btnSubmitSearch','')" id="header1_btnSubmitSearch" type="submit" title="Submit">Search</button>
					</div>
					
					<!--- Search Result -->
					
					
					<div class="result"></div>
					
				</div>
				
					
					
				</div>
				<div class="search_divd pull-left"></div>
				<div class="col-sm-3 padding-none">
				<div class="search_mrg">
					<div align="center">Upload Prescription</div>
					<div class="clear1"></div>
					<div class="search_upd">
					
					<button title="Upload Prescription" type="button" onclick="location.href = '/upload-prescription'">Upload</button>
					
					</div>
				</div>
				</div>
		</div>
			</center>
	<div class="banner" style="background-color: #fff;">
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
						<li><a href="bread.php">HOMEOPATHY PRODUCTS</a></li>
						
					</ul>
				 </div><!-- /.navbar-collapse -->
			</nav>
		</div>
		<?php
$con=new mysqli('localhost','upchaaar_root','babloo@098765','upchaaar_meds');
$query= $con->query("select * from home_banners");
$row2 = $query->fetch_assoc();
?>
		<div class="w3l_banner_nav_right">
			<section class="slider">
				<div class="flexslider">
				
				
				
				
				
					<ul class="slides">
						<li>
							<div class="w3l_banner_nav_right_banner">
							
								
								<div class="more">
								
									<a href="#" class="button--saqui button--round-l button--text-thick" data-text="Quick Order">Quick Order</a>
								
								</div>
							</div>
						</li>
						<!--<li>
							<div class="w3l_banner_nav_right_banner1">
								<h3>Free home sample pickup - Get reports online<br>
<span>Compare across certified labs</span></h3>
								<div class="more2">
									<a href="products.php" class="button--saqui button--round-l button--text-thick" data-text="Appply">Appply</a>
								</div>
							</div>
						</li>
						<li>
							<div class="w3l_banner_nav_right_banner2">
								<h3>Free Ambulance<br> <span>Service*</span></h3>
								<div class="more3">
									<a href="products.php" class="button--saqui button--round-l button--text-thick" data-text="Get now!">Get now!</a>
								</div>
							</div>
						</li>-->
					</ul>
					
				</div>
				
			</section>
			<!-- flexSlider -->
				<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
		</div>
		
		<div class="clearfix"></div>
	</div>
<!-- banner -->


<!-- Buy Easily-->


<div id="top-section" class="easy-section">


        <div class="container" style="padding-bottom: 40px; width:1020px;">
		  
		  
		    <div class="row top-row">
		   
		        <div class="promo-section col-16 col-xs-24">
			  
			    
				 <h5 class="savings">Flat 15% off on all medical products</h2>
				 
				 <h5 class="savings">Buy medicines via app</h2>
			  
			      
				        <div class="download-app" style="margin-top: 10px;">
					  
					  
					       <a class="download-button android inline-block" href="https://play.google.com/store/apps/details?id=com.phonegap.rxpal&amp;hl=en" target="_blank">Google Play </a>
					  
					       <a class="download-button ios inline-block" href="https://itunes.apple.com/in/app/pharmeasy-discounted-medicines/id982432643?mt=8" target="_blank">App Store</a>
					  
					    </div>
			  
			  
			    </div>
				
				  <script>
				  function showDiv() {
   document.getElementById('order-overlay').style.display = "block";
}
				  </script>
				<div class="col-8 col-xs-24">
				
				    <div class="buy-easy" style="font-size: 15px;">Buy medicine more easily!</div>
					
					<div class="quick-order-btn" onclick="showDiv()">Quick order</div>
					
				    <div class="or-class">or</div>
					
					<div class="quick-order-btn">Order via call</div>
				
				</div>   
		   
		    </div>
		  
		  
		</div>


</div>


<!-- //Buy Easily-->


	
	<!--How to Order-->
	<div style="margin-bottom:-40px; margin-top:-130px;" class="top-brands">
	<div class="clearfix"></div>
	<div class="container">
			<h3>How It Works?</h3>
			</div>
			</div>
			
	<div class="sub-content-container" style="margin-left:20px;">
	
	
	   <div class="row how-to-order" style="padding-bottom: 50px;">
	   
	         <div class="col-md-offset-1 col-md-2">
			 
	               <div class="row">
				   
	                             <div class="col-xs-4 col-md-12 steps-img">
							 
	                                      <img src="images/how-it-works/search.png" alt="Search medicines Online">
	                            </div>
	
	<div class="col-xs-2 col-md-12 circle-wrap">
	
	      <div>
		  
	           <div class="dots-line">
			   
	           </div>
			   
	
	           <div class="circle-filled">
			   
	           </div>
			   
	     </div>
		 
		 
	</div>
	
	
	<div class="col-xs-6 col-md-12 steps-text">
	
	             <div style="margin-left: 40px;">
	
	                  Search
	
	             </div>
	
	
	</div>
	
	
	            </div>
				   
	 			   
	        </div>
			
			
	<div class="col-md-2">
	
	
	<div class="row">
	
	         <div class="col-xs-4 col-md-12 steps-img">
	
	<img src="images/how-it-works/cart.png" alt="Add to cart">
	
	
	         </div>
	
	
	                    <div class="col-xs-2 col-md-12 circle-wrap">
	
	                           <div>
	
	
	                                      <div class="dots-line">
	
	
	                                      </div>
	
	
	<div class="circle-filled">
	
	
	</div>
	
	                             </div>
	
	
	                    </div>
	
	
	
	<div class="col-xs-6 col-md-12 steps-text">
	
	
	
	<div style="margin-left: 20px;">Add to cart</div>
	
	
	
	</div>
	
	
	
	</div>
	
	
	
	</div>
	
	
	<div class="col-md-2">
	
	
	<div class="row">
	
	
	
	<div class="col-xs-4 col-md-12 steps-img">
	
	
	
	<img src="images/how-it-works/prescription.png" alt="order medicines online" title="Upload prescription to Order Medicine">
	
	
	
	</div>
	
	
	
	
	<div class="col-xs-2 col-md-12 circle-wrap"><div><div class="dots-line">
	
	
	
	</div>
	
	
	<div class="circle-filled">
	
	
	
	</div>
	
	
	</div>
	
	
	</div>
	
	
	
	
	<div class="col-xs-6 col-md-12 steps-text">
	
	
	<div>Give prescriptions if needed</div>
	
	
	
	</div>
	
	
	</div>
	
	</div>
	
	<div class="col-md-2">
	
	
	<div class="row">
	
	
	<div class="col-xs-4 col-md-12 steps-img">
	
	
	
	
	<img src="images/how-it-works/delivered.png" alt="Trusted pharmacy">
	
	
	</div>
	
	
	<div class="col-xs-2 col-md-12 circle-wrap">
	
	
	
	<div>
	
	
	<div class="dots-line">
	
	
	</div>
	
	
	<div class="circle-filled">
	
	
	</div>
	
	
	</div>
	
	
	</div>
	
	
	
	<div class="col-xs-6 col-md-12 steps-text">
	
	
	<div style="margin-left:10px;">Product will be delivered to you</div>
	
	
	
	</div>
	
	
	</div>
	
	
	
	</div>
	
	
	
	<div class="col-md-2">
	
	
	<div class="row">
	
	
	<div class="col-xs-4 col-md-12 steps-img">
	
	
	<img src="images/how-it-works/pay.png" alt="Pay">
	
	
	
	</div>
	
	
	
	<div class="col-xs-2 col-md-12 circle-wrap">
	
	
	
	<div>
	
	
	<div class="circle-filled">
	
	
	</div>
	
	
	
	</div>
	
	
	
	</div>
	
	
	<div class="col-xs-6 col-md-12 steps-text">
	
	
	
	<div>Pay cash on delivery</div>
	
	
	
	</div>
	
	
	</div>
	
	
	</div>
	
	
	</div>
	
	
	</div>
	
	<!--//How to order//-->
	
	<div class="clearfix"></div>
	
	<!-- Here Goes On Call-->
	
	<div id="we-call-section" class="bg-grey col-sm-hidden we-call-section"  style="min-height: 540px;">
	
	    <div class="container" style="padding: 100px 0px 160px;">
		
		    <div class="wc_row">
			 
			   <div class="col-24 process-flow">
			   
			       <div class="wc-title">Now get the medicines easily</div>
				   <div class="wc-desc">via call</div>
			       
				        <div class="wc-container">
					    
						   <div class="col-1"></div>
						   
						     <div class="medicine col-sm-24 item col-4 active flow">
							  
							    
								  <img class="flow-image" src="images/how-it-works/call_wc.ico">
								  
							      <div class="wc-desc">
								     Give a call to
									 <br>
									 954647 9549
								  </div>
							  
							 </div>
							 
							 
							 <div class="medicine col-sm-24 item col-2 arrow">
							 
							     <img class="arrow-image" src="http://www.pharmeasy.in/images/a1a36e70da6e7287744dc9d6c0c07eab.png">
							     <div class="wc-desc"></div>
							 </div>
							 
							 <div class="medicine col-sm-24 item col-4 flow">
							 
							 
							     <img class="flow-image address" src="images/how-it-works/address-wc.png">
								 <div class="wc-desc">
								 
								 Provide address
								 <br>
								 and other details
								 
								 </div>
								
							</div>
							
							
							<div class="medicine col-sm-24 item col-2 arrow arrow-middle">
							
							        <img class="arrow-image" src="http://www.pharmeasy.in/images/a1a36e70da6e7287744dc9d6c0c07eab.png">
							
							
							        <div class="wc-desc"></div>
							
							
							</div>
							
							
							<div class="medicine col-sm-24 item col-4 flow">
							
							 <img class="flow-image" src="images/how-it-works/prescription_3.png">
							
							        <div class="wc-desc">
							
							            Prescription
							             <br>
							             verification
							        </div>
							
							</div>
							
						    
							<div class="medicine col-sm-24 item col-2 arrow">
							
							
							 <img class="arrow-image" src="http://www.pharmeasy.in/images/a1a36e70da6e7287744dc9d6c0c07eab.png">
							 
							 
							 <div class="desc"></div>
							 
							 
							</div>
						  
						  
						  
						    <div class="medicine col-sm-24 item col-4 flow">
							
							    <img class="flow-image" src="http://www.pharmeasy.in/images/c2e04a13e284244fdfa4cacfed745769.png">
								
								<div class="wc-desc">
								      Get medicines
								      <br>
								      delivered at home
								</div>
								
							</div>
							 
						  
					    </div>
				   
				   
			   </div>
			
			</div>
		
		</div>
	
	</div>
	
	<!-- //Here Ends On Call-->
<!-- top-offers -->
	<div class="top-brands">
		<div class="container">
			<h3>Latest Medicine Products</h3>
			<div class="agile_top_brands_grids">
			<?php
                                        $con=new mysqli('localhost','upchaaar_root','babloo@098765','upchaaar_meds');
                                        $query= $con->query("select * from products where flag='latest_products' order by id DESC LIMIT 12 ");
                                        while($row2 = $query->fetch_assoc())
										{
										$normal=$row2['normal_price'];
										$offer=$row2['offer_price'];
                                         ?>
				<div class="col-md-3 top_brand_left">
					<div class="hover14 column">
						<div class="agile_top_brand_left_grid">
							<!--<div class="tag"><img src="images/tag.png" alt=" " class="img-responsive" /></div>-->
							<div class="agile_top_brand_left_grid1">
								<figure>
								
									<div class="snipcart-item block" >
										<div class="snipcart-thumb">
										
											<a href="latest_offer_product_info.php?p_id=<?php echo $row2['id'];?>"><img title=" " alt=" " src="<?php echo $row2['image'];?>" /></a>		
											<p><?php echo $row2['name'];?></p>
											
											
											<h4>Rs.<?php 
											
											if($offer==$normal){
												
												echo $row2['normal_price'];
												
												} 
											else {
												echo " $offer <span>Rs. $normal</span>";
												
												}
												
												    ?> 
												</h4>
											
											
											
										</div>
										<div class="snipcart-details top_brand_home_details">
											<form action="addtocart.php?product=<?php echo $row2['id']; ?>&quan=1&customer_id=<?php echo $c_id;?>" method="post">
												<fieldset>
													
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="product_id" value="<?php echo $row2['id'];?>" />
													<input type="hidden" name="item_name" value="<?php echo $row2['prdct_name'];?>" />
													<input type="hidden" name="amount" value="<?php echo $row2['prdct_rate'];?>" />
													<input type="hidden" name="discount_amount" value="<?php echo $row2['discount_rate'];?>" />
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
<!-- //top-offers -->



<footer class="HJlsB9 _1ajLs1" data-reactid="274">
				<div class="TW4owM" data-reactid="275">
				<div data-reactid="276"><div class="row" data-reactid="325">
				<div class="_1DXv5h col col-8-12" data-reactid="326">
				<span class="_2tFDQF" data-reactid="334"><!-- react-text: 335 -->© 2017-<!-- /react-text -->
				<!-- react-text: 336 -->2018<!-- /react-text --><!-- react-text: 337 --> <!-- /react-text --><span data-reactid="338">Upchaaar.com. Medicine Store. All rights reserved. </span>
				<div class="_1DXv5h _2uGUAL col col-4-12" data-reactid="339"><span data-reactid="340"> My Account </span><span><!-- react-text: 4196 --><!-- /react-text --><a href="login.php" class="_2y0pv_"> Login / Signup</a><!-- react-text: 4198 --> or Need Help?<!-- /react-text --><a href="http://upchaaar.com/contact_us.php" class="_2y0pv_"> Contact Us</a></span></div><a href="faqs.php" class="_2y0pv_" style="float:right; margin-left:10px; margin-right:10px;"> FAQ </a><a href="policy.php" class="_2y0pv_" style="float:right; margin-left:10px; margin-right:10px;"> Policy </a><a href="tos.php" class="_2y0pv_" style="float:right; margin-left:10px; margin-right:10px;"> Terms</a>
				
				
				</span></div></div></div><!-- react-empty: 4200 --></div>
</footer>
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