<?php 

// app/Core/Database.php
namespace Pedriin647\RadicalErp\Core;

use PDO;
use PDOException;

class Database
{
    private static $instance = null;
    private $connection;

    private function __construct()
    {
        $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
        $dotenv->load();

        $host = $_ENV['DB_HOST'];
        $db   = $_ENV['DB_NAME'];
        $user = $_ENV['DB_USER'];
        $pass = $_ENV['DB_PASS'];

        try {
            $this->connection = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erro de conexão: " . $e->getMessage());
        }
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance->connection;
    }
}
