 <?php

require_once(__DIR__ . '/../partials/session_start.php');

class Edit
{
    private $db;
    //Dependency Injection
    public function __construct($pdo)
    {
        $this->db = $pdo;
    }
    public function editPost($entryID, $title, $content)
    {
        $statement = $this->db->prepare("UPDATE entries SET title = :title, content = :content WHERE entryID = :entryID");

        $statement->execute([
            ":entryID" => $entryID,
            ":title" => $title,
            "content" => $content
        ]);
    }
}

