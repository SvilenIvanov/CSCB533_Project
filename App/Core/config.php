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
