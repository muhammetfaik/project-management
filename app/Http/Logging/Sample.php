<?php 
use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;


// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('/home/muhammetubuntu/Codes/Inventory-Management-System-in-Laravel/storage/logs/laravel-2023-05-02.log',Level::Warning));

// add records to the blog
$log->warning('Foo');
$log->error('Bar');