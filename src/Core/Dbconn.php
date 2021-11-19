<?php

namespace Sogener\Core;

use Dotenv\Dotenv;
use PDO;


class Dbconn
{
    public static function make()
    {
        $dotenv = Dotenv::createImmutable('../');
        $dotenv->load();

        $dsn = "mysql:host={$_ENV['DOCKER_IMAGE_TITLE_MYSQL']};port={$_ENV['DOCKER_PORT_MYSQL']};dbname={$_ENV['BX_MYSQL_DATABASE']}";
        $user = $_ENV['BX_MYSQL_USER'];
        $password = $_ENV['BX_MYSQL_PASSWORD'];

        try {
            $connection = new PDO($dsn, $user, $password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connection;
        } catch (PDOException $e) {
            die('Error while connecting to database: ' . $e->getMessage());
        }
    }
}