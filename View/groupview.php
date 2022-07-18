<?php
declare(strict_types=1);

$page_title = "Our groups";
require 'View/includes/header.php';
?>

    <div id="container">

        <a href="index.php?page=home"><button type="button" class="btn btn-success">Home</button></a>
        <a href="index.php?page=student"><button type="button" class="btn btn-success">Students</button></a>
        <a href="index.php?page=teacher"><button type="button" class="btn btn-success">Teachers</button></a>

        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Teacher</th>
                <th scope="col">Campus</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($groupData as $data): ?>
                <tr>
                    <th scope="row"><?php echo $data->getId(); ?></th>
                    <td><?php echo $data->getName(); ?></td>
                    <td><?php echo $data->getTeacherName(); ?></td>
                    <td><?php echo $data->getCampusName(); ?></td>
                    <td>
                        <a href="index.php?page=edit_group"><button type="submit" class="btn btn-warning"><i class="bi bi-pencil-square text-light"></i></button></a>
                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash text-light"></i></button>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>

        </table>

    </div>



<?php
require 'View/includes/footer.php';
?>