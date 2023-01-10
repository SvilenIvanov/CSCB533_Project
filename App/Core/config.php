<?php

/*set your website title*/

define('WEBSITE_TITLE', "My Website");

/*set database variables*/


/*protocol type http or https*/
define('PROTOCOL','http');

/*root and asset paths*/

$path = str_replace("\\", "/",PROTOCOL ."://" . $_SERVER['SERVER_NAME'] . __DIR__  . "/");
$path = str_replace($_SERVER['DOCUMENT_ROOT'], "", $path);

define('ROOT', str_replace("App/Core", "Public", $path));
define('ASSETS', str_replace("App/Core", "Public/Assets", $path));

/*set to true to allow error reporting
set to false when you upload online to stop error reporting*/

define('DEBUG',true);

define("DB_HOST", "localhost");
define("DB_NAME", "gallery_db");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "08065BC27BD99C473706EE3B46BAA6DB");
