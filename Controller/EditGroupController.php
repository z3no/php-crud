<?php

class EditGroupController
{
    public function render($GET, $POST){

        $dataSource = new DataSource();
        $dataSource->connect();
        $groupData = $dataSource->retrieveGroups();

        if(isset($POST['submit'])){


        }

        require 'View/edit_group.php';

    }
}