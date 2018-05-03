<?php

class Database
{
    protected $host = 'localhost:8889';
    protected $db = 'journal';
    protected $user = 'root';
    protected $password = 'root';
    protected $charset = 'utf8';

    public function pdo()
    {
        $dsn = "mysql:host=$this->host;
                dbname=$this->db;
                charset=$this->charset";

        return new PDO($dsn, $this->user, $this->password);
    }
}
