<?php

require_once('../classes/Database.php');
require_once('../classes/Signin.php');


$pdo = (new Database())->pdo();
$signin = new Signin($pdo);

$userID = $signin->signIn($_POST['username'], $_POST['password']);

if ($userID) {
    $_SESSION['userID'] = $userID;
    header('Location: ../index.php');
}else {
    header('Location: ../signin.php');
}

