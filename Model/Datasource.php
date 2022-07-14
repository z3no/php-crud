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
        $dbConnect = $this->connect();

        $allGroupData = [];

        $sql = "SELECT * FROM group_table";
        $stmt = $dbConnect->query($sql);
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $group = new Group($row, []);
            array_push($allGroupData, $group);
        }

        return $allGroupData;
    }

    /*
    public function retrieveGroupNames() : array {
        $sql = "SELECT name FROM group_table";
        $stmt = $this->connect()->query($sql);
        $names = $stmt->fetchAll();
        return $names;
    }
    */
}