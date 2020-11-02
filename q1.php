<!doctype html>
<html>
<head>
<title>
</title>
</head>
<body>
<?php
$inp=$_GET["i1"];
if($inp<=30)
echo"<p style='color:red'>".$inp."</p>";
else
if($inp>30&&$inp<=80)
echo"<p style='color:yellow'>".$inp."</p>";
else
if($inp>80&&$inp<=130)
echo"<p style='color:blue'>".$inp."</p>";
else if($inp>130)
echo"<p style='color:black'>".$inp."</p>";;
?>
<body>
</html>