<?php

require_once('../classes/Database.php');
require_once('../classes/Delete.php');

$pdo = (new Database())->pdo();
$delete = new Delete($pdo);
$delete->deletePost($_POST['entryID']);

header('Location: ../index.php');