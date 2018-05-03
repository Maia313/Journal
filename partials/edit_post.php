<?php

require_once('../classes/Database.php');
require_once('../classes/Edit.php');

$pdo = (new Database())->pdo();
$edit = new Edit($pdo);
$edit->editPost($_POST['entryID'], $_POST['title'], $_POST['content']);

header('Location: ../index.php');