<?php

include("usersession.php");
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
	
	<script src="js/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>

	<script src="js/cufon-yui.js" type="text/javascript"></script>
	<script src="js/Myriad_Pro_700.font.js" type="text/javascript"></script>
	<script src="js/jquery.jcarousel.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/functions.js" type="text/javascript" charset="utf-8"></script>
	
	
		 <!-- Linking scripts -->
    <script src="js/main.js" type="text/javascript"></script>
	
</head>
<body>
	<!-- Begin Wrapper -->
	<div id="wrapper">
		<!-- Begin Header -->
		<div id="header">
			<!-- Begin Shell -->
			<div class="shell">
				<h1 id="logo"><a class="notext" href="#" title="Somstore">گرین کاشت</a></h1>
				<div id="top-nav">
					<ul>
						<li><a href="#" title="Login Email"> <span class="janan"> <?php echo "ایمیل شما : ". "<i><b>".$login_session."</b></i>" ;?> </span></a></li>
						
							 <li > <a href="contact.php" title="Contact"> <span class="jananalibritish"> تماس  </span></a>  </li>
					       <li class="janan"><a href="logout.php"><span class="jananalibritish">خروج </span></a></li>
					</ul>
				</div>
				<div class="cl">&nbsp;</div>
				<div class="shopping-cart"  id="cart" id="right" >
<dl id="acc">	
<dt class="active">								
<p class="shopping" >سبد خرید &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
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
    echo ' <h4>(Your Shopping Cart Is Empty!!!)</h4>';
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
					  <li><a href="about.php">درباره ما</a></li>
				
				</ul>
				<div class="cl">&nbsp;</div>
			</div>
			<!-- End Shell -->
		</div>
		<!-- End Navigation -->

		<!-- Begin Main -->
		<div id="main" class="shell">

         <br> <br>
			<!-- Begin Content -->
			<div id="content">
				<div class="post">
					<h2>خوش آمدید</h2>
					<img src="images/logo.png" alt="Post Image" height="160" width="260"/>
					به سایت گرین کشت خوش آمدید. می توانید بدون واسطه و قیمت مناسب از انواع محصولات استفاده کنید. <a href="#" class="more" title="Read More">بیشتر بخوانبد</a></p>
					
					<div class="cl">&nbsp;</div>
				</div>
			</div>
			<!-- End Content -->
			<!-- Begin Sidebar -->
			<div id="sidebar">
				<ul>
					<li class="widget">
			<h2>اطلاعات مشتری</h2>
						<div class="brands">
		 <div id="form_wrapper" class="form_wrapper">			
               <?php  
		$id = $_SESSION['login_username'];
		$query = mysqli_query($mysqli,"SELECT * FROM customer WHERE Email = '$id'") or die (mysqli_error()); 
							$result = mysqli_fetch_array($query);	
														?>
			<table>	
               <form  class="register active" action="custUpdate.php" method="POST" autocomplete="off">
			     <tr>
				 
                  <td><input name="username" type="hidden" id="namebox" value="<?php echo $result['Cust_Id']?>"/></td></tr>
				  <tr>
				 
                  <td>  <label>نام و نام خانوادگی:</label><input name="firstname"  type="text" id="namebox" value="<?php echo $result['FullName']?>"/></td></tr>
				  <tr>
				  
                  <td> <label>نام کاربری:</label><input name="lastname"  type="text" id="namebox" value="<?php echo $result['UserName']?>"/></td></tr>
				  <tr>
				  
                  <td> <label>تلفن:</label><input name="phone"  type="text" id="namebox" value="<?php echo $result['Phone']?>"/></td></tr>
                   <tr>
				   
                  <td> <label>ایمیل:</label><input name="Email" type="text" id="namebox" value="<?php echo $result['Email']?>"/></td></tr>
				  <tr>
				  
                  <td> <label>کشور:</label> <input name="country"  type="text" id="namebox" value="<?php echo $result['Country']?>"/></td></tr>
				  <tr>
				  
                  <td> <label>شهر:</label> <input name="city"  type="text" id="namebox" value="<?php echo $result['City']?>"/></td></tr>
				  <tr>
				  
                  <td> <label>آدرس:</label> <input name="address"  type="text" id="namebox" value="<?php echo $result['Adress']?>"/></td></tr>
				  <tr>
				  
                  <td> <label>کدپستی:</label> <input name="pcode"  type="text" id="namebox" value="<?php echo $result['PostalCode']?>"/></td></tr>
				  
			
						<td colspan="3">	
						
						<button type="submit"  name="submit" value="Update" class="a-btn"><span class="a-btn-text"> به روز رسانی</span> </button>
						
						</td>
					
			</form>
			</table>
		 </div>
			
		<div class="cl">&nbsp;</div>
						</div>
						
					</li>
				</ul>
			</div>
			<!-- End Sidebar -->
			<div class="cl">&nbsp;</div>
			
			

			
				<!-- Begin Products Slider -->
			<div id="product-slider">
				<h2>بهترین محصولات</h2>
				<ul>
				
		  	<?php
			$result=mysqli_query($mysqli,"select * from product") or die (mysqli_error());
			while($row=mysqli_fetch_array($result)){
		?>
					<li>
						<a href="products.php" title="Product Link"><img src="images/<?php echo $row['Picture']?>" alt="IMAGES" /></a>
						<div class="info">
							<h4><b><?php echo $row['productName']?></b></h4>
							<span class="number"><span>Price:<big style="color:green">$<?php echo $row['Price']?></big></span></span>
					
							<div class="cl">&nbsp;</div>
							 
						</div>
					</li>
					 <?php } ?>
				</ul>
				<div class="cl">&nbsp;</div>
			</div>
			<!-- End Products Slider -->		

											             
<?php
   $ids = $_SESSION['login_username'];
		$qry = mysqli_query($mysqli,"SELECT * FROM customer WHERE Email = '$ids'") or die (mysqli_error()); 
							
?>



			
		</div>
		<!-- End Main -->

	</div>
	<!-- End Wrapper -->
</body>
</html>