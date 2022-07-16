<?php
declare(strict_types=1);
?>
<section>
    <p><a href="index.php">To home page</a></p>
</section>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($test as $student): ?>
        <tr>
            <td><?php echo $student->getId(); ?></td>
            <td><?php echo $student->getName(); ?></td>
            <td><?php echo $student->getEmail(); ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>

</table>