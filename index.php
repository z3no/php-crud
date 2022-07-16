<?php
declare(strict_types=1);

require_once realpath(__DIR__ . "/vendor/autoload.php");
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

<<<<<<< HEAD
//include all your model files here
require 'Model/Datasource.php';
require 'Model/Student.php';
require 'Model/Campus.php';
require 'Model/Group.php';
=======

//include all your model files here
//require 'Model/User.php';
require 'Model/Datasource.php';
require 'Model/Student.php';
>>>>>>> origin/alex
require 'Model/Teacher.php';



//include all your controllers here
require 'Controller/HomepageController.php';
<<<<<<< HEAD
require 'Controller/CampusController.php';
require 'Controller/GroupController.php';
require 'Controller/StudentController.php';
require 'Controller/TeacherController.php';

=======
require 'Controller/TeacherController.php';
//require 'Controller/InfoController.php';
>>>>>>> origin/alex

//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!

$controller = new HomeController();
if(isset($_GET['page']) && $_GET['page'] === 'campus') {
    $controller = new CampusController();
}

$controller->render($_POST);

$controller->render($_GET, $_POST);

<<<<<<< HEAD
=======

$controller->render($_GET, $_POST);
>>>>>>> origin/alex
