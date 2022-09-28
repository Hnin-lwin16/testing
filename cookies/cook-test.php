<?php

define("DD",realpath("."));
require DD."/cookies.php";

if (!isset($_COOKIE[$cookie_name])) {
    echo "Cookie name : '" . $cookie_name . "' is not set!";
  } else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
  }
?>