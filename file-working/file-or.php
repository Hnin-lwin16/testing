<?php
$myfile = fopen("file-open.txt", "r");
$filesize = filesize("file-open.txt");
$read = fread($myfile,$filesize);
echo $read;
?>