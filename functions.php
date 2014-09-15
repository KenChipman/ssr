<?php

function get_file_extension($file_name) {
	return substr(strrchr($file_name,'.'),1);
}

function showplayers($server, $filename, $streamDiv){
	// identify the browser type so we can show correct player
	$ua = $_SERVER["HTTP_USER_AGENT"];
	$android  = strpos($ua, 'Android') ? true : false;  // is this browser one?

	$streamDiv = substr(md5(rand()), 0, 7);  // random id for each div
	$thisgamecode = newplayer($server, $filename, $streamDiv);  // JS code for game
	$aac_filename = substr($filename,4) . '_aac';  // make a diff type file name
	
	// code for android players
	$linkAndroid  = "<a href='rtsp://w3x1.streamingdvr.net:1935/live-sssr/$aac_filename' alt='Play'>";
	$linkAndroid .= "<img src='play-button.png'></a><br>Click To Play in Media Player";

	// code for other players
	$linkOther = $thisgamecode;
	
	$chosen_link = ($android) ? $linkAndroid : $linkOther; // display the right link
	$table = "<table border=0 align=center cellspacing=30>
	<tr align='center'><td> $chosen_link  </td></tr></table>";
	return $table;
}

// Aug 29, using NEW service-provided code.
function newplayer($servername, $filename, $streamDiv) {
	// detect ua
	$ua = $_SERVER["HTTP_USER_AGENT"];
	$iphone = strpos($ua, 'iPhone') ? true : false;
	$ipad   = strpos($ua, 'iPad')   ? true : false;

	$givencode = 
	'<div id="container">LIVE</div>
	<script type="text/javascript">
	jwplayer("container").setup({
		  height: "30",
		  autostart : "true",
		  androidhls : "true",
		  sources : [
			{
			file:"rtmp://w3x1.streamingdvr.net/live-sssr/filename"
			},
			{
					file: "http://192.65.240.21:1935/live-sssr/filename_aac/playlist.m3u8"
			}
		]
		});
	</script>';

	// just a link, no JS
	$givencodei2 = '<a href="http://192.65.240.21:1935/live-sssr/filename_aac/playlist.m3u8"><img src="http://vod.streamingdvr.net/images/ios_play.png" width="300" height="150" /></a>';

	// code for iphone ipad, first player omitted...
	$givencodei = 
	'<div id="container">LIVE</div>
	<script type="text/javascript">
	jwplayer("container").setup({
		  height: "30",
		  autostart : "true",
		  androidhls : "true",
		  sources : [
			{
					file: "http://192.65.240.21:1935/live-sssr/filename_aac/playlist.m3u8"
			}
		]
		});
	</script>';

	$new = $givencode;
	$new = str_replace( 'filename'  , $filename,   $new );
	$new = str_replace( '"container"'    , '"'.$streamDiv.'"',  $new );

	$newi = $givencodei2;
	$newi = str_replace( 'filename'  , $filename,   $newi );
	$newi = str_replace( '"container"'    , '"'.$streamDiv.'"',  $newi );

	// adjust height for apple player
	if ($iphone || $ipad) {
		$newi = str_replace( '"30"' , '"200"',  $newi );
		return $newi;
	}

	return $new;
}

?>