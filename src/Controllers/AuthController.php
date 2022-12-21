<?php

class AuthController{

    private UserModel $usermodel;

    public function __construct() {
        $this->usermodel = new UserModel();

    }

    public function register($input){
        if (empty($input['username']) || empty($input['email']) || empty($input['password'])) {
            throw new Exception('Form data not validated.');
        }

        $username = htmlspecialchars($input['username']);
        $firstname = htmlspecialchars($input['firstname']);
        $lastname = htmlspecialchars($input['lastname']);
        $email = filter_var($input['email'], FILTER_SANITIZE_EMAIL);
        $password = password_hash($input['password'], PASSWORD_DEFAULT);

        $this->usermodel->create($username,$firstname,$lastname,$email,$password);

        $id = $this->usermodel->getLastInsertId();

        $_SESSION['user'] = [
            'id' => $id,
            'username' => $username,
            'email' => $email
        ];

        http_response_code(302);
        header('location: /');
}


    public function login($input){
        if (empty($input) || empty($input['username']) || empty($input['password'])) {
            throw new Exception('Form data not validated.');
        }

        // Sanitize/validate input
        $username = htmlspecialchars($input['username']);
        $password = htmlspecialchars($input['password']);

        $user = $this->usermodel->find($username);

        if (!password_verify($password, $user['password'])) {
            throw new Exception("Failed login attempt : wrong password");
        }

        $_SESSION['user'] = [
            'id' => $user['id'],
            'username' => $user['username'],
            'email' => $user['email'],
            'loggedIn'=>true

        ];

        // Then, we redirect to the home page
        http_response_code(302);
        header('location: /');

    }

    public function logout(){
        unset($_SESSION['user']);

        header('location: /');
    }

    public function showLoginForm(){
        include 'Views/Includes/Header.view.php';
        include 'Views/Includes/Navbar.view.php';
        include 'Views/loginForm.view.php';
        include 'Views/Includes/Footer.view.php';
    }

    public function showRegistrationForm(){
        include 'Views/Includes/Header.view.php';
        include 'Views/Includes/Navbar.view.php';
        include 'Views/registrationForm.view.php';
        include 'Views/Includes/Footer.view.php';
}
}
