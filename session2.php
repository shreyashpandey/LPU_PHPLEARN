<?php
session_start();
?>
<html>
<body>
<?php
//session_destroy();
$_SESSION["firstname"]="LPU";
$_SESSION["lastname"]="JALANDHAR";
print_r($_SESSION);
/*if(isset($_SESSION["lastname"]))
{
    unset($_SESSION["lastname"]);
}*/
?>
<a href="session3.php">Visit Next</a>
</body>
</html>