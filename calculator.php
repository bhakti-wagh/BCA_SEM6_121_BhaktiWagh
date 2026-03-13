<!DOCTYPE html>
<html>
<body>

<form method="post">

Number 1:
<input type="number" name="num1"><br><br>

Number 2:
<input type="number" name="num2"><br><br>

<select name="op">
<option value="add">Add</option>
<option value="sub">Subtract</option>
<option value="mul">Multiply</option>
<option value="div">Divide</option>
</select>

<input type="submit">

</form>

<?php

if(isset($_POST['op']))
{
$n1=$_POST['num1'];
$n2=$_POST['num2'];
$op=$_POST['op'];

switch($op)
{
            case "add":
            echo $n1+$n2;
            break;

            case "sub":
            echo $n1-$n2;
            break;

            case "mul":
            echo $n1*$n2;
            break;

            case "div":
            echo $n1/$n2;
            break;
}

}

?>

</body>
</html>