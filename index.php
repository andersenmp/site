<?php
include "inc/funcoes.inc";
if(isset($_REQUEST['pag']))
{
	if(trim($_REQUEST['pag'])!="")
	{
		//header('Location: '.$urlSite.trim($_REQUEST['pag']).'.php?lang='.$lang);
		header('Location: '.$urlSite.trim($_REQUEST['pag']).'.php');
	} else {
		//header('Location: '.$urlSite.'whoami.php?lang='.$lang);
		header('Location: '.$urlSite.'whoami.php');
	}
} else {
	//header('Location: '.$urlSite.'whoami.php?lang='.$lang);
	header('Location: '.$urlSite.'whoami.php');
}
?>


