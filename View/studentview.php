<?php
declare(strict_types=1);
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Group_ID</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($studentsName as $student): ?>
        <tr>
            <td><?php echo $student->getId(); ?></td>
            <td><?php echo $student->getName(); ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>

</table>



