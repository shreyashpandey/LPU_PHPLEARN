<?php
if(!empty($_POST["remember"])){
    setcookie("username",$_POST["username"],time()+3600);
    setcookie("password",$_POST["password"],time()+3600);
echo "cookies Set Successfull";
}
else{
    setcookie("username","");
    setcookie("password","");
    echo "cookies Not set";
}
?>
<p><a href="cookies_form.php">Go to login page </a></p>