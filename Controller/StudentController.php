<?php

class StudentController
{
    public function render($GET, $POST): void
    {

        $dataSource = new Datasource();
        $dataSource->connect();

        $studentsName = $dataSource->displayGroupNamesInStudenId();


        require 'View/studentview.php';

    }
}
