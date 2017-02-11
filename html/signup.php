<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Shift &mdash; Free Website Template, Free HTML5 Template by FreeHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="fh5co-top-logo">
				<div id="fh5co-logo"><a href="#">My Legacy</a></div>
			</div>
			<div class="fh5co-top-menu menu-1 text-center">
				<ul>
<!--
                    <li><a href="work.html">Work</a></li>
					<li><a href="about.html">Profile</a></li>
					<li class="has-dropdown">
						<a href="#">Dropdown</a>
						<ul class="dropdown">
							<li><a href="#">Web Design</a></li>
							<li><a href="#">eCommerce</a></li>
							<li><a href="#">Branding</a></li>
							<li><a href="#">API</a></li>
						</ul>
					</li>
					<li><a href="contact.html">Contact</a></li>
-->
				</ul>
			</div>
			<div class="fh5co-top-social menu-1 text-right">
				<ul class="fh5co-social">
<!--
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
					<li><a href="#"><i class="icon-dribbble"></i></a></li>
					<li><a href="#"><i class="icon-github"></i></a></li>
-->
				</ul>
			</div>
		</div>
	</nav>
	
	<div id="fh5co-work">
		<div class="container">
            
            <!--NEW CODE BEGIN-->
                    <div class="animate-box center">
						<form name="signupform" method="post" action="checksignup.php">
<!--
                            <div class="row form-group">
								<div class="col-md-12">
									<label for="firstname">First Name</label>
									<input name="firstname" type="text" id="firstname" class="form-control" placeholder="First Name">
                                </div>
                            </div>
                            <div class="row form-group">
								<div class="col-md-12">
									<label for="lastname">Last Name</label>
									<input name="lastname" type="text" id="lastname" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
-->
							<div class="row form-group">
								<div class="col-md-12">
									<label for="desiredusername">Email</label>
									<input name="desiredusername" type="text" id="desiredusername" class="form-control" placeholder="Enter Email">
                                </div>
							</div>
							<div class="row form-group">
								<div class="col-md-12">
									<label for="desiredpassword">Create a password</label>
									<input type="password" id="desiredpassword" name="desiredpassword" class="form-control" placeholder="Enter Password">
                                </div>
							</div>
<!--
                            <div class="row form-group">
								<div class="col-md-12">
									<label for="desiredpasswordconfirm">Confirm your password</label>
									<input name="desiredpasswordconfirm" type="text" id="desiredpasswordconfirm" class="form-control" placeholder="Enter Password">
                                </div>
							</div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <fieldset>
                                        <label>Birthday</label>
                                        <label class="month">
                                            <select class="select-style" name="desiredbirth_month">
                                                <option value="">Month</option>
                                                <option  value="January">January</option>
                                                  <option value="February">February</option>
                                                  <option value="March" >March</option>
                                                  <option value="April">April</option>
                                                  <option value="May">May</option>
                                                  <option value="June">June</option>
                                                  <option value="July">July</option>
                                                  <option value="August">August</option>
                                                  <option value="September">September</option>
                                                  <option value="October">October</option>
                                                  <option value="November">November</option>
                                                  <option value="December" >December</option>
                                            </select>
                                        </label>  
                                        <label>Year <input class="birthyear" maxlength="4" name="desiredbirth_year" placeholder="Year"></label>
                                    </fieldset>
                                </div>
                            </div>
-->
                                
							<div class="form-group">
                                 <input type="submit" value="Create Profile" class="btn btn-primary btn-outline">
                                <a href="index.php" class="btn btn-primary btn-outline" style="float:right;">Cancel</a>
							</div>
						</form>		
					</div>
            
            <style>
                .center{
                    margin: auto;
                    width: 50%;
                    }
                .psw,
                .cancelbtn{
                    float: right;
                }
            </style>
            
<!--NEW CODE END-->
            
            
            
            
		</div>
	</div>
        
        

	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2016 My Legacy. All Rights Reserved.</small>
                        <!--
						<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a> &amp; <a href="http://blog.gessato.com/" target="_blank">Gessato</a></small>
                        -->
					</p>
					<ul class="fh5co-social-icons">
						<li><a href="#"><i class="icon-twitter"></i></a></li>
						<li><a href="#"><i class="icon-facebook"></i></a></li>
						<li><a href="#"><i class="icon-linkedin"></i></a></li>
                        <li><a href="#"><i class="icon-pinterest"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>