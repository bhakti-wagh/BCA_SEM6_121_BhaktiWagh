<?php

$num = 2;

$matrix = array(
array(1,2),
array(3,4)
);

for($i=0;$i<2;$i++)
{
for($j=0;$j<2;$j++)
{
echo $matrix[$i][$j] * $num." ";
}
echo "<br>";
}

?>