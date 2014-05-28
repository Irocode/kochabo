<?php

/*
|--------------------------------------------------------------------------
| Mysql EXTERNE Connect
|--------------------------------------------------------------------------
*/

Photo Gallery:
\kochabo\jquery-file-upload\server\php
zugang1.php
zugang2.php
zugang3.php


Ajax Calls 6 Stück: 
ERLEDIGT MIT:
Alle Calls laufen nun über den jeweiligen Controller Update, Create, Index und Delte


/*
|--------------------------------------------------------------------------
| Pfade
|--------------------------------------------------------------------------
*/
 Fileserver:
kochabo\filemanager\scripts\filemanager.config.js 
ERLEDIGT  MIT:
Musste jede Seite nochmals anrühren weil ich die Config vom Fileserver auf Automatik stellen konnte aber somit alle Pfade dahin waren.


Doksoft Uploader
assets\plugins\ckeditor\plugins\doksoft_uploader\config.php
Erledigt MIT: Auslesen der Pfade dynamisch
$a_baseurl =$_SERVER['PHP_SELF'];
$e_baseurl = str_replace('assets/plugins/ckeditor/plugins/doksoft_uploader/uploader.php', 'filemanager/userfiles/', $a_baseurl);
$domainfertig="$e_baseurl";
$config['BaseUrl'] = $domainfertig;


//Baue filmanager Document Root Url
$a =$_SERVER['DOCUMENT_ROOT'];
$b =$_SERVER['PHP_SELF'];
$e = str_replace('assets/plugins/ckeditor/plugins/doksoft_uploader/uploader.php', 'filemanager/userfiles/', $b);
$ready="$a$e";




up.png

kochabo\assets\plugins\back-to-top.js Pfad ändern
ERLEDIGT  MIT: Auslesen der Pfade dynamisch
//Pfad selber finden
var path = (function(script, path) {
	script = script[script.length - 1];
	var idx = script.src.lastIndexOf('/');
	path = script.src.substring(0, idx + 1);
	return function() {return path;};
})(document.getElementsByTagName('script'));


