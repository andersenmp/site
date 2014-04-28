<?php 
header("Content-Type: text/html; charset=utf-8",true); 
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<?php include "inc/funcoes.inc"; ?>

<?php

$return_json = '{';
$email_check = 'NOK';

if(!isset($_REQUEST['contactName'])){
		$email_check='NOK';
} else {

	$contactName = $_REQUEST['contactName'];
	$email = $_REQUEST['email'];
	$phone = $_REQUEST['phone'];
	$website =  $_REQUEST['website'];
	$message =  $_REQUEST['message'];

	$headers = "Content-type: text/html; charset=utf-8\r\n";
	$headers .= "From: Webmaster ".$urlClean." <" .$emailWebmaster. ">\r\n";
	$headers .= "X-Sender: <" .$emailWebmaster. ">\n";
	$headers .= "X-Mailer: PHP\n"; // sistema
	$headers .= "X-Priority: 3\n"; // 1 Mensagem Urgente, 3 Mensagem Normal
	$headers .= "Return-Path: <" .$emailWebmaster. ">\n";
	$mensagem = "<html><body>";

	$mensagem .= "<table>";
	$mensagem .= "<tr><td>Name:</td><td>" .$contactName. "</td></tr>";
	$mensagem .= "<tr><td>Email:</td><td>" .$email. "</td></tr>";
	$mensagem .= "<tr><td>Telephone:</td><td>" .$phone. "</td></tr>";
	$mensagem .= "<tr><td>Website:</td><td>" .$website. "</td></tr>";
	$mensagem .= "<tr><td>Message:</td></tr>";
	$mensagem .= "<tr><td colspan=2><br/><pre>" .$message. "</pre></td></tr>";
	$mensagem .= "</table>";
	$mensagem .= "</body></html>";


	mail("$emailWebmaster", "$urlClean", "$mensagem","$headers");

	$email_check='OK';
	
	$return_json = $return_json . '"name":"' . $_POST['contactName'] . '",';

}

$return_json = $return_json . '"email_check":"' . $email_check . '"}';

echo $return_json;

?>








