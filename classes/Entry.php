<?php

require_once(__DIR__ . '/../partials/session_start.php');

class Entry
{
    private $db;

    public function __construct($pdo)
    {
        $this->db = $pdo;
    }

    public function createPost($title, $content, $userID)
    {
        $statement = $this->db->prepare(
            'INSERT INTO entries (title, content, userID)
            VALUES (:title, :content, :userID)'
        );

        $statement->execute([
            ":title" => $title,
            ":content" => $content,
            ":userID" => $userID
        ]); 
    }

    public function getUsersPosts($userID)
    {
        $statement = $this->db->prepare("SELECT * FROM entries WHERE userID = :userID");

        $statement->execute([
            ":userID" => $userID
        ]);
        
        $posts = $statement->fetchAll(PDO::FETCH_ASSOC);
        
        return $posts;
    }

    public function getPostId($entryID)
    {
        $statement = $this->db->prepare("SELECT * FROM entries WHERE entryID = :entryID");

        $statement->execute([
            ":entryID" => $entryID
        ]);
        
        $post = $statement->fetch(PDO::FETCH_ASSOC);
        
        return $post;
    }
}
