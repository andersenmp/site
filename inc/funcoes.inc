<?php
$serverPath = $_SERVER["SCRIPT_FILENAME"];

$pagArray =explode('/', $serverPath);

if(isset($folder)){
	$pag =  $pagArray[count($pagArray)-2] ."/". $pagArray[count($pagArray)-1];
} else {
	$pag = $pagArray[count($pagArray)-1];
}

if(!isset($_REQUEST['lang'])){
	$lang = "en";
} else {
	if(trim($_REQUEST['lang'])=="")
	{
		$lang = "en";
	} else {
		$lang = trim($_REQUEST['lang']);
	}
}

$WhereAmI 		= $_SERVER["HTTP_HOST"];
$localSite 		= substr($serverPath,0,strlen($serverPath)-strlen($pag));
$urlClean		= "andersen.eti.br";
if($WhereAmI=="localhost"){
	$urlClean		= "~andersen/site";
}
$urlSiteLocal  	= ($WhereAmI!=$urlClean && $WhereAmI!="www.".$urlClean) ? "/".$urlClean."/" : "/" ;
$urlSite  		= "http://".$WhereAmI.$urlSiteLocal; 
$urlImages 		= $urlSite 		. "images/";
$urlIcons 		= $urlImages 	. "icons/";
$urlCSS 		= $urlSite 		. "css/";
$urlJs	 		= $urlSite 		. "js/";

//$urlLink 		= $urlSite."?lang=".$lang."&pag=";

$urlLink 		= $urlSite."?pag=";

$emailWebmaster = "webmaster@andersen.eti.br";

?>
