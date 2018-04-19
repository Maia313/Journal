<?php
require_once 'Database.php';

class User
{
  private $db;
  
  public function __construct(){
    $this->db = Database::connect();
  }

  public function login($username, $password)
  {
    // first prepare
    $statement = $this->db->prepare(
      "SELECT * FROM users WHERE username = :username"
    );

    //then execute
    $statement->execute([
      "username" => $username
    ]);

    //then fetch if credentials valid
    $user = $statement->fetch();
    
    if (password_verify($password, $user["password"])) {
      $_SESSION["loggedIn"] = true;
      $_SESSION["username"] = $user["username"];
      $_SESSION["userID"] = $user["userID"];
      session_set_cookie_params(3600);
      return true;
    } else {
      return false;
    }
  }

  public function register($username, $password)
  {
    $hashed = password_hash($password, PASSWORD_DEFAULT);
    // first prepare
    $statement = $this->db->prepare(
      "INSERT INTO users (username, password)
      VALUES (:username, :password)"
    );

    //then execute
    $statement->execute([
      ":username" => $username,
      ":password" => $hashed
    ]);
  }

  public function isLoggedIn()
  {
    if( isset($_SESSION["loggedIn"]) ){
      return true;
    } else {
      return false;
    }
  }
  
  public function logout()
  {
    session_unset();
    session_destroy();
  }
}