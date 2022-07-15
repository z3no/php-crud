<?php
declare(strict_types=1);

require_once realpath(__DIR__ . "/vendor/autoload.php");
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

//include all your model files here
require 'Model/Datasource.php';
require 'Model/Group.php';
//include all your controllers here
require 'Controller/HomepageController.php';
require 'Controller/GroupController.php';

//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!

$controller = new HomepageController();
if(isset($_GET['page']) && $_GET['page'] === 'group') {
    $controller = new GroupController();
}


$controller->render($_GET, $_POST);