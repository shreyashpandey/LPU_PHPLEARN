<?php
include_once("f.php");
include_once("f2.php");
fun1();
fun1();
echo"hello";
$a=1;
function fun2()
{
    $GLOBALS['a']=$GLOBALS['a']+1;
}
fun2();
echo $a;
echo"Returns the filename of the currently executing script::";
 