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
				</ul>
			</div>
            <div class="fh5co-top-social menu-1 text-right">
				<ul class="fh5co-social">
                    <li class="has-dropdown">
						<a href="#"><i class="icon-cog"></i></a>
						<ul class="dropdown">
							<li><a href="settings.html">Settings</a></li>
							<li><a href="logout.php">Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
<!--
	<div id="fh5co-work">
		<div class="container">
			<div class="row top-line animate-box">
				<div class="col-md-7 col-md-push-5 text-left intro">
					<h2>THIS IS SUPPOSED TO BE THE SETTINGS PAGE <span class="fh5co-highlight">Made with <i class="icon-heart2"></i> by <a href="http://freehtml5.co">FreeHTML5.co</a> </span></h2>
					<h2>Shift is a Collection of a Beautiful &amp; Premium Themes.</h2>
				</div>
			</div>
		</div>
	</div>
-->     
        <div id="fh5co-work">
		  <div class="container">
            
            <!--NEW CODE BEGIN-->

                    <div class="animate-box center">
                        <div>
                            <h4 class="fh5co-top-logo">Change Password</h4>
                        </div>
						<form action="#">
                            <div class="row form-group">
								<div class="col-md-12">
									<label for="name">Old Password</label>
									<input type="text" id="psw" class="form-control" placeholder="Old Password">
                                </div>
                            </div>
                            <div class="row form-group">
								<div class="col-md-12">
									<label for="name">New Password</label>
									<input type="text" id="psw" class="form-control" placeholder="New Password">
                                </div>
                            </div>
                            <div class="row form-group">
								<div class="col-md-12">
									<label for="email">Confirm your password</label>
									<input type="text" id="psw" class="form-control" placeholder="Enter Password">
                                </div>
							</div>
							<div class="form-group">
								<a href="#" class="btn btn-primary btn-outline">Submit</a>
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
            </div>
        </div>
            
<!--NEW CODE END-->
            


	<div id="fh5co-started">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">  
                    
                    <div id="abc">
<!-- Popup Div Starts Here -->
<div id="popupContact">
<!-- Contact Us Form -->
<form action="#" id="form" method="post" name="form">
<i id="close" class="icon-cross" onclick="div_hide()"></i>
<h2>Are you sure?</h2>
<a href="delete_account.php">DELETE ACCOUNT</a>
</form>
</div>
<!-- Popup Div Ends Here -->
</div>
<!-- Display Popup Button -->
<button class="btn btn-primary" id="popup" onclick="div_show()">DELETE ACCOUNT</button>
                    
                    <style>
                        #abc {
width:100%;
height:100%;
opacity:.95;
top:0;
left:0;
display:none;
position:fixed;
background-color:#313131;
overflow:auto
}
#close {
    margin-left: 16em;
}
div#popupContact {
position:absolute;
left:50%;
top:25%;
margin-left:-160px;
font-family:'Raleway',sans-serif
}
#form {
max-width:600px;
min-width:250px;
padding:10px 20px;
border:2px solid gray;
border-radius:10px;
font-family:raleway;
background-color:#fff
}
p {
margin-top:30px
}
hr {
margin:10px -50px;
border:0;
border-top:1px solid #ccc
}

                    </style>
                    
                    
                    
                <script>
//Function To Display Popup
function div_show() {
document.getElementById('abc').style.display = "block";
}
//Function to Hide Popup
function div_hide(){
document.getElementById('abc').style.display = "none";
}
                </script>     
                          
				</div> 
			</div>
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

