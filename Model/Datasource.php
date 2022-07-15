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

    public function collectAllTeachers()
    {
        $dbh = $this->connect();
        $allTeachers = [];

        $sql = "SELECT * FROM teacher_table";
        $query = $dbh->query($sql);
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $teacher = new Teacher($row, []);
            $allTeachers[] = $teacher;
        }

        return $allTeachers;
    }

}

















