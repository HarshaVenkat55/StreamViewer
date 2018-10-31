<?php
	session_start();

	if(!isset($_SESSION['access_token'])){
		header('Location: index.html');
		exit();
	}
	//Get videos from channel by YouTube Data API
	$API_key = 'AIzaSyA-4MyI2ejglrhcNIHtcTQURNX9TEIkvfg';
	$channelID = 'UCpd3rD8JXjNUHVETOdlnB4g'; //USK Gaming channel
	$maxResults = 25;

	$videoList = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelID.'&maxResults='.$maxResults.'&key='.$API_key.''));

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Videos form YouTube Channel using Data API v3 and PHP</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.css"></script>
	<style type="text/css">
	.container{padding: 15px;}
	.youtube-video h2{font-size: 16px;}
	.fr{pointer-events:none;} /*makes the content unclickable*/
	</style>
</head>
<body>
	<input type="submit" onclick="location.href='logout.php';" value="Log Out" class="btn btn-danger" style="margin-top: 15px; box-sizing: border-box; float: right;">
	<div class="container">
		<div class="row">
			<?php
				foreach($videoList->items as $item){
					//Embed video
					if(isset($item->id->videoId)){
						// echo '<div class="col-lg-3 col-sm-6 col-xs-6 youtube-video">
						echo '<a href="player.php?val=https://www.youtube.com/embed/'.$item->id->videoId.'&val2='. $item->snippet->title .'"><div class="youtube-video">
							<iframe class="fr" width="280" height="150" src="https://www.youtube.com/embed/'.$item->id->videoId.'" frameborder="0" allowfullscreen></iframe>
							<h2 style="width: 280px; overflow-wrap: normal;">'. $item->snippet->title .'</h2>
						</div></a>';
					}
				}
			?>
		</div>
	</div>
</body>
</html>