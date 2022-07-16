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

<<<<<<< HEAD
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

    public function displayGroupNamesInStudenId()
    {

        $dbh = $this->connect();

        $displayArrayGroupNames = [];

        $sql = "SELECT st.id, st.name, st.email, st.group_id, gt.id, gt.name as group_name
                FROM student_table st
                JOIN group_table gt on st.group_id = gt.id
                ORDER BY st.id";
        $query = $dbh->query($sql);
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $student = new Student($row, []);
            $displayArrayGroupNames[] = $student;
        }

        return $displayArrayGroupNames;
    }
=======
    public function getCampus(){

        $allCampusNames = [];

        $sql = "SELECT id, name, location FROM campus_table";
        $stmt = $this->connect()->query($sql);

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $campus = new Campus($row);
            array_push($allCampusNames, $campus);
        }
        return $allCampusNames;

    }

    /*public function getTeachers() : array{
        $sql = "SELECT * FROM teacher_table";
        $stmt = $this->connect()->query($sql);

        $result = $stmt->fetch();
        return $result;
    }*/
>>>>>>> pablo

}