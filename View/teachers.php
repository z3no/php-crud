<?php
declare(strict_types=1);
include_once 'Model/Datasource.php';
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<div class="container">
    <div class="row-12">
    </div>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Delete</th>
            <th scope="col">Edit</th>
            <th scope="col">ID</th>
            <th scope="col">Teacher Name</th>
            <th scope="col">Teacher Email</th>


        </tr>
        </thead>
        <tr>
            <th scope="row"></th>
            <?php foreach($allTeachers as $teacher): ?>
        <tr>
            <th scope="col"><a href=""><button class="btn btn-danger">Delete</button></a></th>
            <th scope="col"><a href=""><button class="btn btn-success">Edit</button></a></th>
            <td><?php echo $teacher->getId(); ?></td>
            <td><?php echo $teacher->getName(); ?></td>
            <td><?php echo $teacher->getEmail(); ?></td>

        </tr>
        <?php endforeach; ?>
    </table>

    <div class="row justify-content-center">
        <form action="" method="POST">
            <div class="form-group">
                <lable>Name</lable>
                <label>
                    <input type="text" name="name" class="form-control" >
                </label>
            </div>
            <div class="form-group">
                <lable>Email</lable>
                <label>
                    <input type="text" name="email" class="form-control">
                </label>
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="save">Create New</button>
            </div>

        </form>
    </div>
    </div>


<?php
require_once 'Model/Datasource.php';
if (isset($_POST['save'])) {
    $data = $_POST;
//    Validate required fields
    $errors = [];
    foreach (['name', 'email'] as $field)
        if (empty($data[$field])) {
            $errors[] = sprintf('The %s is a required field.', $field);
        }
    }
if (!empty($errors)) {
    echo implode('<br />', $errors);
    exit();
}

 isset($data['email']);
if (!filter_var($data, FILTER_VALIDATE_EMAIL)) {
    echo 'Invalid email format';
    exit();
}

//Database connection
$servername = $_ENV['MySQL_DB_HOST'];
$username = $_ENV['MySQL_DB_USER_NAME'];
$password = $_ENV['MySQL_DB_PASSWORD'];
$database = $_ENV['MySQL_DB_NAME'];
$dsn = sprintf("mysql:host=" . $servername . ";dbname=" . $database . ";");
$options = [
        PDO:: ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $username, $password);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

$statement = $pdo->prepare('SELECT * FROM teacher_table = :email');
$statement->execute(['email' => $data['email']]);

if (!empty($statement->fetch())) {
    echo 'User with such email exist. ';
    exit();
}
//   Insert new user
$statement = $pdo->prepare('INSERT INTO teacher_table(email, name) VALUES (:email, :name)');
$statement->execute([
        'email' => $data['email'],
        'name' => $data['name'],
]);
echo 'The user has been successfully save.';
?>










<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>




























