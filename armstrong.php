<?php

$num = 153;
$sum = 0;
$temp = $num;

while($temp!=0)
{
$r = $temp % 10;
$sum = $sum + ($r*$r*$r);
$temp = $temp / 10;
}

if($sum==$num)
echo "Armstrong Number";
else
echo "Not Armstrong";

?>