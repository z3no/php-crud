<?php
declare(strict_types=1);
require 'View/includes/header.php';
?>

<div id="container">

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Teacher ID</th>
                <th>Campus ID</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($groupData as $data): ?>
            <tr>
                <td><?php echo $data->getId(); ?></td>
                <td><?php echo $data->getName(); ?></td>
                <td><?php echo $data->getTeacherID(); ?></td>
                <td><?php echo $data->getCampusID(); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>

    </table>

</div>



<?php
require 'View/includes/footer.php';
?>