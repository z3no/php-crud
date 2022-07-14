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
    </tr>
    </thead>

    <tbody>
    <tr>
        <?php foreach ($studentsName as $student){ ?>
        <td> <?php echo $student['id']; ?></td>
        <td> <?php echo $student['name']; ?></td>
        <td> <?php echo $student['email']; ?></td>
        <?php } ?>
    </tr>
    </tbody>
</table>
