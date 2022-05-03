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
	$con=new mysqli('localhost','upchaaar_root','babloo@098765','upchaaar_meds');
	$query= $con->query("select * from usersdata where email='$sess'");
	$info=$query->fetch_assoc();
	$c_id=$info['id'];
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Shopping Cart | Upchaaar.com</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
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
<script src="js/jquery_price.js"></script>
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
.cart
	{
		display: inline-block;
background-color: #fff;
margin: 0 18px 16px 0;
margin-top: 70px;
margin-left: 60px;
border-radius: 2px;
box-shadow: 0 1px 2px 0 rgba(0, 0, 0, .2);
width: 848px;

	}
	.cart_inner
	{
		border-bottom: 1px solid #f0f0f0;
padding: 16px 31px 0 25px;
display: -webkit-flex;
display: -ms-flexbox;
display: flex;
-webkit-justify-content: space-between;
-ms-flex-pack: justify;
justify-content: space-between;
min-height: 47px;

	}
	.span_cart{
    text-transform: uppercase;
    color: #212121;
    font-size: 16px;
    font-weight: 500;
}

.cart_item {
    border-top: 0;
}

.cart_inner_item {
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
}

.3yx_j
{	
    -webkit-flex: 0 0 120px;
    -ms-flex: 0 0 120px;
    flex: 0 0 120px;
    text-align: center;


}

.cart_item_desc {
    padding: 0 24px 12px 24px;
    vertical-align: top;
    min-height: 112px;
    -webkit-flex: 1 1;
    -ms-flex: 1 1;
    flex: 1 1;
    overflow: hidden;
}
.cart_item_container {
    display: block;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
	margin-top:20px;
}
.cart_item_title

{
    font-size: 16px;
    color: #212121;
    line-height: 1;
    display: inline;

}


.cart_item_short_desc1 {
    display: block;
    color: #878787;
    font-size: 12px;
	margin-top: 8px;
}

.cart_item_short_desc2 {
    display: block;
    color: #878787;
    font-size: 12px;
	margin-top: 10px;
}

.cart_item_price {
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    font-size: 14px;
    -webkit-align-items: flex-end;
    -ms-flex-align: end;
    align-items: flex-end;
    margin-bottom: 3px;
    margin-top: 10px;
}

.cart_item_first_price{
    font-size: 20px;
    font-weight: 600;
    display: inline-block;
    margin-right: 12px;
    line-height: 1;
}
.cart_item_second_price {
    text-decoration: line-through;
    color: #878787;
    display: inline-block;
    margin-right: 8px;
}

.cart_item_disc_percent{
    display: inline-block;
    color: #388e3c;
    font-weight: 500;
    margin: 0 5px;
}

.cart_item_disc_prec_span
{
	color: #388e3c;
font-weight: 600;

}

.cart_choices {
    display: inline-block;
    padding-left: 24px;
    vertical-align: center;
}

.cart_choices1 {
    display: inline-block;
    text-transform: uppercase;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
	margin-top:15px;
    margin-left: -25px;
}
.cart_choices1:hover {
    display: inline-block;
    text-transform: uppercase;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
	margin-top:15px;
    margin-left: -25px;
	color:red;
}

.cart_proceed_box {
    padding: 16px 23px;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-justify-content: flex-end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    background: #fff;
    border-top: 1px solid #f0f0f0;
    box-shadow: 0 -2px 10px 0 rgba(0, 0, 0, .1);
}

.button_class {
    margin-right: 16px;
    padding: 14px 30px;
    background-color: #f9f9f9;
    color: #212121;
}
hr {
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
	color:lightgrey;
    border-width: 1px;
}

._12mejP {
    width: 376px;
	margin-top: 77px;
    display: inline-block;
    vertical-align: top;
}

._2qUgWb {
    position: relative;
}

._2qUgWb ._1lD380 {
    top: 0 !important;
}
._2qUgWb ._2zqhDs {
    width: inherit;
}

