<?php

declare(strict_types=1);

session_start();

require 'vendor/autoload.php';

$url = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$method = $_SERVER['REQUEST_METHOD'];

$HikeController = new HikeController();
$HikeController->showIndex();


// switch($url){
//     case $url === '':
//         //TODO Index Page
//         echo "test";
//         $HikeModel = new HikeModel();
//         var_dump($HikeModel);
//         break;

//     case $url === "register":
//         break;
    

// }
