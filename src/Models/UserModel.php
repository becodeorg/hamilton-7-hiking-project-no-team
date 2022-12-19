<?php

class UserModel extends Database{


    public function create(string $username,string $firstname,string $lastname,string $email, string $passhash,$isAdmin=0): void
    {
        if (!$this->query(
            "INSERT INTO Users(username, mail, firstname, lastname, passhash, isAdmin) VALUES (?, ?, ?, ?, ?, ?)",
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
            "SELECT * FROM Users WHERE username = ?",
            [
                $username,
            ]
        )->fetch()) {
            throw new Exception('Failed login attempt : connection error.');
        }

        return $user;
    }
}