._3TO20n {
    display: inline-block;
    height: 100%;
    width: inherit;
    .V_67fL { background: var(--color-page-bg) url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTIiIGhlaWdodD0iNyIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICA8cGF0aCBkPSJNMTIgN2MwLTIuMDc2LTEuNS0zLjUtMy41LTMuNVM1IDQuOTI0IDUgN0gwVjBoMTJ2N3oiIGZpbGw9IiNmN2ZmZmEiIGZpbGwtcnVsZT0iZXZlbm9kZCIvPgo8L3N2Zz4K) repeat-x;
    height: 4px;
    background-position-y: 100%;
    } ._28MqbX { background: var(--color-white-bg);
    border-radius: 2px;
    min-height: 47px;
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2);
    ._1rvymr { text-transform: uppercase;
    padding: 13px 24px;
    border-bottom: 1px solid var(--color-grey-grade1);
    color: var(--color-grey-grade4);
    min-height: 47px;
    border-radius: 2px 2px 0 0;
    } ._3hdphw { border-bottom: 1px solid var(--color-grey-grade1);
    padding: 0 24px;
    } ._1oTPyP { display: flex;
    justify-content: space-between;
    margin: 26px 0;
    } ._2v_qcT { border-top: 1px dashed var(--color-grey-grade2);
    font-weight: var(--font-medium);
    font-size: 18px;
    ._1oTPyP { margin: 20px 0;
    } } .fO47XQ { padding: 20px 24px;
    color: var(--color-offer-green);
    font-weight: var(--font-medium);
    } } ._2VWyF { border-top: 1px solid var(--color-grey-grade2);
    margin: 18px 24px;
    }: ;
}

._3TO20n ._28MqbX {
    background: #fff;
    border-radius: 2px;
    min-height: 47px;
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, .2);
}

._3TO20n ._28MqbX ._1rvymr {
    text-transform: uppercase;
    padding: 13px 24px;
    border-bottom: 1px solid #f0f0f0;
    color: #878787;
    min-height: 47px;
    border-radius: 2px 2px 0 0;
}
._3TO20n ._28MqbX ._1rvymr {
    text-transform: uppercase;
    color: #878787;
}

