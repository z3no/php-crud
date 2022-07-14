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
            <?php foreach($groupID as $id): ?>
            <tr>
                <td><?php echo $id;?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>

    </table>

</div>



<?php
require 'View/includes/footer.php';
?>