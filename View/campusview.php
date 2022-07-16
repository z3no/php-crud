<?php
declare(strict_types=1);
?>

<section>
    <p><a href="index.php">To home page</a></p>
</section>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Location ID</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($showAllCampus as $campus): ?>
        <tr>
            <td><?php echo $campus->getId(); ?></td>
            <td><?php echo $campus->getName(); ?></td>
            <td><?php echo $campus->getLocation(); ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>

</table>
