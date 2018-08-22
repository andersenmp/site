<?php
include "inc/funcoes.inc";



/*
$pos = strpos(trim($WhereAmI),'atenta');
if( $pos !== false){
    header('Location: http://atenta.eu/info');
    echo '<br /><br/>';
    echo '<center>';
    echo '<img src="info/img/logo.jpg" width="472" height="156"/>';
    echo '<br /><img src="images/comingsoon_stamp.png"/>';
    echo '</center>';
    
    exit(0);    
}
*/

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


