<!DOCTYPE html>
<html>
<body>

<form method="post">
Enter Name:
<input type="text" name="username">
<input type="submit" value="Submit">
</form>

<?php
if(isset($_POST['username']))
{
    $name = $_POST['username'];
    echo "Welcome " . $name;
}
?>

</body>
</html>