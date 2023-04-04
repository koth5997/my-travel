<?php

$n = 30;
$numbers = array();

for ($i= 0; $i< $n; $i++)
{
    numbers[]= rand(10, 100);
}

echo"생성된 랜덤숫자:";
foreach($number as $number)
{
    echo $number."";
}
sort($numbers);
echo"<br>올림차순:";
foreach($numbers as $number)
{
    echo$number."";
}
?>