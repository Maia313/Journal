<?php
class Entry
{
  public $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }


    public function getEntry($entryID)
    {
        $statement = $this->db->prepare(
        "SELECT * FROM entries WHERE entryID = :entryID"
        );
        $statement->execute([
        ":entryID" => $entryID
        ]);
        return $statement->fetch();
    }


    public function removeEntry($entryID)
    {
        $statement = $this->db->prepare(
        "DELETE FROM entries WHERE entryID = :entryID && userID = :userID"
        );
        $statement->execute([
        ":entryID" => $entryID,
        ":userID" => $_SESSION["userID"]
        ]);
    }


    public function postEntry($title, $content, $userID)
    {
        $statement = $this->db->prepare(
        "INSERT INTO entries (title, content, userID, createdAt) VALUES (:title, :content, :userID, :createdAt)"
        );
        $statement->execute([
        ":title" => $title,
        ":content" => $content,
        ":userID" => $userID,
        ":createdAt" => date("Y-m-d H:i:s")
        ]);
    }


    public function updateEntry($title, $content, $entryID)
    {
        $statement = $this->db->prepare(
        "UPDATE entries SET title = :title, content = :content WHERE entryID = :entryID && userID = :userID"
        );
        $statement->execute([
        ":title" => $title,
        ":content" => $content,
        ":entryID" => $entryID,
        ":userID" => $_SESSION["userID"]
        ]);
    }
    

    public function getAllEntries($userID)
    {
        $statement = $this->db->prepare(
        "SELECT * FROM entries WHERE userID = :userID ORDER BY createdAt DESC"
        );
        $statement->execute([
        ":userID" => $userID
        ]);
        return $statement->fetchAll();
    }

}

