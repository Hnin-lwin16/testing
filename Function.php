<?php
declare(strict_types = 1);
//Scope variable
$test_glo = "global";
//Show global
function testFun()
{
  global $test_glo;
  echo "global test : $test_glo<br>";
}
testFun();
//Show static
static $stat = "People";
function staticFun(){
  global $stat;
  echo "Static test : $stat<br>";
}
staticFun();
//Show Define Function
function userDefineFun()
{
  echo "This is User define Function <br>";
}
userDefineFun();
/*Show Parm Function
@param $name
@param $age
*/
function paramFun($name, $age)
{
  echo "My name is $name and $age old.<br>";
}
paramFun("Hnin",20);
/*Show Return Function
@param $color
@return "This is $color <br>"
*/
function returnFun($color)
{
  return "This is $color <br>";
}
echo returnFun("blue");
/*Show Default Function
@param $name
@param $color
@return "Color of $name is $color.<br>"
*/
function defaultFun($name, $color = "green")
{
  return "Color of $name is $color.<br>";
}
echo defaultFun("apple");

/*Show Passion(&) Function
@param &$value*/
function passinFun(&$pass)
{
  $pass .= "world <br>";
}
$greet = "Hello";
passinFun($greet);
echo $greet;
//Dynamic Function
function dynFun()
{
  echo "Hello<br>";
}
$dynamic_fun = "dynFun";
$dynamic_fun();
/*Recursive Function
@param $num*/
echo "Recursive Function : <br>";
function recurFun($num)
{
  if ($num <= 100) {
    echo "$num <br>";
    return recurFun($num + 10);
  }
}
recurFun(1);
/*Strict Delare Funtion
@param string $name*/
function strictDeclare(string $name):String
{
  echo "Strict declare Only Name : $name<br>";
}
strictDeclare("Lwin");
 
?>