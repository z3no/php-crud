<?php
declare(strict_types=1);

$page_title = "Edit group";
require 'View/includes/header.php';
?>

    <div id="container">

        <a href="index.php?page=groups"><button type="button" class="btn btn-success">View</button></a>

        <form action="index.php?page=groups" method="post">
            <label for="groupname"> Group name:</label><br>
            <input type="text" id="groupname" name="groupname" value="Change the group name"><br>
            <label for="teacher">Choose a teacher:</label><br>
            <select id="teacher" name="teacher">
                <?php
                foreach ($groupData as $data){
                    echo "<option value='". $data->getTeacherID() . "'>" . $data->getTeacherName() . "</option>";
                }
                ?>
            </select><br>
            <label for="campus">Choose a campus:</label><br>
            <select id="campus" name="campus">
                <?php
                foreach ($groupData as $data){
                    echo "<option value='". $data->getCampusID() . "'>" . $data->getCampusName() . "</option>";
                }
                ?>
            </select><br><br>

            <input type="submit" name="submit" value="Submit">
        </form>

    </div>



<?php
require 'View/includes/footer.php';
?>