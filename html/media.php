<?php
//make sure a user is logged in
session_start();
if( !isset($_SESSION["myusername"]) ) {
    header("location:index.php");
}


$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="Biloxi12"; // Mysql password 
$db_name="users"; // Database name 

$tbl_name=$_SESSION["myusername"]; // Table name = the username 
//strip the @ symbol and the .
$tbl_name = str_replace("@", "", $tbl_name);
$tbl_name = str_replace(".", "", $tbl_name);


// Connect to server and select databse.

$conn = new mysqli($host, $username, $password, $db_name)or die("cannot connect");



$folder = "/var/www/uploads/".$_SESSION["myusername"]."/";
$file = rand(1000,100000)."-".$_FILES['filetoupload']['name'];
$file_loc = $_FILES['filetoupload']['tmp_name'];
$file_size = $_FILES['filetoupload']['size'];
$file_type = $_FILES['filetoupload']['type'];

// new file size in KB
$new_size = $file_size/1024;  
// new file size in KB
 
// make file name in lower case
$new_file_name = strtolower($file);
// make file name in lower case
 
$final_file=str_replace(' ','-',$new_file_name);

$uploadsuccess=2;

if (isset($_POST["submit"])) {
    
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
    $sql="INSERT INTO " . $tbl_name . "(filename,filetype,filesize) VALUES('$final_file','$file_type','$new_size')";
     $conn->query($sql);
     $uploadsuccess = 1;
 }
    else {
    $uploadsuccess = 0;
 }
}



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
	<!-- <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i" rel="stylesheet"> -->
	
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
							<li><a href="settings.php">Settings</a></li>
							<li><a href="logout.php">Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	
	<div id="fh5co-work">
		<div class="container">
<!--
			<div class="row top-line animate-box">
				<div class="col-md-6 col-md-offset-3 col-md-push-2 text-left fh5co-heading">
					<h2>videos</h2>
					<h3>Free html5 templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h3>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
				</div>
			</div>
-->
            <?php
 if($uploadsuccess==1) {
     echo '<h4 style="color: green;" class="fh5co-top-logo">*Your upload was successful.</h4>';
 }
if($uploadsuccess==0) {
     echo '<h4 style="color: red;" class="fh5co-top-logo">*Your upload was unsuccessful.</h4>';
 }
?>
            
            
            
            <!-- MAKE THE BUTTONS LOOK PRETTY!!! -->
            
            <div class="form-group">
                
                <table>
                    <tr>
                        <td>
                            <a href="#" class="btn btn-primary btn-outline">Create</a>
                        </td>
                    <form action="media.php" method="post" enctype="multipart/form-data">
                        <td>
					       <input type="file" name="filetoupload" id="x" class="inputfile btn btn-primary btn-outline"/>
					       <label class="btn btn-primary btn-outline" for="x"><span>Choose a file</span></label>
				        </td>
                        <td>
                        <input type="submit" value="Upload" name="submit" class="btn btn-primary btn-outline">            
                        </td>
                    </form>
                    </tr>
                </table>
                
                <style>
                    input[type="file"] {
                        display: none;
                    }
                </style>
                
                
               <!-- MAKE THE BUTTONS LOOK PRETTY!!! -->
                
                
 
            </div>
			<div class="row">
				<div class="col-md-4 animate-box">
					<a class="work" href="portfolio_detail.html">
						<div class="work-grid" style="background-image:url(images/project-1.jpg);">
							<div class="inner">
								<div class="desc">
							    </div>
							</div>
                            <h3>Folding Light</h3>
                            <span class="cat">12/13/1988</span>
                            <p class="cat">#friends &nbsp #lakehouse &nbsp #summer</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center animate-box">
					<a class="work" href="#">
						<div class="work-grid" style="background-image:url(images/project-2.jpg);">
							<div class="inner">
								<div class="desc">
									<h3>Power Led Light</h3>
									<span class="cat">Illustration</span>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center animate-box">
					<a class="work" href="#">
						<div class="work-grid" style="background-image:url(images/project-3.jpg);">
							<div class="inner">
								<div class="desc">
									<h3>Elephant Origami</h3>
									<span class="cat">Logo</span>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center animate-box">
					<a class="work" href="#">
						<div class="work-grid" style="background-image:url(images/project-4.jpg);">
							<div class="inner">
								<div class="desc">
									<h3>Electric Kick Scooter</h3>
									<span class="cat">Web Design</span>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center animate-box">
					<a class="work" href="#">
						<div class="work-grid" style="background-image:url(images/project-5.jpg);">
							<div class="inner">
								<div class="desc">
									<h3>Shark Diver</h3>
									<span class="cat">Branding</span>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center animate-box">
					<a class="work" href="#">
						<div class="work-grid" style="background-image:url(images/project-6.jpg);">
							<div class="inner">
								<div class="desc">
									<h3>Objekte Unserer Tage Berlin</h3>
									<span class="cat">Logo</span>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center animate-box">
					<a class="work" href="#">
						<div class="work-grid" style="background-image:url(images/project-7.jpg);">
							<div class="inner">
								<div class="desc">
									<h3>Aloha Shirt</h3>
									<span class="cat">Web Design</span>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center animate-box">
					<a class="work" href="#">
						<div class="work-grid" style="background-image:url(images/project-8.jpg);">
							<div class="inner">
								<div class="desc">
									<h3>Olafur Elliasson Waterfall Versailles</h3>
									<span class="cat">Branding</span>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center animate-box">
					<a class="work" href="#">
						<div class="work-grid" style="background-image:url(images/project-9.jpg);">
							<div class="inner">
								<div class="desc">
									<h3>Hand Care</h3>
									<span class="cat">Logo</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	
<!--
	<div id="fh5co-started">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Get Started</h2>
					<p>We create beautiful themes for your site behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					<p><a href="#" class="btn btn-primary">Let's work together</a></p>
				</div>
			</div>
		</div>
	</div>
-->
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
    <!-- JS for Choose File Button -->
    <script src="js/custom-file-input.js"></script>

	</body>
</html>

