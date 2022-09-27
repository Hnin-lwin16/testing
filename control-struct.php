<?php
//if
echo "<h1>IF statement</h1>";
$a = 3;
$b = 5;
$c = 5;
if (($a <= $c || $a < 2) && ($b == $c || $b > $a)) {
 echo "This is true";
}
echo "<br>";
//if else
if ($a < 2) {
  echo "a is less than 2";
} elseif ($b == $c) {
  echo "b is equal c";
} else {
  echo "This is wrong!";
}
//Switch
echo "<h2>Switch statement</h2>";
$color = "blue";
switch ($color) {
  case 'orange':
    echo "Favourite color : ".$color;
    break;
  
  case 'blue':
    echo "Favourite color : ".$color;
    break;
   
    case 'red':
      echo "Favourite color : ".$color;
      break;

  default:
   echo "Favourite color : ".$color;
    break;
}
echo "<h2>Loop</h2>";
//For loop
for ($i = 0; $i <= 100; $i += 10) {
  if ($i == 40) {
    continue;
  }
  echo "This is $i <br>";
  if ($i == 80) {
    break;
  }
}
//While
$i = 1;
while ($i <= 5) {
  echo "This is while : $i <br>";
  $i++;
}
//Do while
$d = 1;
do {
  echo "This is do : $d <br>";
  $d++;
} while ($d <= 0);
//for each
$arrs = ["Hotpot", "Burger", "Juice"];
foreach ($arrs as $arr) {
  echo $arr." ";
}
?>