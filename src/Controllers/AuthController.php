<?php

class AuthController{

    private UserModel $usermodel;

    public __construct(){
        $this->$usermodel = new UserModel;
    }
}
