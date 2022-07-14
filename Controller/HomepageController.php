<?php

class HomeController {

    public function render($GET, $POST){

        $dataSource = new DataSource();
        $dbc = $dataSource ->connect();

        $showAllTeachers = $dataSource->getTeachers();
        //dump($showAllTeachers);

        if(isset($POST['submit'])){


            if($POST['customerId'] !== 'Customer' && $POST['productId'] !== 'Product' && $POST['quantity'] !== 'Quantity'){


            }

        }

        require 'View/home.php';

    }
}