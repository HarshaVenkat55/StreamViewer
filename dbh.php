<?php 

$conn=mysqli_connect("localhost", "root", "", "streamviewerdb");
if(!$conn){
	die("connection failed".mysqli_connect_error());
}

?>