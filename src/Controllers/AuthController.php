<?php

class AuthController{

    private UserModel $usermodel;

    public function __construct() {
        $this->usermodel = new UserModel();

    }

    public function register($input){
        //TODO
    }

    public function login($input){
        //Todo

    }

    public function logout(){
          //Todo
    }

    public function showLoginForm(){
              //Todo
    }

    public function showRegistrationForm(){
        //Todo
}
}
