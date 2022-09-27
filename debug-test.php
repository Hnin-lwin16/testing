<?php
/*Show aTest function
@param $str*/
    function aTest($str)
    {
        bTest($str);
        //var_dump(debug_backtrace());
    }
/*Show bTest function
@param $str2*/
    function bTest($str2)
    {
        cTest($str2);
    }
/*Show cTest function
@param $str3*/
    function cTest($str3)
    {
        echo "Hi: $str3";
        var_dump(debug_backtrace());
    }
    aTest('friend');
    ?>
?>