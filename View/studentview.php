<?php
declare(strict_types=1);

$page_title = "Group table";
require 'View/includes/header.php';
?>

<div id="container">

    <a href="index.php?page=home"><button type="button" class="btn btn-success">Home</button></a>

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
        <?php foreach($studentsName as $student): ?>
            <tr>
                <td><?php echo $student->getId(); ?></td>
                <td><?php echo $student->getName(); ?></td>
                <td><?php echo $student->getEmail(); ?></td>
                <td><?php echo $student->getGroupId(); ?></td>
                <td>
                    <button type="submit" name="edit" class="btn btn-warning" value="edit">
                        <i class="bi bi-pencil-square text-light">Edit</i></button>
                    <button type="submit" name="remove" class="btn btn-danger">Delete<i class="bi bi-trash text-light"></i>

                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>

    </table>

</div>



<?php
require 'View/includes/footer.php';
?>
