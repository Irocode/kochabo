<?php

// Absolute URL to upload folder via HTTP.
// Will affect to client (JS) part of plugins.
// By default script is configured to automatically detect it.
// If you want to change it, do it like this:
// $config['BaseUrl'] = 'http://yoursite.com/ckeditor_or_tinymce/plugins/doksoft_uploader/userfiles/';
//$config['BaseUrl'] = preg_replace('/(uploader\.php.*)/', 'userfiles/', $_SERVER['PHP_SELF']);


//Baue filmanager Baselink Url


$a_baseurl =$_SERVER['PHP_SELF'];
$e_baseurl = str_replace('assets/plugins/ckeditor/plugins/doksoft_uploader/uploader.php', 'filemanager/userfiles/', $a_baseurl);
$domainfertig="$e_baseurl";
$config['BaseUrl'] = $domainfertig;




//$config['BaseUrl'] = 'http://127.0.0.1/laravel/kochabo/filemanager/userfiles/';


//Baue filmanager Document Root Url
$a =$_SERVER['DOCUMENT_ROOT'];
$b =$_SERVER['PHP_SELF'];
$e = str_replace('assets/plugins/ckeditor/plugins/doksoft_uploader/uploader.php', 'filemanager/userfiles/', $b);
$ready="$a$e";



// Absolute or relative path to directory on the server where uploaded files will be stored.
// Used by this PHP script only.
// By default it automatically detects the directory.
// You can change it, see this example:
// $config['BaseDir'] = "/var/www/ckeditor_or_tinymce/doksoft_uploader/userfiles/";
//$config['BaseDir'] = dirname(__FILE__).'/userfiles/';
$config['BaseDir'] = $ready;

$config['ResourceType']['Files'] = Array(
		'maxSize' => 0, 			// maxSize in bytes for uploaded files, 0 for any
		'allowedExtensions' => '*' 	// means any extensions are allowed
);

$config['ResourceType']['Images'] = Array(
		'maxSize' => 16*1024*1024, 	// maxSize in bytes for uploaded images, 0 for any
		'allowedExtensions' => 'bmp,gif,jpeg,jpg,png'
);

$config['JPEGQuality'] = 95; // Will be used for resizing JPEG images

// Some restrictions to avoid server overload / DDoS
$config['MaxImgResizeWidth'] = 2000; 
$config['MaxImgResizeHeight'] = 2000;
$config['MaxThumbResizeWidth'] = 500;
$config['MaxThumbResizeHeight'] = 500;

if (substr($config['BaseUrl'], -1) !== '/')
	$config['BaseUrl'] .= '/';
if (substr($config['BaseDir'], -1) !== '/' && substr($config['BaseDir'], -1) !== '\\')
	$config['BaseDir'] .= '/';
		
?>





