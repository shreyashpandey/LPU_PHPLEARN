<?php
function customError($er_no,$err_msg)
{
    echo"<b>Error:</b>[$er_no]$err_msg"."<br>";
    die();
}
set_error_handler("customError");
echo $test;
?> 