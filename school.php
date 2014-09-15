<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Inline-Block Image Captions</title>

<style type="text/css">
#nav {
    display:table;/*Webkit node fix*/
    width:70%;
    margin:0 auto;
    padding:5px;
    list-style:none;
    word-spacing:-.25em;/*hide white-space nodes*/
    text-align:center;
    background:#BCC5E1;
    border:1px solid #000; 
}
#nav li {
    display:-moz-inline-box;/* FF2 & under */
    display:inline-block;/* for modern browsers */
    vertical-align:top;
    word-spacing:normal;
    margin:5px;
    border:1px solid #000;
    font-weight:bold;
}
* html #nav li {display:inline;}/*IE6*/
*+html #nav li {display:inline;}/*IE7*/

#nav a {
    float:left;/*IE7 needs a float or inline-block (instead of display:block)*/
    width:160px;
    padding:9px 0;
    background:#FFF;
    color:#444;
    text-decoration:none;
}
#nav a:hover {
    background:#CCC; 
    color:#000;
}
#nav img {
    display:block;
    width:160px;
    height:100px;
    margin:0 0 0 0px;/*left margin to offset image dropshadow*/
    border:0;
}
#nav a span {
    display:block;
    width:150px;/*160px total w/ padding*/
    padding:0 5px;
    font-size:.95em;
}
/*=== Testing CSS Round Corners ===*/
#nav, #nav li, #nav a{
    -moz-border-radius:10px;
    -webkit-border-radius:10px;
    border-radius:10px;
}
#nav a {
    border:1px solid #000;
    margin:-1px;
}
</style>
</head>
<body>

<?php

// this file will show or generate all for a school-- sponsor images, content, and
// a link to play stream. Reads a file 'content.php' from the school directory.

if (!isset($dir)); $dir = 'PESH';  // A def value for testing

echo "<!-- accordion menu item-->\n";
echo "<h3>$schools[$dir]</h3>\n";
							
echo "<div><!-- school start -->\n<p>";
#include ("$dir/content.php");	// display the contents for this school
include "config.php";

$maxcols = 3;	// limits columns of images so not to crowd them.
$cols 	 = 0;	// counts cols

if ($handle = opendir($dir)) {
	echo "<caption> Please patronize our Game Sponsors<br>and say 'We listen to SportSoundSRadio!'<br>
	(Links below will open in new tabs.)</caption>";

	// build array of image files
	while (false !== ($file = readdir($handle))) {
		if ( in_array( get_file_extension($file), $imagetypes) ) {
			$ra[] = $file;
		}
	}

    closedir($handle);
	shuffle($ra);
	echo '<ul id="nav">';
	foreach( $ra as $img){
		// build image src tag
		$imgtag = "<img src=$dir/$img>";
		
		// build entire url
		$url = "<a href='$masterSponsorList[$img]' target=_blank> $imgtag </a>";
		
		// pick the best link
		$link = ($masterSponsorList[$img]) ?  $url : $imgtag;
		#$link = $imgtag;
		
		echo "<li>$link</li>";

		}
	echo "</ul>";

}

	echo "</div><!-- school end -->";

?>