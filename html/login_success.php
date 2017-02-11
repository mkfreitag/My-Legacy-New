<?php
session_start();
if(isset($_SESSION["myusername"])) {
     header("location:home.php");
} else {
   header("location:index.php");
}
?>