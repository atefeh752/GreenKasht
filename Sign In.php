<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration Form with HTML5 and CSS3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="images/favicon.png" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/AnimateLogo.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />

	   	<link rel="stylesheet" href="css/userlogin.css" type="text/css" media="all" />

	
    </head>
    <body>
	
        <div class="container">


			<header>

					

				 <h1><p> <a href="Sign In.php"><img src="images/logo.png" alt="" />  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>گرین کاشت &nbsp;<strong>فرم ورود</strong> <span>لطفا وارد شوید یا ثبت نام کنید</span></p> </h1>
				
				
			</header>

			<div class="codrops-top">
            <header>

			    <p align="center" align="center"><b> <a href="#toregister"  class="a-btn"><span class="a-btn-text">ورود مدیر</span></a>  </b>	<b> <a href="#tologin"  class="a-btn"> <span class="a-btn-text">ورود مشتری</span> </a> </b>
				<a href="Customer.php" class="a-btn"><strong><span class="a-btn-text">ایجاد حساب جدید</span></strong></a><a href="index.php" class="a-btn"><strong> <span class="a-btn-text">بازگشت به خانه</span></strong></a> </p>
            </header>
			 <div class="clr"></div>
			 </div> <br><br>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="userValidate.php" method="post" autocomplete="on"> 
                                <h1>ورود مشتری:</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > ایمیل: </label>
                                    <input type="text" name="magaca" required="required" type="text" placeholder="atefeh253@gmail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> پسورد: </label>
                                    <input type="password" name='furaha' required="required" type="password" placeholder="a253ARMsh5" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">من را وارد سیستم نگه دارید</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit"  name="submit"  value =" وارد شدن">
								</p>

                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="employeeValidate.php" method="post" autocomplete="on"> 
                             <h1>ورود مدیر:</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > نام کاربری </label>
                                    <input type="text" name="magaca" required="required" type="text" placeholder="myusername "/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> پسورد </label>
                                    <input type="password" name='furaha' required="required" type="password" placeholder="eg. *******" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">من راوارد سیستم نگه دارید</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
								</p>

								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html
\\