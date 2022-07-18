<?php

class HomeController {

    public function render($GET, $POST){

        $dataSource = new DataSource();
        $dbc = $dataSource ->connect();

        //$showAllTeachers = $dataSource->getTeachers();
        //dump($showAllTeachers);

        if(isset($POST['submit'])){



        }

        require 'view/home.php';

    }
}