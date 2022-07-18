<?php
declare(strict_types=1);
require 'view/include/headercampus.php'
?>

<section>
    <p><a href="index.php?page=home">To home page</a></p>
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
    <?php foreach ($showAllCampus as $campus): ?>
        <tr>
            <th scope="row"><?= $campus->getId(); ?></th>
            <td><?= $campus->getName(); ?></td>
            <td><?= $campus->getLocation(); ?></td>
            <td>
                <a href="index.php?page=campusedit">
                    <button type="submit" name="edit" class="btn btn-warning" value="<?=$campus->getId();?>"><i class="bi bi-pencil-square text-light"></i></button>
                </a>
                <a href="index.php?page=campusdelete>
                <button type="submit" name="remove" class="btn btn-danger" value="<?=$campus->getId();?>"><i class="bi bi-trash text-light"></i></button>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<a href="index.php?page=campuscreate"><button type="submit" name="add" class="btn btn-success"><i class="bi bi-plus-square text-light"></i></button></a>

<?php require 'view/include/footer.php' ?>
