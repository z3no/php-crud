<?php require 'view/include/headercampusedit.php' ?>
<form action="index.php?page=campus" method="post">
    <label for="cname"> Campus name:</label><br>
    <input type="text" id="cname" name="newCampusName" value="campus"><br>
    <label for="lname">Location name:</label><br>
    <input type="text" id="lname" name="newLocationName" value="location"><br><br>
    <input type="submit" name="submit" value="Submit">
</form>
<?php require 'view/include/footer.php' ?>
