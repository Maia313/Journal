<?php
require '../classes/Database.php';
require '../classes/Entry.php';
require 'session_start.php';

$entry = new Entry;
$entry->postEntry($_POST["title"], $_POST["content"], $_SESSION["userID"]);
header("Location: ../index.php?message=Entry posted successfully!");