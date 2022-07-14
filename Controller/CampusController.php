<?php



class CampusController
{
    public function render($GET, $POST)
    {
        $dataSource = new DataSource();
        $dbc = $dataSource ->connect();

        $showAllCampus = $dataSource->getCampus();

        //var_dump($showAllCampus);
        require 'View/campusview.php';
    }
}

