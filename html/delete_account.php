<?php
session_start();
if( !isset($_SESSION["myusername"]) ) {
    header("location:index.php");
}

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

$myusername = $_SESSION["myusername"];

//delete username/password row from users database & members table

$sql = "DELETE FROM members WHERE username = $myusername" ;
$conn->query($sql);

//delete folder on the server
array_map('unlink', glob("/var/www/uploads/".$myusername."/*"));
rmdir("/var/www/uploads/".$myusername);

//delete table from users database
    //strip the @ and the . from the username
    $myusername = str_replace("@", "", $myusername);
    $myusername = str_replace(".", "", $myusername);
$sql = "DROP TABLE $myusername";
$conn->query($sql);

$conn->close();

//redirect to the splash page
header("location:index.php");


?>