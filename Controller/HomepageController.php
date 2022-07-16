<?php

class HomepageController
{

    public function render($POST): void
    {
        $dataSource = new Datasource();
        $dataSource->connect();
        $studentsName = $dataSource->displayGroupNamesInStudenId();

        $dataSource = new DataSource();
        $dbc = $dataSource ->connect();

        $showAllTeachers = $dataSource->getTeachers();
        //dump($showAllTeachers);

        if(isset($POST['submit'])) {


        }
        require 'View/studentview.php';

    }
}