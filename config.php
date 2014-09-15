<?php

/*  school section =======================================================================
	include all possible schools here.
	Refer to them as needed in index.php to enable them
*/

$schools = array(
	'PESH' => '<img src=PESHLogo.jpg> Plano East Senior High  -  Friday, Sep 05th  Plano East Panthers at Jesuit Rangers 7:00pm',
	'PWSH' => '<img src=PWHSLogo.jpg> Plano West Senior High  -  Friday, Sep 05th  Plano West Wolves at Sachse Mustangs (Williams)  7:00pm',
	'PSHS' => '<img src=PSHSLogo.jpg> Plano Senior High School  -  Friday, Sep 05th  Plano Wildcats vs Irving MacArthur Cardinals (Clark) 7:00pm also on KVCE-AM 1160',
	'District 8-6A' => '<img src=CedarHillLogo.png> District 8-6A Game of the Week -  Friday, Sep 05th  Cedar Hill Longhorns vs Arlington Bowie Volunteers 7:00pm also on KBXD-AM 1480');  // final entry no comma


	
/*	sponsor section  ======================================================================
	include all possible sponsors here, regardless of school.
	ie... imagename, html code to display image
	To 'disable' a sponsor, simply remove their imagefile from school directory.
*/

$masterSponsorList = array( 
	"RodenbaughsMainStBanner.png" => 'http://www.rodenbaughs.com',
    "FlattShellLogo.png"          => 'http://www.yelp.com/biz/shell-dallas-16',
    "JDByriderlogo.jpg"           => 'http://www.jdbyrider.com/used-car-dealerships/dallas/desoto',
    "CNBofTexasCHillLogo.png"     => 'http://www.cnbwax.com',
    "CNBofTexasMidloLogo.png"     => 'http://www.cnbwax.com',
    "RomasBistroLogo.png"         => 'http://www.romasbistro.com',
	"WEastlogo.png"               => '');                         // no comma after last line


	
/* 
	misc section ============================================================================
	stuff you won't need to change much if ever...
*/

$imagetypes = array('gif','png','jpg','bmp'); // image file types 
include "functions.php";
	
?>