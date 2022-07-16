<?php

class TeacherController
{
    public function render($GET, $POST)
    {
        $dataSource = new DataSource();
        $dbc = $dataSource ->connect();

        $showAllTeachers = $dataSource->getTeachers();

        //var_dump($showAllCampus);
        require 'View/teacherview.php';
    }
}