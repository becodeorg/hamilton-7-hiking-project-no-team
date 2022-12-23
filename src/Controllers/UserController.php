<?php

class UserController
{

    private UserModel $usermodel;

    public function __construct()
    {
        $this->usermodel = new UserModel();

    }

    public function showprofile(){
        $username = $_SESSION['user']['username'];
        $user = $this->usermodel->findProfile($username);

        include 'Views/Includes/Header.view.php';
        include 'Views/Includes/Navbar.view.php';
        include 'Views/profile.view.php';
        include 'Views/Includes/Footer.view.php';
        }

}