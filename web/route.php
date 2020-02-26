<?php
if(!isset($_GET['url'])){
         echo $blade->make('homepage')->render();
        }else{
             switch ($_GET['url']) {
             case 'home':
                require 'app/controller/home.php';
             break;
             case '/':
                 echo $blade->make('homepage')->render();
             break;
             case '':
                 echo $blade->make('homepage')->render();
             break;
             case 'scrap/':
                require __DIR__. '/../model/scrap.php';
             break;
             //logout
             case 'logout':
            session_destroy();
             echo "you are successfully loggedout from this system";
             break;
            
             default:
             echo $blade->make('errors.404')->render();
         }
     }