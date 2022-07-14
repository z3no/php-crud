<?php

class HomepageController {

    public function render($GET, $POST){

        $dataSource = new DataSource();
        $dataSource->connect();
        $groupData = $dataSource->retrieveGroups();



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


        if(isset($POST['submit'])){


        }

        require 'View/groupview.php';

    }
}