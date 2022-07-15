<?php
class CampusEditController
{
    public function render($GET, $POST)
    {
        $dataSource = new DataSource();
        $dbc = $dataSource ->connect();
        //$showAllCampus = $dataSource->getCampus();

        /*if(isset($POST['submit'])&& $GET['page']=='campus'){

                //include 'View/campusview.php';
        }*/
       // if(isset($POST['submit'])) {
            require 'View/campusviewedit.php';
        //}
    }
}
