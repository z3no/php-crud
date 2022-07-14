<?php

class HomeController {

    public function render($GET, $POST){



        if(isset($POST['submit'])){


            if($POST['customerId'] !== 'Customer' && $POST['productId'] !== 'Product' && $POST['quantity'] !== 'Quantity'){


            }

        }

        require 'View/home.php';

    }
}