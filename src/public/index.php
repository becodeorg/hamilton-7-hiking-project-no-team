<?php
// $HikeController = new HikeController();
// $HikeController->showIndex();


declare(strict_types=1);

session_start();

require 'vendor/autoload.php';

$url = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$method = $_SERVER['REQUEST_METHOD'];

if ($url === '/' || $url === '') {
    $HikeController = new HikeController();
    $HikeController->showIndex();

}

if ($url === 'registration') {
    $authController = new AuthController();

    if ($method === 'GET') {
        $authController->showRegistrationForm();
    }

    if ($method === 'POST') {
        $authController->register($_POST);
    }
}

if ($url === 'login') {
    $authController = new AuthController();

    if ($method === 'GET') {
        $authController->showLoginForm();
    }

    if ($method === 'POST') {
        $authController->login($_POST);
    }
}

if ($url === 'logout') {
    $authController = new AuthController();
    $authController->logout();
}

if ($url === 'hike') {
    $HikeController = new HikeController();
    $HikeController->showHike();
}

if ($url === 'profil'){
    $UserController = new UserController();
    $UserController->showprofile();
}

if ($url === 'addhike' && $method === 'POST'){
    $HikeController = new HikeController();
    $HikeController->addHike($_POST);
    
}

if ($url === 'addhike' && $method === 'GET'){
    $HikeController = new HikeController();
    $HikeController->showAddPage();
    
}
//TODO Add profile route