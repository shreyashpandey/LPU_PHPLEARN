<?php
$nameErr=$addErr=$phnErr=$pwdErr=$emailErr='';
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $name=$_POST["fname"];
    $add=$_POST["lname"];
    $phn=$_POST["phn"];

    if(!preg_match("/^[A-Z][a-zA-Z]+$/",$name))
    {
        $nameErr="only letters and white space allowed";
    }
    if(!preg_match("/^[a-zA-Z0-9 .,-]+$/",$add))
    {
        $addErr="Address must be only letters,numbers or one of the following -, .<br>";
    }
    if(!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}]$",$phn))
        {
            $phnErr="please enter correct phone number";
        }
   if(!preg_match("/^[a-zA-Z]w+(.w+)*@w+(.[0-9a-zA-Z]+)*.[a-zA-Z]{2,4}$/",$_POST["email"]))
   {
       $emailErr="email not in format.<br>";
   }
}
?>
//simple calculator using php 