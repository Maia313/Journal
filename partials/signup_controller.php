<?php

require_once('../classes/Database.php');
require_once('../classes/Signup.php');


$pdo = (new Database())->pdo();
$signup = new Signup($pdo);

$signup->store($_POST['username'], $_POST['password']);

header('Location: ../signup.php');



