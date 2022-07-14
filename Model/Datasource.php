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

    public function retrieveAllStudents(): bool|array
    {
        $dbconnect = $this->connect();

        $studentsArray = [];

        $sql = "SELECT * FROM student_table";
        $stmt = $dbconnect->query($sql);
        while($row =$stmt->fetch(PDO::FETCH_ASSOC)){
        $student = new Student($row, []);
        array_push($studentsArray, $student);}

        return $studentsArray;
    }

    public function retrieveAllCustomerNames()
    {

        $dbh = $this->connect();

        $allCustomerNames = [];

        $sql = "SELECT name FROM student_table";
        $query = $dbh->query($sql);
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $student = new Student($row, []);
            $allCustomerNames[] = $student;
        }

        return $allCustomerNames;
    }
}