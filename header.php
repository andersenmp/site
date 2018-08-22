<?php 
header("Content-Type: text/html; charset=utf-8",true); 
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>


<?php include "inc/funcoes.inc"; ?>

<!doctype html>  
<!-- START HEADER -->
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]-->
<!--[if lt IE 7 ]> <html dir="ltr" lang="en-US" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html dir="ltr" lang="en-US" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html dir="ltr" lang="en-US" class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html dir="ltr" lang="en-US" class="no-js"><!--<![endif]-->
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title><?php echo $urlClean; ?></title>
		<meta name="description" content="Brussels-based, IT Consultant, Systems Architect, Project Management, Information Technology, Test Management, Web Development">
		<meta name="keywords" content="it consultant brussels, systems architect brussels, project management brussels, information technology brussels, coldfusion, itil, prince2, web development brussels, test management brussels, rational unified process, rup">
		<meta name="author" content="Andersen Pecorone">
		
		<!-- Mobile Specific Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 

		<!-- Stylesheets -->
		<link rel="stylesheet" href="<?php echo $urlCSS; ?>style.css">
		<link rel="stylesheet" href="<?php echo $urlCSS; ?>skeleton.css">
		<link rel="stylesheet" href="<?php echo $urlCSS; ?>layout.css">
		<link rel="stylesheet" href="<?php echo $urlCSS; ?>formstyle.css">
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
		 
		<!-- Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,300italic,400,500' rel='stylesheet' type='text/css'>

		<!-- Icons -->
		<link rel="shortcut icon" href="<?php echo $urlIcons; ?>favicon.ico">
		<link rel="apple-touch-icon" href="<?php echo $urlIcons; ?>apple-touch-icon_new.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $urlIcons; ?>apple-touch-icon-72x72_new.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $urlIcons; ?>apple-touch-icon-114x114_new.png">

		<!-- jQuery and jQuery fallback -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script>window.jQuery || document.write("<script src='<?php echo $urlJs; ?>jquery-1.5.1.min.js'>\x3C/script>")</script>
		
		<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
		
		<script src="<?php echo $urlJs; ?>app.js"></script>
		
		<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
	</head>

	<body style="" class="home page page-id-29 page-template page-template-<?php echo $pag; ?>-php">
		
		<div class="container">	
		<div class="fifteen columns">
			<div class="topheader"></div>
		</div>

			<!-- <div class="five columns logo">
				<a href="<?php echo $urlSite; ?>">
					<h1>
						<span><?php echo $urlClean; ?> - Web Development Consulting</span>
						 <img src="<?php echo $urlImages; ?>logo.gif" alt="<?php echo $urlClean; ?> - Web Development Consulting" height="111" width="198"> 
					</h1>
				</a>
			</div> -->
<!-- END HEADER --> 
<?php include "menu.php"; ?>