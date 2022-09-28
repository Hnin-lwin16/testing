<?php
define("S",realpath("."));
require S."/file.php";
$_SESSION["favcolor"] = "blue";
$_SESSION["favlanguage"] = "japan";
echo $_SESSION["favcolor"]."<br>";
echo $_SESSION["favlanguage"];
?>