<?php

require_once(__DIR__ . '/../partials/session_start.php');

class Delete
{
    private $db;
    //Dependency Injection
    public function __construct($pdo)
    {
        $this->db = $pdo;
    }
    public function deletePost($entryID)
    {

        $statement = $this->db->prepare("DELETE FROM entries WHERE entryID = :entryID");

        $statement->execute([
            ":entryID" => $entryID
        ]);
    }
}

