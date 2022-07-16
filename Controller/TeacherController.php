<?php
declare(strict_types=1);

class TeacherController
{
    public function render($GET, $POST)
    {
        $dataSource = new DataSource();
        $dbc = $dataSource ->connect();

        $showAllTeachers = $dataSource->collectAllTeachers();

        //var_dump($showAllCampus);
        require 'View/teachers.php';
    }
}

