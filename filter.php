<?php
print_r(filter_list());
echo "<br>";
$comment="<h1> Hey there! how are you doing today?</h1>";

//sanitize and print comment string
$s=filter_var($comment,FILTER_SANITIZE_STRING);
echo $s;
echo "<br>";
$email= "some@example.com*&";

//Remove all illegal character from email
$email=filter_var($email,FILTER_SANITIZE_EMAIL);
echo $email;
echo "<br>";

//validate email address
if(filter_var($email,FILTER_VALIDATE_EMAIL))
{
    echo "the <b>$email</b> is a valid email address";
    echo "<br>";
}
else
{
    echo "the <b>$email</b> is a not valid email address";
    echo "<br>";

}

$int =20;
if(filter_var($int,FILTER_VALIDATE_INT))
{
    echo "The <b>$int</b> is a valid integer";
    echo "<br>";
}
else
{
    echo "The <b>$int</b> is not a validate integer";
    echo "<br>";
}
$int ='1';
if(filter_var($int,FILTER_VALIDATE_BOOLEAN))
{
    echo "The <b>$int</b> is a valid integer";
    echo "<br>";
}
else
{
    echo "The <b>$int</b> is not a validate integer";
    echo "<br>";
}

$var1="yes";
$var2="off";

var_dump(filter_var($var1, FILTER_VALIDATE_BOOLEAN));
echo "<br>";
var_dump(filter_var($var2, FILTER_VALIDATE_BOOLEAN));
echo "<br>";

//IP
$ip = "127.0.0.1";

if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
    echo("$ip is a valid IP address");
    echo "<br>";
} else {
    echo("$ip is not a valid IP address");
    echo "<br>";
}
//IPV6 AND IPV4
$ip = "127.0.0.1";

if (!filter_var($ip, FILTER_VALIDATE_IP,FILTER_FLAG_IPV6)) {
    echo("$ip is a valid IPV6 address");
    echo "<br>";
} else {
    echo("$ip is not a valid IPV6 address");
    echo "<br>";
}

//url 
$url = "https://www.google.com";

$url = filter_var($url, FILTER_SANITIZE_URL);

if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
    echo("$url is a valid URL");
} else {
    echo("$url is not a valid URL");
}
$int=175;
if(filter_var($int,FILTER_VALIDATE_INT,array("options"=>)))
?>