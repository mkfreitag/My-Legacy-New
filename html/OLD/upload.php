<?php
//make sure user is logged in

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

if (isset($_POST["submit"])) {
    
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
    $sql="INSERT INTO " . $tbl_name . "(filename,filetype,filesize) VALUES('$final_file','$file_type','$new_size')";
     $conn->query($sql);
     
     
     echo 'file uploaded dude';
 }
    else {
        echo 'File couldnt be uploaded idk.';
 }
}
    

?>