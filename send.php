<?php

session_start();
include 'dbh.php';
$msg=trim($_POST['message']);
$videoId=$_POST['videoId'];
$name=$_SESSION['givenName'];

$sql="insert into posts(msg, name, videoId) values('$msg','$name', '$videoId')";
$result=$conn->query($sql);

?>