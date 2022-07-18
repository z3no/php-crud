<?php require 'view/include/headercampuscreate.php' ?>
<form action="index.php?page=campus" method="post">
    <label for="cname"> Campus name:</label><br>
    <input type="text" id="cname" name="newCampusName" value=""><br>
    <label for="lname">Location name:</label><br>
    <input type="text" id="lname" name="newLocationName" value=""><br><br>
    <input type="submit" name="confirm_Add" value="Submit">
</form>
<?php require 'view/include/footer.php' ?>
