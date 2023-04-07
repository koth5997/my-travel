<?php
$n = intval(readline("Enter a number between 1 and 100: "));


if ($n < 1 || $n > 100) 
{
  echo "Invalid input. Please enter a number between 1 and 100.\n";
  exit();
}

$f1 = 1;
$f2 = 1;

echo "i\tfi\tfi+1/fi\n";
echo "1\t1\t1\n";
echo "2\t1\t2\n";

for ($i = 3; $i <= $n; $i++)
 {
  $f3 = $f1 + $f2;
  $ratio = $f3 / $f2;
  echo "$i\t$f3\t$ratio\n";
  $f1 = $f2;
  $f2 = $f3;
}
?>