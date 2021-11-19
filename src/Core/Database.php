<?php

namespace Sogener\Core;

use PDO;


class Database
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;

    }

    public function getData()
    {
        $getData = $this->pdo->query("SELECT * FROM users ORDER BY id");
        return $getData->fetchAll();
    }

    public function setData($level, $message, $context)
    {
        $context = implode(",", $context);
        $query = "INSERT INTO logs (level, message, context) VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($query);

        $stmt->bindParam(1, $level);
        $stmt->bindParam(2, $message);
        $stmt->bindParam(3, $context);

        $stmt->execute();
    }
}