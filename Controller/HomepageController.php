<?php

class HomepageController {

    public function render($POST){

        $dataSource = new Datasource();
        $dataSource->connect();
        $studentsName = $dataSource->retrieveAllStudents();


        if(isset($POST['submit'])){


            if($POST['customerId'] !== 'Customer' && $POST['productId'] !== 'Product' && $POST['quantity'] !== 'Quantity'){


            }

        }

        require 'View/studentview.php';

    }
}