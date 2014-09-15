<!DOCTYPE html>
<HTML>
<head>
<link type="text/css" rel="stylesheet" href="jquery-ui-1.11.1/jquery-ui.css" />
<script type="text/javascript" src="jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="jquery-ui-1.11.1/jquery-ui.min.js"></script>
<!-- script type="text/javascript" src="http://cdn.streamingdvr.net/players/jw510/jwplayer.js"></script> -->
<script src="http://jwpsrv.com/library/iTWgri8qEeKW8SIACp8kUw.js"></script>
<script type="text/javascript" src="accordion.js"></script>
<title>Sport Sounds Radio</title>
</head>
<body>
<!-- header start -->
<table style="border-style: solid; border-collapse: collapse; 
	background-color: rgb(255, 204, 102); 
	width: 100%; height: 20%; bordercolor="#ff0000" cellpadding="2" cellspacing="3">
    <tr>
		<td><br>
			<div style="text-align: center;">
				<img src="SportSoundSRadio%20final%20transblk%20logo.png">
				<font color="#000000" face="Tahoma" size="1"><h2>
				Serving Dallas-Fort Worth and North Texas</h2></font>
                <font color="#FF0000" face="Tahoma" size="4"><h2>
                Texas High School Football 2014</h2></font>
			</div>
		</td>
	</tr>
</table>
<!-- header end -->

<!-- ====================== SCHOOLS ACTIVE START ===================== -->
<div id="accordion">
<?php
	include "config.php";

	// to DISABLE a line below, put a // on line start
	// this section should be only currently active schools
	
	$dir = 'PESH'; include "school.php";
	$dir = 'PSHS'; include "school.php";
	$dir = 'PWSH'; include "school.php";
    $dir = 'District 8-6A'; include "school.php";
    
?>
</div><!-- accordion -->                              
<!-- ====================== SCHOOLS ACTIVE END ======================= -->

<!-- footer start -->
<table style="border-style: solid; border-collapse: collapse; background-color: rgb(255, 204, 102); width: 100%; height: 257px;" bordercolor="#ff0000" cellpadding="2" cellspacing="3">
	<tr>
		<td>
			<div style="text-align: center;">
				<img src="SportSoundSRadio%20final%20transblk%20logo.png">
				<font color="#000000" face="Arial Narrow" size="3"><h2>
				Tell your friends you heard it on "SportSoundSRadio.com"</h2></font>
			</div>
		</td>
	</tr>
</table>
<!-- footer end -->
<!-- Start of StatCounter Code -->
<script type="text/javascript">
var sc_project=3129861; 
var sc_invisible=0; 
var sc_partition=30; 
var sc_security="998ecd35"; 
</script>

<script type="text/javascript" src="http://www.statcounter.com/counter/counter_xhtml.js"></script><noscript><div
class="statcounter"><a class="statcounter"
href="http://www.statcounter.com/"><img class="statcounter"
src="http://c31.statcounter.com/3129861/0/998ecd35/0/" alt="website
stats"></a></div></noscript>
<!-- End of StatCounter Code -->
</body>
</HTML>