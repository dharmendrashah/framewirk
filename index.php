<?php
session_start();
require __DIR__ . '/vendor/autoload.php';//composer autoload file
require __DIR__. '/model/index.php'; //include importan model and functions from model DIR
require __DIR__. '/lupt.php';//environment variables
//echo $csrfToken;
use Jenssegers\Blade\Blade;
//declaration of views
$publicVar = new publicClass;
//blade library
 $blade = new Blade('views', 'cache');
if(!isset($_GET['url'])){
    echo $blade->make('homepage')->render();
    }else{
        switch ($_GET['url']) {
        case 'home':
            echo $blade->make('homepage')->render();
        break;
        case '/':
            echo $blade->make('homepage')->render();
        break;
        case '':
            echo $blade->make('homepage')->render();
        break;
        //logout
        case 'logout':
        session_destroy();
        echo "you are successfully loggedout from this system";
        break;
        
        default:
            echo "404 not found";
    }
}