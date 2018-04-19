<?php
require '../classes/UsersController.php';
require 'session_start.php';

$user = new User();
$user->logout();
header("Location: ../index.php?message=You signed out successfully");