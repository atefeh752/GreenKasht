<?php
session_start();
include("config.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="rtl">
<head>
	<title> SomStore Group </title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	    <link rel="shortcut icon" href="images/favicon.png" />
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
		<link rel="stylesheet" href="css/proStyle.css" type="text/css" media="all" />
	   	
	 	<link rel="stylesheet" href="css/cart.css" type="text/css" media="all" />
		 <link rel="stylesheet" href="css/chatStyle.css" type="text/css" media="screen" />
	<script src="js/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>

	<script src="js/cufon-yui.js" type="text/javascript"></script>
	<script src="js/Myriad_Pro_700.font.js" type="text/javascript"></script>
	<script src="js/jquery.jcarousel.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/functions.js" type="text/javascript" charset="utf-8"></script>
	
		 <!-- Linking scripts -->
    <script src="js/main.js" type="text/javascript"></script>
	
	
	<!-- WAA DHAMAADKA JQueryga CHaTTIng Ka-->

<script type="text/javascript">
$(document).ready(function() {

	// load messages every 1000 milliseconds from server.
	load_data = {'fetch':1};
	window.setInterval(function(){
	 $.post('shout.php', load_data,  function(data) {
		$('.message_box').html(data);
		var scrolltoh = $('.message_box')[0].scrollHeight;
		$('.message_box').scrollTop(scrolltoh);
	 });
	}, 1000);
	
	//method to trigger when user hits enter key
	$("#shout_message").keypress(function(evt) {
		if(evt.which == 13) {
				var iusername = $('#shout_username').val();
				var imessage = $('#shout_message').val();
				post_data = {'username':iusername, 'message':imessage};
			 	
				//send data to "shout.php" using jQuery $.post()
				$.post('shout.php', post_data, function(data) {
					
					//append data into messagebox with jQuery fade effect!
					$(data).hide().appendTo('.message_box').fadeIn();
	
					//keep scrolled to bottom of chat!
					var scrolltoh = $('.message_box')[0].scrollHeight;
					$('.message_box').scrollTop(scrolltoh);
					
					//reset value of message box
					$('#shout_message').val('');
					
				}).fail(function(err) { 
				
				//alert HTTP server error
				alert(err.statusText); 
				});
			}
	});
	
	//toggle hide/show shout box
	$(".close_btn").click(function (e) {
		//get CSS display state of .toggle_chat element
		var toggleState = $('.toggle_chat').css('display');
		
		//toggle show/hide chat box
		$('.toggle_chat').slideToggle();
		
		//use toggleState var to change close/open icon image
		if(toggleState == 'block')
		{
			$(".header div").attr('class', 'open_btn');
		}else{
			$(".header div").attr('class', 'close_btn');
		}
		 
		 
	});
});

</script>

<!-- WAA DHAMAADKA JQueryga CHaTTIng Ka-->
</head>
<body>
	<!-- Begin Wrapper -->
	<div id="wrapper">
		<!-- Begin Header -->
		<div id="header">
			<!-- Begin Shell -->
			<div class="shell">
				<h1 id="logo"><a class="notext" href="#" title="گرین سایت"<"گرین سایت"</a></h1>
				<div id="top-nav">
					<ul>
					
						<li><a href="contact.php" title="Contact"><span>تماس</span></a></li>
						<li><a href="Sign In.php" title="Sign In"><span>ورود</span></a></li>
					</ul>
				</div>
				<div class="cl">&nbsp;</div>
	<div class="shopping-cart"  id="cart" id="right" >
<dl id="acc">	
<dt class="active">								
<p class="shopping" >کارت خرید &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
</dt>
<dd class="active" style="display: block;">
<?php
   //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

if(isset($_SESSION["cart_session"]))
{
    $total = 0;
    echo '<ul>';
    foreach ($_SESSION["cart_session"] as $cart_itm)
    {
        echo '<li class="cart-itm">';
        echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>'."</br>";
        echo '<h3  style="color: green" ><big> '.$cart_itm["name"].' </big></h3>';
        echo '<div class="p-code"><b><i>ID:</i></b><strong style="color: #d7565b" ><big> '.$cart_itm["code"].' </big></strong></div>';
		echo '<span><b><i>Shopping Cart</i></b>( <strong style="color: #d7565b" ><big> '.$cart_itm["TiradaProductTiga"].'</big></strong>) </span>';
        echo '<div class="p-price"><b><i>Price:</b></i> <strong style="color: #d7565b" ><big>'.$currency.$cart_itm["Qiimaha"].'</big></strong></div>';
        echo '</li>';
        $subtotal = ($cart_itm["Qiimaha"]*$cart_itm["TiradaProductTiga"]);
        $total = ($total + $subtotal) ."</br>"; 
    }
    echo '</ul>';
    echo '<span class="check-out-txt"><strong style="color:green" ><i>Total:</i> <big style="color:green" >'.$currency.$total.'</big></strong> <a   class="a-btnjanan"  href="view_cart.php"> <span class="a-btn-text">Check Out</span></a></span>';
	echo '&nbsp;&nbsp;<a   class="a-btnjanan"  href="cart_update.php?emptycart=1&return_url='.$current_url.'"><span class="a-btn-text">Clear Cart</span></a>';
}else{
    echo ' <h4>(موجودی حساب شما خالی می باشد!!!)</h4>';
}
?>

</dd>
</dl>
</div>
 <div class="clear"></div>
			</div>
			<!-- End Shell -->
		</div>
		<!-- End Header -->
		<!-- Begin Navigation -->
		<div id="navigation">
			<!-- Begin Shell -->
			<div class="shell">
				<ul>
				<li class="active"><a href="index.php" title="index.php">خانه</a></li>
					<li>
						<a href="products.php">دسته بندی</a>
						<div class="dd">
							<ul>
								<li>
									 <a href="warehouse_1.php"> میوه جات</a>
									<div class="dd">
										<ul>
											<li><a href="warehouse_1.php">سیب</a></li>
                                            <li><a href="warehouse_1.php"> پرتقال</a></li>
										</ul>
									</div>
								</li>
								
								<li>
									 <a href="warehouse_2.php"> سبزیجات</a>
									<div class="dd">
										<ul>
											  <li><a href="warehouse_2.php">کاهو</a></li>
                                             <li><a href="warehouse_2.php">کلم</a></li>
										</ul>
									</div>
								</li>
								
								<li>
									<a href="warehouse_3.php"> صیفی جات </a>
									<div class="dd">
										<ul>
											<li><a href="warehouse_3.php">پیاز</a></li>
                                            <li><a href="warehouse_3.php">خیار</a></li>
										</ul>
									</div>
								</li>
								
								
							</ul>
						</div>
					</li>
					<li><a href="products.php"> محصولات</a></li>
					   	   <li>
						<a href="products.php">انبار</a>
						<div class="dd">
							<ul>
								<li>
									 <a href="warehouse_1.php">برخی میوه جات</a>
									
								</li>
								
								<li>
									 <a href="warehouse_2.php">برخی سبزیجات</a>
									
								</li>
								
								<li>
									<a href="warehouse_3.php">برخی صیفی جات</a>
									
								</li>
								
							</ul>
						</div>
					</li>
					<li><a href="about.php">درباری ما</a></li>
					  <li><a href="customer.php">ثبت نام رایگان</a> </li>
				</ul>
				<div class="cl">&nbsp;</div>
			</div>
			<!-- End Shell -->
		</div>
		<!-- End Navigation -->

		<!-- Begin Main -->
		<div id="main" class="shell">
			<!-- Begin Content -->
			<div id="content">
				<div class="post">
				<h2>خوش آمدید</h2>
					<img src="images/logo.jpg" alt="Post Image" height="160" width="260"/>
					به سایت گرین کشت خوش آمدید. می توانید بدون واسطه و قیمت مناسب از انواع محصولات استفاده کنید. <a href="#" class="more" title="Read More">بیشتر بخوانبد</a></p>
					<div class="cl">&nbsp;</div>
				</div>
				
				
				<div class="post">
				
					<h1 align="center"><font color="blue">درمورد توسعه دهندگان پروژه</font></h1><br>
					<h2>توسعه دهنده</h2>
					<img src="images/عکس.jpg" alt="Post Image" width="140" height="159" />
					<p>عاطفه </p>
					<p>. <a href="#" class="more" title="Read More">ادامه مطلب</a></p>
					<div class="cl">&nbsp;</div>
				</div>
				<div class="post">
					<h2>توسعه دهنده</h2>
					<img src="images/عکس.jpg" alt="Post Image" width="140" height="159" />
					<p>محدثه</p>
					<p>. <a href="#" class="more" title="Read More">ادامه مطلب</a></p>
					<div class="cl">&nbsp;</div>
				</div>
			</div>
			<!-- End Content -->
			
			
<!-- Begin Sidebar -->
			<div id="sidebar">
				<ul>
					<li class="widget">
						<h2>انبار برتر</h2>
						<div class="brands">
							<ul>
								<li><a href="warehouse_1.php" title="Brand 1"><img src="images/j.png" width="103" height="51" alt="Brand 1" /></a></li>
								<li><a href="warehouse_2.php" title="Brand 2"><img src="images/k.png" width="103" height="51" alt="Brand 2" /></a></li>
								<li><a href="warehouse_3.php" title="Brand 3"><img src="images/d.png" width="103" height="51" alt="Brand 3" /></a></li>
								<li><a href="warehouse_4.php" title="Brand 4"><img src="images/h.png" width="103" height="51" alt="Brand 4" /></a></li>
							</ul>
							<div class="cl">&nbsp;</div>
						</div>
						<a href="products.php" class="more" title="More Brands">تمام محصولات</a>
					</li>
				</ul>
			</div>
			<!-- End Sidebar -->
			<div class="cl">&nbsp;</div>
	
		</div>
		<!-- End Main -->

			<div class="boxes">
			
			<div class="copy">
				<!-- Begin Shell -->
				<div class="shell">
					<div class="carts">
								<div class="shout_box">
      <div class="header"> live Discussion of Somstore <div class="close_btn">&nbsp;</div></div>
     <div class="toggle_chat">
     <div class="message_box">
    </div>
    <div class="user_info">
    <input name="shout_username" id="shout_username" type="text" placeholder="Your Name" maxlength="15" />
   <input name="shout_message" id="shout_message" type="text" placeholder="Type Message Hit Enter" maxlength="100" /> 
    </div>
    </div>
	</div>
	
					</div>	<p align="center">&copy; SomStore.com. Groups <a href="index.php"><i><font color="fefefe"> Welcome To <strong> SomStore</strong> Online Shopping Site </font></i></a></p>
					<div class="cl">&nbsp;</div>
				</div>
				<!-- End Shell -->
			</div>
		</div>

	<!-- End Wrapper -->
</body>
</html>