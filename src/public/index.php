<?php

declare(strict_types=1);

session_start();

require 'vendor/autoload.php';

$url = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$method = $_SERVER['REQUEST_METHOD'];

switch($url){
    case $url === '':
        //TODO Index Page
    

}