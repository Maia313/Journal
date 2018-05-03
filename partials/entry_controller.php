<?php

require_once(__DIR__ . '/../classes/Database.php');
require_once(__DIR__ . '/../classes/Entry.php');


$pdo = (new Database())->pdo();
$entry = new Entry($pdo);

$userID = $_SESSION['userID'];

if(isset($_POST['title']) && isset($_POST['content'])) 
{
    $entry->createPost($_POST['title'], $_POST['content'], $userID);
    header('Location: ../index.php');
}