<?php
declare(strict_types=1);
require 'View/includes/header.php';
?>

<div id="container">

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Teacher</th>
                <th scope="col">Campus</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($groupData as $data): ?>
            <tr>
                <th scope="row"><?php echo $data->getId(); ?></th>
                <td><?php echo $data->getName(); ?></td>
                <td><?php echo $data->getTeacherName(); ?></td>
                <td><?php echo $data->getCampusName(); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>

    </table>

</div>



<?php
require 'View/includes/footer.php';
?>