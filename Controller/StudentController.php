<?php

class StudentController
{
    public function render($POST): void
    {

        $dataSource = new Datasource();
        $dataSource->connect();

        $studentsName = $dataSource->displayGroupNamesInStudenId();


        require 'View/studentview.php';

    }
}
