<?php



class CampusController
{
    public function render($GET, $POST)
    {
        $dataSource = new DataSource();
        $dbc = $dataSource ->connect();
        $showAllCampus = $dataSource->getCampus();

        if(isset($POST['submit'])){


        }

        require 'View/campusview.php';
    }
}

