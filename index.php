<?php
session_start();
require __DIR__. '/lupt.php';//environment variables
require __DIR__ . '/vendor/autoload.php';//composer autoload file
require __DIR__. '/model/index.php'; //include importan model and functions from model DIR


//echo $csrfToken;
use Jenssegers\Blade\Blade;
//declaration of views
$publicVar = new publicClass;
//blade library
 $blade = new Blade('views', 'cache');

 require __DIR__. '/web/route.php';
// 
