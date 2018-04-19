<?php
require '../classes/UsersController.php';
require 'session_start.php';

$user = new User();
$user->login($_POST["username"], $_POST["password"]);

if( $user->isLoggedIn() ){
  header("Location: ../index.php?message=Sign in successfull");
}
else {
  header("Location: ../index.php?message=Try again");
}