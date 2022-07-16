<?php
declare(strict_types=1);

require_once realpath(__DIR__ . "/vendor/autoload.php");
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

//include all your model files here
require 'Model/Datasource.php';
require 'Model/Student.php';
require 'Model/Teacher.php';
require 'Model/Campus.php';
require 'Model/Group.php';

//include all your controllers here
require 'Controller/HomepageController.php';
require 'Controller/CampusController.php';
require 'Controller/GroupController.php';
require 'Controller/StudentController.php';
require 'Controller/TeacherController.php';
//require 'Controller/InfoController.php';


//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!

$controller = new HomepageController($_POST, $_GET);
if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'student':
            $controller = new StudentController();
            break;
        case 'teacher':
            $controller = new TeacherController();
            break;
        case 'group':
            $controller = new GroupController();
            break;
        case 'campus':
            $controller = new CampusController();
            break;
        case 'edit':
            $controller = new CampusController();
            break;
        default:
            $controller = new HomepageController();
    }
}

$controller->render($_GET, $_POST);





