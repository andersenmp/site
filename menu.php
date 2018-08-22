<!-- START MENU -->
<?php 

$activeMenuClass = "menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item current_page_item";
$noActiveMenuClass = "menu-item menu-item-type-post_type menu-item-object-page";

?>
<div class="eight columns">
	<div id="nav">
		<div class="nav">
			<ul id="menu-navigation" class="menu">
				<li id="menu-item-1" class="<?php if($pag=='whoami.php'){ echo $activeMenuClass; }else{ echo $noActiveMenuClass;} ?> menu-item-1"><a id="navprofile" href="<?php echo $urlLink; ?>whoami">Who am I?</a></li>
				<li id="menu-item-2" class="<?php if($pag=='resume.php'){ echo $activeMenuClass; }else{ echo $noActiveMenuClass;} ?> menu-item-2"><a id="navbrowse" href="<?php echo $urlLink; ?>resume">Resume</a></li>
				<!-- <li id="menu-item-3" class="<?php if($pag=='contact.php'){ echo $activeMenuClass; }else{ echo $noActiveMenuClass;} ?> menu-item-3"><a id="navsuggestion" href="<?php echo $urlLink; ?>contact">Contact</a></li> -->
			</ul>
		</div>
	</div>
</div>
<!-- END MENU -->
