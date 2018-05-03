<?php

require_once('../partials/session_start.php');

class Signin
{
    private $db;
    //Dependency Injection    
    public function __construct($pdo)
    {
        $this->db = $pdo;
    }

    public function signIn($username, $password)
    {
        $statement = $this->db->prepare("SELECT * from users WHERE username = :username");
        
        $statement->execute([
            ":username" => $username
        ]);

        $user = $statement->fetch(PDO::FETCH_ASSOC);

        if (password_verify($password, $user["password"])) {
            return $user['userID'];
        } else {
            return false;
        }
    }
}