<?php

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

$con=mysqli_connect('localhost','root','','baylanka_ums');

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }
  // echo "Connected successfully";

?>