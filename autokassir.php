<?header("Content-Type: text/html; charset=utf-8");include_once($_SERVER["DOCUMENT_ROOT"].'/ajax/configSettings.php');include_once($_SERVER["DOCUMENT_ROOT"].'/config.php');$pimeriaHtml = <<<HTML	<div style="text-align: center; font-size: 19px; color: #D3A23A; text-transform: uppercase; padding-bottom: 3px;">Пополнение через Primearea.ru:</div>	<div style="text-align: center; font-size: 13px; margin-top: -8px; padding-bottom: 10px; color: #CBCBCB;"><h4>Выберите сумму пополнения</h4> (после оплаты вы получите код, который надо ввести ниже)</div>	<div style="text-align: center; font-size: 13px; margin-top: -8px; padding-bottom: 10px; color: #CBCBCB;">	<div class="paytype" data-system="10" style="margin-left: 12%; width: 189px;"><center><img src="./img/10rub.png" style="width: auto; margin-top: 1px; margin-right: 0px; opacity: 0.6;"></center></div>	<div class="paytype" data-system="100" style="width: 189px;"><center><img src="./img/100rub.png" style="width: auto; margin-top: 1px; margin-right: 0px; opacity: 0.6;"></center></div>	<div class="paytype" data-system="500" style="margin-left: 12%; width: 189px;"><center><img src="./img/500rub.png" style="width: auto; margin-top: 1px; margin-right: 0px; opacity: 0.6;"></center></div>	<div class="paytype" data-system="1000" style="width: 189px;"><center><img src="./img/1000rub.png" style="width: auto; margin-top: 1px; margin-right: 0px; opacity: 0.6;"></center></div>HTML;$disingerHtml = <<<HTML	<div style="text-align: center; font-size: 19px; color: #D3A23A; text-transform: uppercase; padding-bottom: 3px;">Пополнение через Autokassir.ru:</div>	<div style="text-align: center; font-size: 13px; margin-top: -8px; padding-bottom: 10px; color: #CBCBCB;"><div class="form-group" style="margin-top: 15px;margin-left:38%;">					<div class="input-group">					<div class="addbal"><a href="http://csgodevice.ru/autokassir.php">Пополнить</a></div>					</div>				</div></div>		 TML;if($caseS["digiseller"]["on"] == "1"){$payHtml .=$disingerHtml;}if($caseS["primearea"]["on"] == "1"){$payHtml .=$pimeriaHtml;}if($caseS{site_on} == "0"){echo <<<HTML<html lang="en"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><head><title>Технические работы на сайте! Попробуйте зайти позже.</title><style type="text/css">::selection{ background-color: #E13300; color: white; }::moz-selection{ background-color: #E13300; color: white; }::webkit-selection{ background-color: #E13300; color: white; }body {	bckground-color: #fff;	margin: 40px;	font: 13px/20px normal Helvetica, Arial, sans-serif;	color: #4F5155;}a {	color: #003399;	background-color: transparent;	font-weight: normal; }1 {	color: #444;	background-color:rgba(239, 239, 239, 1);	border-bottom: 1px solid #D0D0D0;	font-size: 19px;	font-weight: normal;	margin: 0 0 14px 0;	padding: 14px 15px 10px 15px;}code {	font-family: Consolas, Monaco, Courier New, Courier, monospace;	font-size: 12px;	background-color: #f9f9f9;	border: 1px solid #D0D0D0;	color: #002166;	display: block;	margin: 14px 0 14px 0;	padding: 12px 10px 12px 10px;}#container {	margin: 10px;	border: 1px solid #D0D0D0;	-webkit-box-shadow: 0 0 8px #D0D0D0;}p {	margin: 12px 15px 12px 15px;}</style></head><body>	<div id="container">		<h1>Проводятся технические работы</h1>		<p> <b>В настоящее время сайт недоступен в связи с техническими работами. Об окончании работ не известно так что ждите.</b></p></div></body></html>HTML;exit;}//open: "true" - Включить кейс, false - Выключить кейс//price: цена на кейс//Если вы выключили некоторые кейсы и они теперь они не ровные то найдите в файле index.php строку неровного кейса и в классе class="item-wrapper small" удалите small$echo =<<<HTML<div style="width: 400px; float: left; padding-top: 30px; text-transform: uppercase;">		<div style="font-size: 21px; font-weight: bold; padding-bottom: 4px; color: #D3A23A;">2 веские причины покупать у нас:</div>		<div style="font-size: 16px; color: #c5c4c4;">- У нас дешевле, чем в Steam</div>		<div style="font-size: 16px; color: #c5c4c4; padding-bottom: 3px;">- Выше шанс выпадения дорогих предметов</div>		<hr class="style-two" style="margin: 0;">	</div><di class="pull-right" style="padding-top: 15px; padding-right: 25px;">		<div style="padding-top: 9px; font-size: 14px; text-align: center;">								  <script src="//ulogin.ru/js/ulogin.js"></script>								  <ul class="nav navbar-nav" style="float: right">								  <li style="float: center"><span style="font-size: 16px;">Авторизация через </span> </li>									  <li style="float: center;margin-top:10px"><div id="uLogin" data-ulogin="display=panel;fields=first_name,last_name;providers=steam,vkontakte;hidden=;redirect_uri=http%3A%2F%2F{$_SERVER["HTTP_HOST"]}%2F"></div></li><hr class="style-two" style="margin-top: 5;">		</div>		</div>HTML;if(isset($_GET["uniquecode"]))include_once($_SERVER["DOCUMENT_ROOT"].'/t/index_auto.php');     if($_SERVER["QUERY_STRING"] == "logout"){		    echo  '		   <script type="text/javascript">		   var date = new Date( new Date().getTime() + 1*1000 );           document.cookie="token=; path=/; expires="+date.toUTCString();           document.cookie="uid=; path=/; expires="+date.toUTCString();		   </script> 	   ';		   $_OOKIE["token"]="";     	   exit('<script language="JavaScript"> indow.locatio.href = "http://'.$_SERVER["HTTP_HOST"].'" <sript>');    else{	 f(isst($_PO['tokn']) || trim($_COOKIE["token"]) !== ""){if(!isset($_POST["token"])){$token = $_COOKIE["token"];include "config.php";$users_shop = mysql_query("SELECT * FROM `users_shop` WHERE `token`='$token'",$db);$users_shop_arr = mysql_fetch_assoc($users_shop);$token_count = mysql_num_rows($users_shop);$users_shop_count = mysql_num_rows($users_shop);$trade_url = $users_shop_arr["trade_url"];$user = $users_shop_arr;}else{	$tkn  $_POST['toke'];$s = file_get_contents('http://ulogin.ru/token.php?token=' . $token . '&host=' . $_SERVER['HTTP_HOST']);$user = json_decode($s, "true");$uid = $user["uid"]; echo <<<HTML		   <script type="text/javascript">		   var date = new Date( new Date().getTime() + 1440*1000 );           document.cookie="token=$token; path=/; expires="+date.toUTCString();           document.cookie="uid=$uid; path=/; expires="+date.toUTCString();		   </script> HTM; f(!isset($use["error"])){ echo <<<HTML		   <script type="text/javascript">		   var date = new Date( new Date().getTime() + 1440*1000 );           document.cookie="token=$token; path=/; expires="+date.toUTCString();           document.cookie="uid=$uid; path=/; expires="+date.toUTCString();		   </script> HTMLiclude cnfigphp";$ud = $user["uid"];$network = $user["network"];	$idenit =$user["identiy"];	$firstnae  htmlspecialcars($user["first_name"]);	$last_nme= tmlspecialchas($user["last_name"]);	$i = $usr[lat_name"];	$uers_sho =myql_query("SEECT * FROM `users_shop` WHERE `uid`='$uid'",$db);$st = mysql_query("UPDATE `users_shop` set `token` = '$token' where `uid` = '$uid'");$users_shop_count = mysql_num_rows($users_shop);$users_shop_arr = mysql_fetch_assoc($users_shop);$trade_url = $users_shop_arr["trade_url"];$token_count = 1;	       	switch ($network) {			  case "vkontakte":				 $request = 'http://api.vkontakte.ru/method/users.get?uids=' . $user['uid'] . '&fields=photo';				 $response = file_get_contents($request);				 $info = array_shift(json_decode($response)->response);				 $img = $info->photo;			     break;			  case "steam":  //Преждевсговам понадобитя apikey. Зарегистрировать его можно здесь http://steamcommunity.com/dev/apikey (Заменить 47F82A866F31B5F7E07BC86FE4A3C265)				 $request = 'http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=47F82A866F31B5F7E07BC86FE4A3C265&steamids=' . $user['uid'];				 $response = file_get_contents($request);				 $info = json_decode($response,"true");				 $img = $info["response"]["players"]["0"]["avatar"];				 $personanam = $info["response"]["players"]["0"]["personaname"];			     break; 			}   			usr  $p_rr; o <<<HTML		   <script type="text/javascript">		   var date = new Date( new Date().getTime() + 14400*1000 );           document.cookie="token=$token; path=/; expires="+date.toUTCString();           document.cookie="uid=$uid; path=/; expires="+date.toUTCString();		   </script> HTML;			}} f(toke "1") nybalace = $users_shopar["money"]							             /$usть, через которую авторизовался пользователь                    //$user['identity'] - уникальная строка определяющая конкретного пользователя соц. сети                    //$user['first_name'] - имя пользователя                    //$user['last_name'] - фамилия пользователя				    //$user = Array ( [uid] => 76561198159117767 [network] => steam [identity] => http://steamcommunity.com/openid/id/76561198159117767 [first_name] => HakerHelp [last_name] => Кожич [manual] => last_name [profile] => http://steamcommunity.com/openid/id/76561198159117767 )			     	//$user = Array ( [identity] => http://vk.com/id166340246 [profile] => http://vk.com/id166340246 [first_name] => Евгений [uid] => 166340246 [network] => vkontakte [last_name] => Кожич )	       	switch ($users_shop_arr["network"]) {			  case "vkontakte":				 $request = 'http://api.vkontakte.ru/method/users.get?uids=' . $user['uid'] . '&fields=photo';				 $response = file_get_contents($request);				 $info = array_shift(json_decode($response)->response);				 $img = $info->photo;			     break;			  case "steam":  //Прежде всего вам понадобтсяapkey. Зарегистировать его можно здесь http://steamcommunity.com/dev/apikey (Заменить 47F82A866F31B5F7E07BC86FE4A3C265)				 $request = 'http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=47F82A866F31B5F7E07BC86FE4A3C265&steamids=' . $user['uid'];				 $response = file_get_contents($request);				 $info = json_decode($response,"true");				 $img = $info["response"]["players"]["0"]["avatar"];				  $personanam = $info["response"]["players"]["0"]["personaname"];			     break; 			}   				 if($users_shop_cunt=="	$tkens=mtime());				 	$result2 = mysql_query("INSERT INTO `users_shop` (`uid`, `network`,`img`,`last_name`,`first_name`,`identity`,`token`) VALUES('$uid','$network','$img','$last_name','$first_name','$identity','$tokens')") or die(mysql_error());				 	$users_shop = mysql_query("SELECT * FROM `users_shop` WHERE `uid`='$uid'",$db);				 	$users_shop_count = mysql_num_rows($users_shop);				 	$users_shop_arr = mysql_fetch_assoc($users_shop);				 }				 ################################################################################$refLink = $_SERVER["HTTP_HOST"]."/?r={$users_shop_arr['id']}";$randchance = "";//'<a style=" font-size: 15px; color: #FF2D2D;" data-
  modal="#randchance"href="#">[Рандомный шанс: 0%]<a';//2DFF40if(trim($user['first_name']) == "")$user['first_name'] = $user['last_name'];if($users_shop_arr['id'] == $ADMIN_ID)$adm_cd = '<a href="/admin.php">[Админка]</a> ';			switch ($users_shop_arr["network"]) {			  case "vkontakte":				 				 $echo =<<<HTML				 style="float: right; padding-top: 10px; margin-right: 25px;">		 			<dilass="userinox">				<div style="float: left"><img width="26" src="$img">   {$users_shop_arr['first_name']} {$users_shop_arr['last_name']} #{$users_shop_arr['id']} $randchance {$adm_cd}<a href="/?logout">[Выйти]<a></div>				<!-- <div class="orderhistory">История покупок</div> -->						</div>		     			< ylelef-size: 21px; color: #EEE;">Ваш баланс: <span class="userBalance"><$moneybalance руб> 			<div style="float: right; margin-left: 15px; margin-top: -2px;">				<form class="form-inline">				<div class="form-group">					<div class="input-group">					</div>				</div>				</form>							</div>						<diass="clearf</di						/div>			 HTML;			      ea			 se "eam 		 		 $TML								 								 	<div styl="flot: right; pad 10pxright: 25px;">					<div class="userinfobox">				<div style="float: le"><img width=6" src="$img">   {$personanam} #{$users_shop_arr['id']} {$adm_cd}<a href="/?logout">[Выйти]<a></div>					</div>				     $randchance			<div style="float: lef font-size: ; color: #E;">Ваш баланс: <span class="userBalance">$moneybalance </span> руб</div>					<div style="float: right; margin-left: 15px; margin-top: px;">				<fo class="form-inline">				<div class="form-group">					<div class="input-group">					<div class="addbal"><a data-modal="#paySystems" href="#">Пополнить</a></div>					</div>				</div>				</form>							</div>						<div class="clearfix"></div>					</div>	HTML;			 brea         }  			  if($users_shop_a"ban"= 1)$ech=<<L<div style="float rigt; padding-top: 10px; margin-right: 25px;">					<div class="userinfobox">				<div style="float: left"><img width="26" src$img">   {$uss_shop_arr["first_name"]} {$users_shop_arr["last_name"]} #{$users_shop_arr['id']} <a href="/?logout">[Выйти]</a></div>					</div>			<span class="userPanelError">Вы заблокированы!				</div>			 HTML;}elseec =<<<HTM	<div class="pull-right" style="paddintop: 15p paddinht:;">		<div style="padding-top: 9px; fnt-size: 14px; text-align: center;">								  <script src="//ulogin.ru/js/ulogin.js"></script>								  <ul class="nav navbar-nav" style="float: right">								  <li style="float: center"><span style="font-size: 16px;">Авторизация через </span> </li>								  								  <li style="float: center;margin-top:10px"><div id="uLogin" data-ulogin="del;fiename,last_name;providers=steam,vkontakte;hidden=;redirect_uri=http%3A%2F%2F{$_SERVER["HTTP_HOST"]}%2F"></div></li><hr class="style-two" style="margin-top: 5;">		</div>		</div>HTML;	} }        ?> <html><head><script type="text/javascript" async="" src="http://mc.yandex.ru/metria/wtch.ip><sce="tet/javscript" async="" src="http://mc.yandex.ru/metrika/watch.js"></script><script type="text/javascript" async="" src="http://mc.yandex.ru/metrika/watch.js"></script><script type="text/javascript" src="/BCF6B6283D00456D879F84529267A253/B92C4F79-AD03-D946-9FA1-8422376142A6/main.js" charset="UTF-8"></script><script type="text/javascript" async="" src="http://mc.yandex.ru/metrika/watch.js"></script><script type="text/javascript" src="/BCF6B6283D00456D879F84529267A253/EB8C7105-09AE-8E49-999A-F47D7E4CB006/main.js" charset="UTF-8"></script>	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">	<title><?echo $caseS["site_name"];?></title>	<meta name="description" content="<?echo $caseS["metadescr"];?>">	<meta name="keywords" content="<?echo $caseS["sitedescription"];?>">	<link rel="shortcut icon" type="image/x-icon" href="<?echo "http://".$_SERVER["HTTP_HOST"];?>images/csicon.png">	<!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->	<link href="./css/style.css" rel="stylesheet">	<link href="./css/styles.css" rel="stylesheet">	<link href="./css/bootstrap.min.css" rel="stylesheet">	<link href="./css/jquery.arcticmodal-0.3.css" rel="stylesheet" media="screen">		<link href="//fonts.googleapis.com/css?family=Roboto:400,300,500,700&amp;subset=latin,cyrillic" rel="stylesheet"type="text/css"	<link href="//fonts.googleapis.com/css?family=Ubuntu&amp;subset=latin,cyrillic" rel="stylesheet" type="text/css">		    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></scrit> 	<script tye="ext/javascript" src="//vk.com/js/api/share.js?90"></script>	<script type="text/javascript" src="http:/cdn.socket.i/socket.io-1.3.4.js"></script> 	<script src="/js/bootstrap.min.js"></script>	<script type="text/javascript" src="/js/jquery.arcticmodal-0.3.min.js"</script>	<scrpt type="text/javascript">		if (!navigator.cookieEnabled) {  		alert('Включите cookie для комфортной работы с этим сайтом');		}	</script>	<script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>	<script type="text/javascript" src="/js/cases.js"></script>	<script type="text/javascript" src="/js/server.js"></script> 	<script type="text/javascript" src="//vk.com/js/api/openapi.js?116"></script> <style type="text/css">.kisb .kl_abmen { font-size:12x; font-family: "Segoe UI", Arial, sans-serif; color: #FFFFFF; flat: left; paddng: 8px; border: 1px solid #FFFFFF; background: #057662; background: -moz-linear-gradient(#057662, #1a8171);background: -ms-linear-gradient(#057662, #1a8171);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #057662), color-stop(100%, #1a8171)); background: -webkit-linear-gradient(#057662, #1a8171); background: -o-linear-gradient(#057662, #1a8171);filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#057662", endColorstr="#1a8171"); -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr="#057662", endColorstr="#1a8171")";background: linear-gradient(#057662, #1a8171);border-radius: 8px;}</style><style type="text/css">.kisb .kl_abmenu { font-size:12px; font-family: "Segoe UI", Arial, sans-serif; color: #FFFFFF; float: left; padding: 8px; border: 1px solid #FFFFFF; background: #057662; background: -moz-linear-gradient(#057662, #1a8171);background: -ms-linear-gradient(#057662, #1a8171);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #057662), color-stop(100%, #1a8171)); background: -webkit-linear-gradient(#057662, #1a8171); background: -o-linear-gradient(#057662, #1a8171);filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#057662", endColorstr="#1a8171"); -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr="#057662", endColorstr="#1a8171")";background: linear-gradient(#057662, #1a8171);border-radius: 8px;}</style><style type="text/css">.kisb .kl_abmenu { font-size:12px; font-family: "Segoe UI", Arial, sans-serif; color: #FFFFFF; float: left; padding: 8px; border: 1px solid #FFFFFF; background: #057662; background: -moz-linear-gradient(#057662, #1a8171);background: -ms-linear-gradient(#057662, #1a8171);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #057662), color-stop(100%, #1a8171)); background: -webkit-linear-gradient(#057662, #1a8171); background: -o-linear-gradient(#057662, #1a8171);filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#057662", endColorstr="#1a8171"); -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr="#057662", endColorstr="#1a8171")";background: linear-gradient(#057662, #1a8171);border-radius: 8px;}</style></head><body style="overflow: visible; margin-right: 0px;"><div class="wrapper" style="width: 1125px; padding-top: 5px;">	<div class="row" style="margin-left: 5px;">		<div class="brand-wrapper" style="width: 388px; float: left;">		<div class="clearfix">			<div class="pull-left">				<a href="<?echo "http://".$_SERVER["HTTP_HOST"];?>"><img src="./css/csgomslogo.png" alt="<?echo $_SERVER["HTTP_HOST"];?>" ></a>			</div>			<div class="lnav" >			<hr class="style-two" style="marin-top: 0px; margin-bottom: 1px;">			<!-- <a data-modal="#siterantee" href= style="margin-right: 4px;">ГАРАНТИИ</a>-->			</div>		</div>   	</div>		<?echo $echo;?>					</div>	<div class="stone containero" style="padding: 15px 10px; margin-bottom: -10 height: 100>	<div styl="font-ize 2px;olo: F7FF7; text-align: center; text-transform: uppercase; padding-bottom: 12.5px; font-weight: bold; line-height: 21px;">	Пополнить баланс на сайте<br>	<span style="font-size: 17px; font-weight: normal; text-transform: lowercase; letter-spacing: 1px;">С помощью Autokassir</span>	</div></div><div class="stone containero"><div class="item-wrapper" style="display:<?if($case["Chroma Case"]["open"] !== "true")echo "none"?>;">	<div class="item" data-key="Chroma Case" data-price="<?echo $case["Chroma Case"]["price"];?>">		<div class="desc">			<div class="name">				Пополнение<br>				<span>на</span>			</div>		</div> 				<div class="img-wrapper">			<a class="item-link">				<img src="./img/money.png" width="189px" class="itemsimg" >			</a>		<di		<img src".ss/stand.png" class="stand" >		<div class="cost">			<img src="./css/money.png" > <?echo $case["Chroma Case"]["50"];?>10 рублей		</div>		<div class="buyb">			<img src="./css/ook.png" style="margin-top: -3px;" > Открыть		</div>	</div></div><div class="item-wrapper" style="display:<?if($case["Operation Phoenix"]["open"] !== "true")echo "none"?>;">	<div class="item" data-key="Operation Phoenix" data-price="<?echo $case["Operation Phoenix"]["price"];?>">		<div class="desc">			<div class="name">				Пополнение<br>				<span>на</span>			</div>		</div>				<div class="img-wrapper">			<a class="item-link">				<img src="./img/money.png" width="189px" class="itemsimg" >			</a>		</div>	<img src="./c/stand.png" class="stand" >		<div class="cost">			<img src="./css/money.png" > <?echo $case["no"]["123"];?>100 рублей		</div>		<div class="buyb">			<img src="./css/ook.png" style="margin-top: -3px;" > Открыть		</div>	</div></div><div class="item-wrapper" style="display:<?if($case["Operation Breakout"]["open"] !== "true")echo "none"?>;">	<div class="item" data-key="Operation Breakout" data-price="<?echo $case["no"]["123"];?>">		<div class="desc">			<div class="name">				Пополнение<br>				<span>на</span>			</div>		</div>				<div class="img-wrapper">			<a class="item-link">				<img src="./img/money.png" width="189px" class="itemsimg" >			</a>		</div>	img src="./csstand.png" class="stand" >		<div class="cost">			<img src="./css/money.png" > <?echo $case["no"]["123"];?>500 рублей		</div>		<div class="buyb">			<img src="./css/ook.png" style="margin-top: -3px;" > Открыть		</div>	</div></div><div class="item-wrapper" style="display:<?if($case["Operation Vanguard"]["open"] !== "true")echo "none"?>;">	<div class="item" data-key="Operation Vanguard" data-price="<?echo $case["no"]["123"];?>">		<div class="desc">			<div class="name">				Пополнение<br>				<span>на</span>			</div>		</div>				<div class="img-wrapper">			<a class="item-link">				<img src="./img/money.png" width="189px" class="itemsimg" >			</a>		</div>		<g src="./css/snd.png" class="stand" >		<div class="cost">			<img src="./css/money.png" > <?echo $case["no"]["123"];?>На 1000 рублей		</div>		<div class="buyb">			<img src="./css/ook.png" style="margin-top: -3px;" > Открыть		</div>	</div></div></div>	<div class="clearfix"></div><div id="recent_wins2"></div><div id="reviews">	<hr class="style-two"></div><div class="clearfix"></div><div style="width: 700px; margin: 0 auto; "><!-- modals-start --><div style="display: none;"><div id="itemmodal" class="itemmodal">	<div class="box-modal_close arcticmodal-close"></div>				<div style="text-align: center; padding-top: 13px">			<a href="http://csgo-store.autoweboffice.ru/?r=ordering/cart/as1&id=32&clean=true&=ru" button cls="priceCaseBtn" target="_blank">10 рублей</a>			<a href="http://csgo-store.autoweboffice.ru/?r=ordering/cart/as1&id=33&clean=true&lg=ru" button class="priceCaseBtn" target="_blank">100 рублей</a>			<a href="http://csgo-store.autoweboffice.ru/?r=ordering/cart/as1&id=36&clean=true&lg=ru" button class="priceCaseBtn" target="_blank">500 рублей		<a href="http://csgo-store.autoweboffice.ru/?r=ordering/cart/as1&id=35&clean=true&lg=ru" button class="priceCaseBtn" target="_blank">1000 рублей</a>			<div class="clearfix"></div>		</div>						<hr class="style-two" style="margin-bottom: 7px;">				<div class="clearfix"></div>
