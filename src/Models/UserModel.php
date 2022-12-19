<?php

class UserModel extends Database{


    public function create(string $username,string $firstname,string $lastname,string $email, string $passhash,$isAdmin=false): void
    {
        if (!$this->query(
            "INSERT INTO users(username, email, firstname, lastname, passhash, isAdmin) VALUES (?, ?, ?, ?, ?, ?)",
            [
                $username,
                $email,
                $firstname,
                $lastname,
                $passhash,
                $isAdmin,
            ]
        )) {
            throw new Exception('Error during registration.');
        }
    }

    public function find(string $username): array
    {
        if (!$user = $this->query(
            "SELECT * FROM users WHERE username = ?",
            [
                $username,
            ]
        )->fetch()) {
            throw new Exception('Failed login attempt : connection error.');
        }

        return $user;
    }
}

$test = new UserModel();
$test->create('test1', 'Testeur', 'Un', 'testteur@bob.net', 'fhkzhlkdjlqsjoau');
var_dump($test->find('test1'));