._3TO20n ._28MqbX ._3hdphw {
    border-bottom: 1px solid #f0f0f0;
    padding: 0 24px;
}
._3TO20n ._28MqbX ._1oTPyP {
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    margin: 26px 0;
}
._3TO20n ._28MqbX ._2v_qcT {
    border-top: 1px dashed #e0e0e0;
    font-weight: 500;
    font-size: 18px;
}
._3TO20n ._28MqbX ._2v_qcT ._1oTPyP {
    margin: 20px 0;
}
._3U2uhx {
    margin: 34px 24px 10px 24px;
}
._3U2uhx .yDMSQ9 {
    width: 29px;
    height: 36px;
    display: inline-block;
    margin-right: 20px;
    vertical-align: top;
}
._3U2uhx .iZvnDD {
    display: inline-block;
    font-size: 14px;
    font-weight: 500;
    line-height: 1.29;
    color: #878787;
    width: 271px;
}
._3TO20n ._2VWyF {
    border-top: 1px solid #e0e0e0;
    margin: 18px 24px;
}
._1FYGk2 {
    text-align: center;
}
._1FYGk2 ._3N3iSM {
    font-size: 14px;
    font-weight: 500;
    line-height: 1.29;
    color: #878787;
}
._1FYGk2 ._1FrjXP {
    display: inline-block;
    size: 18px;
    height: 18px;
    vertical-align: middle;
    margin: 0 4px;
}
._1FYGk2 ._3N3iSM {
    font-size: 14px;
    font-weight: 500;
    line-height: 1.29;
    color: #878787;
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
.quan
{
	width: 120px;
    text-align: center;
    display: inline-block;
	margin-right:40px;
	margin-left:-28px;
	
}
._3ycxrs ._3cto0P {
    width: 120px;
    text-align: center;
    display: inline-block;
	
}
._1lu6tB {
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    color: #212121;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}
._1lu6tB .DO7GYT {
    width: 28px;
    height: 28px;
    background: linear-gradient(#fff, #f9f9f9);
    display: inline-block;
    border: 1px solid #c2c2c2;
    cursor: pointer;
    font-size: 16px;
    border-radius: 50%;
    padding-top: 1px;
    line-height: 1;
}
._1lu6tB ._16tRL4 {
    display: inline-block;
    padding: 3px 6px;
    width: calc(100% - 60px);
    height: 100%;
    width: 46px;
    height: 28px;
    border-radius: 2px;
    background-color: #fff;
    border: 1px solid #c2c2c2;
    margin: 0 9px;
}
._1lu6tB ._16tRL4 .gzsCEm {
    border: none;
    width: 100%;
    font-size: 14px;
    font-weight: 500;
    vertical-align: middle;
    text-align: center;
	margin-top:-5px;
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
			<a href="index.php">Upchaaar.com</a>
		</div>
		<div class="w3l_search">
			<form action="products_search.php" method="GET">
				<input type="text" name="Product" value="Search a product..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search a product...';}" required="">
				<input type="submit" value=" ">
			</form>
		</div>
		<?php
if(isset($_SESSION['email']))
{
	$con=new mysqli('localhost','upchaaar_root','babloo@098765','upchaaar_meds');
	$query2= $con->query("select * from cart where c_id='$c_id'");
	$info2=$query2->fetch_assoc();
	$cart_id=$info2['id'];
	$p_id=$info2['product_id'];
	echo $total_items=count($p_id);
	
	
}



else if($total_items==0)
{
	echo "<script>window.location.href='index.php?status=no_items_in_cart'</script>";
}

?>
		<div class="product_list_header">  
			<form action="checkout.php" method="post" class="last">
                <fieldset>
                    
                    <input type="hidden" name="display" value="1" />
                    <input type="submit" name="submit" value="<?php
					
					
					if($total_item=$info2['product_id'])
{
	echo $total_items;
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
	<div class="clearfix"> </div>
<!-- //header -->

<!-- banner -->
	
	<div class="banner">
		
		<div class="container">



	
	
	  
	</div>
	
	
	


 




</div>


	<div class="cart">
	<div class="cart_inner">

	<span class="span_cart"><span>My Cart (</span><span><?php echo $total_item; ?></span><span>)</span></span>
	</div>
	
	<div>
	<?php 
	$total = '';
	$subquan= '';
	$addquan= '';
	$quani= '';
			$con=new mysqli('localhost','upchaaar_root','babloo@098765','upchaaar_meds');
                                        $query= $con->query("select * from cart where c_id='$c_id' order by id DESC");
                                        while($r = $query->fetch_assoc())
										{
										$quantity=$r['item_quantity'];
										$total_offer_price = $r['item_offer_price']*$quantity;
										$total_normal_price= $r['item_normal_price']*$quantity;
										$discount=$r['item_normal_price'] - $r['item_offer_price'];
										 
        $disc=$discount/$r['item_normal_price'];
        $final_disc=$disc*100;
        $quantity=$r['item_quantity'];
         $subquan++;
		 $addquan++;
		 $quani++;
		?>	  	
	<div class="cart_item">
	<script type="text/javascript">
		function subtractQty<?php echo $subquan;?>(){
			if(document.getElementById("qty<?php echo $quani; ?>").value - 1 < 1)
				return;
			
			else
				 document.getElementById("qty<?php echo $quani; ?>").value--;
		}
		
	function AddQty<?php echo $addquan;?>(){
			if(document.getElementById("qty<?php echo $quani; ?>").value + 10 < 1)
				return;
			else
				 document.getElementById("qty<?php echo $quani; ?>").value++;
		}
		</script>
	  <div class="cart_inner_item">
	  <a class="3yx_j" href="#"><img style="text-decoration: none; color: inherit; border: none; outline: none; width:150px; height:150px; margin-top:15px;" src="<?php echo $r['item_image']; ?>"></a>
	  <div class="cart_item_desc">
	       <div class="cart_item_container">
		   <a class="cart_item_title"  href="#"><?php echo $r['item_name']; ?></a>
		   </div>
	       <div class="cart_item_short_desc1">
		   <?php echo $r['item_category'];?>
		   </div>
		   <div class="cart_item_short_desc2">
		   Seller: MrfCo.
		   </div>
		   
		   <div class="cart_item_price">
		   <div class="cart_item_first_price">
		   ₹ <?php echo $total_offer_price; ?>
		   </div>
		   <div class="cart_item_second_price">
		   ₹ <?php echo $total_normal_price; ?>
		   </div>
		   <div class="cart_item_disc_percent">
		   <span class="cart_item_disc_prec_span"><span></span><span><?php echo round($final_disc)?></span><span>% Off</span></span>
		   </div>
		   </div>
		   
		   <div class="cart_choices">
		    <div class="quan"><div class="_1lu6tB"><input type='button' name='subtract' onclick='javascript: subtractQty<?php echo $subquan;?>();' value='-' class="DO7GYT" /><div class="_16tRL4"><input type='text' name='qty' id='qty<?php echo $quani; ?>' value='<?php echo $quantity; ?>' class="gzsCEm" /></div><input type='button' name='add' onclick='javascript: AddQty<?php echo $addquan;?>();' value='+' class="DO7GYT"/></div></div>
		     
		    <div class="cart_choices1" tabindex="12">
			  <span><span>Move to wishlist</span></span>
			  </div>
			  <div class="cart_choices1" style="margin-left:10px;" tabindex="13">
			  <span><span><a href="delcart.php?cart_item_id=<?php echo $cart_id; ?>">Remove</a></span></span>
			 
			  
			  
			
			  </div>
			  
			
			
		   </div>
		   
		   
	  </div>
	       
	  </div>
	  <hr>
	 
	</div>
	
	<?php
			$total = $total + $total_offer_price;
			$delivery=50;
$final_price= $total+$delivery;

			}

        	 ?>
			 
	</div>
	<div class="cart_proceed_box">
	<span></span>
	<input style="background-color:#f9f9f9; Height:50px; font-weight:550; box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .1); cursor:pointer; font-family: Roboto, Arial, sans-serif;
	width:250px; font-size:16px; margin-right:10px; border-radius:2px; border:0.5px solid lightgrey;" type='submit' name='continue_shopping' value='< CONTINUE SHOPPING'>
	
	<form action='shipping-address.php' method='POST'>
	<input style="Height:50px; font-weight:550; color:#fff; box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .1); cursor:pointer; font-family: Roboto, Arial, sans-serif;
	width:250px; font-size:16px; background-color:#fb641b; border-radius:2px; border:none;" type='submit' name='Place_order' value='PLACE ORDER >'>
	</form>
	</div>
</div>	

<div class="_2qUgWb _12mejP" style="height: auto;">
  <div class="_2qUgWb _2zqhDs" style="left: auto; top: -7px;">
  <div class="_3TO20n">
    <div class="_28MqbX">
	  <div class="_1rvymr">
	     <span>
		  <span>Price details</span>
		 </span>
	  </div>
	    <div class="_3hdphw"><div class="_1oTPyP"><div>Price (<?php echo $total_item; ?> items)</div><div class=""> ₹<?php echo $total; ?></div></div><div class="_1oTPyP"><div>Delivery Charges</div><div class=""> ₹<?php echo $delivery ?></div></div><!-- react-empty: 4456 --><div class="_2v_qcT"><div class="_1oTPyP"><div>Amount Payable</div><div class=""> ₹<?php echo $final_price?></div></div></div></div>
	</div>
	  <div class="_3U2uhx"><img src="//img1a.flixcart.com/www/linchpin/fk-cp-zion/img/shield_a7ea6b.png" class="yDMSQ9"><span class="iZvnDD"><span>Safe and Secure Payments. Easy returns. 100% Authentic products.</span></span></div>
	  <div class="_2VWyF"></div>
	  <div class="_1FYGk2"><span class="_3N3iSM"><span>Online payments powered via</span></span><img src="images/logos/com.payu.payumoney-w250.png" class="_1FrjXP"><span class="_3N3iSM"><span>PayUmoney</span></span></div>
  </div>
  </div>  
</div>
		


		
	</div>
	
<!-- //banner -->

                <footer class="HJlsB9 _1ajLs1" data-reactid="274">
				<div class="TW4owM" data-reactid="275">
				<div data-reactid="276"><div class="row" data-reactid="325">
				<div class="_1DXv5h col col-8-12" data-reactid="326">
				<span class="_2tFDQF" data-reactid="334"><!-- react-text: 335 -->© 2017-<!-- /react-text -->
				<!-- react-text: 336 -->2017<!-- /react-text --><!-- react-text: 337 --> <!-- /react-text --><span data-reactid="338">Upchaaar.com. Medicine Store. All rights reserved. </span>
				<div class="_1DXv5h _2uGUAL col col-4-12" data-reactid="339"><span data-reactid="340">Need help? </span><span><!-- react-text: 4196 -->Visit the<!-- /react-text --><a href="/s/help?otracker=undefined_footer_navlinks" class="_2y0pv_"> Help Center</a><!-- react-text: 4198 --> or<!-- /react-text --><a href="/helpcentre?otracker=undefined_footer_navlinks" class="_2y0pv_"> Contact Us</a></span></div>
				</span></div></div></div><!-- react-empty: 4200 --></div></footer>
				
				<!--<p>© 2017 Upchaaar.com Medicine Store. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>-->
			
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