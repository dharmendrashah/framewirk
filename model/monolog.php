<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;

// Create the logger
$logger = new Logger('application');
// Now add some handlers
$logger->pushHandler(new StreamHandler(__DIR__.'./log/monolog.log', Logger::DEBUG));
$logger->pushHandler(new FirePHPHandler());

// You can now use your logger
$logger->info('_-_-_------__--------------______--_____--------__-___------_--\|/');