<?php
$myfile = fopen("newfile.txt","w");
$txt = "File created!";
$write = fwrite($myfile,$txt);
?>