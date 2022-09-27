<?php
$str1 = "Learn about PHP";
echo "String length : ". strlen($str1) ."<br>";
echo "World count : ".str_word_count($str1)."<br>";
$replace = str_replace("PHP","Web Developer",$str1,$count);
echo "Replace : $replace $count time <br>";
echo "Position : ". strpos($str1,"about")."<br>";
$str2 = addslashes('What does "PHP" mean?');
echo "$str2 <br>";
$str3 = htmlspecialchars("<h1>Heading</h1>");
echo $str3 ."<br>";
//Constant
define("GENDER","Female");
print GENDER."<br>";
define("INFO",["Name","Location","Age"]);
print INFO[1];
//Math
echo "<h1>Math</h1>";
echo is_nan(acos(200))."<br>";
echo "Power :".pow(2,4) . "<br>";
echo "Power :".pow(-2,-4) . "<br>";
echo "Power :".pow(-2,4) . "<br>";
echo "Power :".pow(2,-3.2) . "<br>";
echo("Square : ".sqrt(0) . "<br>");
echo("Square : ".sqrt(1) . "<br>");
echo("Square : ".sqrt(9) . "<br>");
echo("Square : ".sqrt(0.64) . "<br>");
echo("Square : ".sqrt(-9)."<br>");
echo("Exp : ".exp(0) . "<br>");
echo("Exp : ".exp(1) . "<br>");
echo("Exp : ".exp(10) . "<br>");
echo("Log : ".log(2) . "<br>");
echo("Log : ".log(1) . "<br>");
echo("Log10 : ".log10(2) . "<br>");
echo("Log10 : ".log10(1) . "<br>");
echo("Max : ".max(22,14,68,18,15) . "<br>");
echo("Max array : ".max([23,34,12,1,0,45]) . "<br>");
echo("Min : ".min(22,14,68,18,15) . "<br>");
echo("Min array : ".min([23,34,12,1,0,45]) . "<br>");
echo("Positive value:".abs(-123)."<br>");
echo("asin :".asin(0) . "<br>");
echo("asin :".asin(-1) . "<br>");
echo("Celi : ".ceil(0.60) . "<br>");
echo("Celi : ".ceil(-5.9) . "<br>");
echo("Floor : ".floor(0.60) . "<br>");
echo("Floor : ".floor(-5.9) . "<br>");
echo("PI : ".pi()."<br>");
echo("sin : ".sin(3) . "<br>");
//Array
echo "<h2>Array</h2>";

$index_arrs =["Apple","Orange",2000];
var_dump($index_arrs);
echo "<br>Sort : ";
sort($index_arrs);
foreach($index_arrs as $index_arr){
    echo $index_arr.",";
}
rsort($index_arrs);
echo "<br>descending order : ";
foreach($index_arrs as $index_arr){
    echo $index_arr.",";
}
echo "<br>";
$asso_arrs = ["name"=>"Hnin","loaction"=>"Pyay","age"=>20];
var_dump($asso_arrs);
asort($asso_arrs);
echo "<br>ascending order VALUE: ";
foreach($asso_arrs as $asso_arr){
    echo $asso_arr.",";
}
ksort($asso_arrs);
echo "<br>ascending order Key: ";
foreach($asso_arrs as $key=>$asso_arr){
    echo $key.",";
}
arsort($asso_arrs);
echo "<br>Descending order VALUE: ";
foreach($asso_arrs as $asso_arr){
    echo $asso_arr.",";
}
krsort($asso_arrs);
echo "<br>Descending order Key: ";
foreach($asso_arrs as $key=>$asso_arr){
    echo $key.",";
}
echo "<br>";
$keys = ["apple","orange"];
$values = [1500,2000];
$arr = array_combine($keys,$values);
var_dump($arr);
echo "<br>";
var_dump(array_values($arr));
echo "<br>";
var_dump(array_keys($arr));
echo "<br>";
echo "<b>List array</b><br>";
[$ap,,$val] = $index_arr;
echo "$ap <br>";
echo "$val <br>";
echo "<b>Multi array</b><br>";
$multi1 = [["array1","Pineapple"],["array2","apple"]];
echo $multi1[0][1];
echo "<br>";
$multi2 = [["index1",1],["name"=>"lwin","local"=>"yangon","age"=>23]];
echo $multi2[1]["local"];
?>