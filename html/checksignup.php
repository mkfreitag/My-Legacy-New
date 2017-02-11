<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="Biloxi12"; // Mysql password 
$db_name="users"; // Database name 
$tbl_name="members"; // Table name 

// Connect to server and select databse.
$conn = new mysqli($host, $username, $password, $db_name)or die("cannot connect"); 
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

// desired user info
$desiredusername=$_POST['desiredusername']; 
$desiredpassword=$_POST['desiredpassword'];

//birthday info
//$desiredbirth_year=$POST['desiredbirth_year'];
//$desiredbirth_month=$POST['desiredbirth_month'];
//$desiredbirth_day=$POST['desiredbirth_day'];

?>

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
                    <div>            
<?php
                        
$sql = "SELECT username FROM members";
$result = $conn->query($sql);
                        
$dummycounter = 0;
                        
while($row = $result->fetch_assoc()) {
    if ($row["username"] == $desiredusername) {
        echo '<h4 style="color: red;" class="fh5co-top-logo">*Account Already Exists</h4><a href="signup.php">Click here to go back and try again.<br><br></a>';
        $dummycounter1 = 1;
    }
}
                        
if ($dummycounter1 != 1) {
        echo '<h4 style="color: green;" class="fh5co-top-logo">*Your new account has been created. Enter your login information below to login.</h4>';
    
        //add a new directory for that user's uploads
        mkdir("/var/www/uploads/".$desiredusername);
    
        //add the use to the members table
        $sql = "INSERT INTO members (username, password) VALUES ('$desiredusername', '$desiredpassword')";
        $conn->query($sql);
    

//strip the @ symbol and the .
$desiredusername = str_replace("@", "", $desiredusername);
$desiredusername = str_replace(".", "", $desiredusername);

    
        //create a new table just for that user
        $sql = 'CREATE TABLE '. $desiredusername . ' (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, filename VARCHAR(65) NOT NULL, filetype VARCHAR(65) NOT NULL, filesize INT(10), uploaddate TIMESTAMP)';
        $conn->query($sql);
}

$conn->close();

?>            
                    </div>
						<form name="loginform" method="post" action="checklogin.php">
							<div class="row form-group">
								<div class="col-md-12">
									<label for="email">Email</label>
									<input name="myusername" type="text" id="myusername" class="form-control" placeholder="Enter Email">
                                </div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="password">Password</label>
									<input name="mypassword" type="password" id="mypassword" class="form-control" placeholder="Enter Password">
                                </div>
							</div>
							<div class="form-group">
                                <input type="submit" value="Login" class="btn btn-primary btn-outline">
                                <!-- HIDE THE REMEMBER ME BUTTON -->
                                <!--<input type="checkbox" checked="checked"> Remember me -->
                                <a href="splash.html" class="btn btn-primary btn-outline" style="float:right;">Cancel</a>
							</div>
                            <div>
                                <span class="psw">Forgot <a href="password_recover_in.html">password?</a></span>
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