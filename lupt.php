<?php
//php environment variabes

//MYSQL GLOBAL 
$MYSQLHOST = "localhost";
$MYSQLPORT = "3600";
$MYSQLDRIVER = "MYSQL";
$MYSQLUSER = "root";
$MYSQLPASSWORD = "";
$MYSQLDATABASE = "crawler";

//website

$link =(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";