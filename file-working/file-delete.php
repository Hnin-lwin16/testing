<?php
    define("D",realpath("."));
    $myfile = fopen("deletefile.txt","w");
    $txt = "File delete created!";
    $write = fwrite($myfile,$txt);
    if ($write) {
        echo "Create Sucess!<br>";
    }
    if (unlink(D."/deletefile.txt")) {
        echo "Delete file";
    } else {
        echo "Delete not sucess";
    }
?>