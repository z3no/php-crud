<?php
declare(strict_types=1);

require_once realpath(__DIR__ . "/vendor/autoload.php");
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

//include all your model files here
require 'model/Datasource.php';
require 'model/Campus.php';
require 'model/CampusLoader.php';
//include all your controllers here
require 'controller/HomeController.php';
require 'controller/CampusController.php';




//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!

// switch case to make the controller work
/*$controller = new HomeController();
if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'campus':
            $controller = new CampusController();
            break;
        case 'campusedit':
            $controller = new CampusEditController();
            break;
        default:
            $controller = new HomeController();
    }
}
$controller->render($_GET, $_POST);*/


//$loader = new CampusLoader();
$controller = new HomeController();
if(isset($_GET['page']) && $_GET['page'] === 'home'){
    $controller = new HomeController();
}
elseif (isset($_GET['page']) && $_GET['page'] === 'campus') {
    $controller = new CampusController();
}

$controller->render($_GET, $_POST);