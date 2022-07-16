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


        //$showAllTeachers = $dataSource->getTeachers();

        //dump($showAllTeachers);


        /*
        $groupID = array_column($groupData, 'id');
        $groupName = array_column($groupData, 'name');
        $groupTeacher = array_column($groupData, 'teacher_id');
        $groupCampus = array_column($groupData, 'campus_id');
        var_dump($groupID);
        var_dump($groupName);
        var_dump($groupTeacher);
        var_dump($groupCampus);
        */

        if(isset($POST['submit'])) {



        }
        require 'View/home.php';
    }
}