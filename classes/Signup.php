<?php

class Signup
{
    private $db;

    public function __construct($pdo)
    {
        $this->db = $pdo;
    }

    public function store($username, $password)
    {
        $hash = password_hash($password, PASSWORD_BCRYPT);
        
        $statement = $this->db->prepare(
            'INSERT INTO users (username, password)
            VALUES (:username, :password)'
        );

        $statement->execute([
            ":username" => $username,
            ":password" => $hash
        ]); 
    }
}

