<?php require'View/includes/headerCampus.php'?>

<form action="index.php?page=campus">
    <label for="cname"> Campus name:</label><br>
    <input type="text" id="cname" name="cname" value="John"><br>
    <label for="lname">Location name:</label><br>
    <input type="text" id="lname" name="lname" value="Doe"><br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php require 'View/includes/footer.php' ?>
