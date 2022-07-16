<?php
declare(strict_types = 1);


class HomepageController {

    public function render($POST): void
    {
        $dataSource = new Datasource();
        $dataSource->connect();
        $studentsName = $dataSource->displayGroupNamesInStudenId();
        $dbc = $dataSource ->connect();
        $groupData = $dataSource->retrieveGroups();
        $showAllTeachers = $dataSource->collectAllTeachers();
        $dataSource = new DataSource();
        $Dbc = $dataSource ->connect();
        $test = $dataSource->collectAllTeachers();
        $showAllCampus = $dataSource->getCampus();

        require 'View/home.php';
    }
}