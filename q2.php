<!doctype html>
<html>
<head>
<title>Q1</title>
</head>
<body>
<table>
<?php
$arr=array("January"=>31,"February"=>30,"March"=>31,"April"=>30,"May"=>31,"June"=>30,"July"=>31,"August"=>31,"September"=>30,"October"=>31,"November"=>30,"December"=>31);
foreach($arr as $keys=>$val)
{
    if($val=="31")
    {
        echo"<tr><td style='color:red'>".$keys."</td></tr>";
    }
    else
    echo"<tr><td style='color:green'>".$keys."</td></tr>";
}

?>

    
    

</table>
</body>
</html>
