<?php

class GroupController
{
    public function render($GET, $POST)
    {
        $dataSource = new DataSource();
        $dbc = $dataSource ->connect();

        $groupData = $dataSource->retrieveGroups();

        //var_dump($groupData);
        require 'View/groupview.php';
    }

}