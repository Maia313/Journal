<?php

class Database
{
  private static $instance = null;
  private static $pdo;
  
  public static function connect(){
    // if instance is not set
      // set the instance + create $pdo connection by running construct
    if(!isset(self::$instance)){
      self::$pdo = new PDO(
        "mysql:host=localhost;dbname=journal;charset=utf8",
        "root",   // username
        "root",   //password
        [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
      );
      self::$instance = true;
    }
    // return pdo connection
    return self::$pdo;
  }
}