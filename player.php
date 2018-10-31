<?php
	include 'dbh.php';
	session_start();
	$value1=$_GET['val'];
	$value2=$_GET['val2'];
	$getId = explode("/", $value1); 
	echo "<script>var p ='". $getId[sizeof($getId)-1] ."';</script>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Player Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.css"></script>
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<script src="js/chat.js"></script>
</head>
<body>
	<input type="submit" onclick="location.href='logout.php';" value="Log Out" class="btn btn-danger" style="margin-top: 15px; box-sizing: border-box; float: right;">
	<div class="container">
		<?php
			echo '<div class="youtube-video">
				<iframe class="fr" width="700" height="600" src="'.$value1.'" frameborder="0" allowfullscreen></iframe>
						<h2 style="width: 700px; overflow-wrap: normal;">'. $value2 .'</h2>
			</div>';

			?>
	</div>

	<div id="main">
        <h1 style="background-color: #6495ed;color: white;"><?php echo $_SESSION['givenName']?>-online</h1>
		<div id="div1" class="output">

		</div>     
        <textarea class="msg" placeholder="Type to send message...." class="form-control"></textarea><br>
        <input type="submit" name="sending" value="Send" onclick="tick()">

    </div>
</body>
</html>