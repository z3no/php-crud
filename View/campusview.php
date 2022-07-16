<?php
declare(strict_types=1);
require 'View/includes/headerCampus.php'
?>

<section>
    <a href="index.php?page=home"><button type="button" class="btn btn-success">Home</button></a>
</section>

<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Location ID</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($showAllCampus as $campus): ?>
        <tr>
            <th scope="row"><?php echo $campus->getId(); ?></th>
            <td><?php echo $campus->getName(); ?></td>
            <td><?php echo $campus->getLocation(); ?></td>
            <td>
                <a href="index.php?page=campusedit">
                    <button type="submit" name="edit" class="btn btn-warning" value="edit">
                        <i class="bi bi-pencil-square text-light"></i></button>
                </a>
                <button type="submit" name="remove" class="btn btn-danger"><i class="bi bi-trash text-light"></i>
                </button>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<button type="submit" name="add" class="btn btn-success"><i class="bi bi-plus-square text-light"></i></button>

<?php require 'View/includes/footer.php' ?>
