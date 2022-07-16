<?php
declare(strict_types=1);
require 'View/includes/header.php';
?>
    <section>
        <p><a href="index.php">To home page</a></p>
    </section>
<div id="container">

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Teacher</th>
                <th>Campus</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($groupData as $data): ?>
            <tr>
                <td><?php echo $data->getId(); ?></td>
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