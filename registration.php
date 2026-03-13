<form method="post">

Name:
<input type="text" name="name"><br>

Email:
<input type="email" name="email"><br>

<input type="submit">

</form>

<?php

if(isset($_POST['name']))
{
echo "Name: ".$_POST['name']."<br>";
echo "Email: ".$_POST['email'];
}

?>