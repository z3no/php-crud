<?php

class EditGroupController
{
    public function render($GET, $POST){

        $dataSource = new DataSource();
        $dataSource->connect();

        if(isset($POST['submit'])){


        }

        require 'View/edit_group.php';

    }
}