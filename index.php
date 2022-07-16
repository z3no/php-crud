<?php
declare(strict_types=1);

require_once realpath(__DIR__ . "/vendor/autoload.php");
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

//include all your model files here
require 'Model/Datasource.php';
<<<<<<< HEAD
require 'Model/Student.php';
//include all your controllers here
require 'Controller/HomepageController.php';
=======
require 'Model/Campus.php';
//include all your controllers here
require 'Controller/HomepageController.php';
require 'Controller/CampusController.php';

>>>>>>> pablo


//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!

$controller = new HomeController();
if(isset($_GET['page']) && $_GET['page'] === 'campus') {
    $controller = new CampusController();
}

<<<<<<< HEAD

$controller->render($_POST);
=======
$controller->render($_GET, $_POST);
>>>>>>> pablo
