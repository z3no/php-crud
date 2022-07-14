<?php

class DataSource
{

    public function connect()
    {

        $servername = $_ENV['MySQL_DB_HOST'];
        $username = $_ENV['MySQL_DB_USER_NAME'];
        $password = $_ENV['MySQL_DB_PASSWORD'];
        $database = $_ENV['MySQL_DB_NAME'];

        try {
            $dsn = "mysql:host=" . $servername . ";dbname=" . $database . ";";
            $pdo = new PDO($dsn, $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function retrieveGroups() : array {
        $sql = "SELECT * FROM group_table";
        $stmt = $this->connect()->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}