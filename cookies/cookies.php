<?php
$cookie_name = "user";
$cookie_value = "John Doe";
$set = setcookie(
    $cookie_name, 
    $cookie_value, 
    time() + (86400 * 30), "/"
);
if ($set) {
    echo "set sucess!<br>";
}
?>