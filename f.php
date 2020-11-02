<!doctype html>
<html>
<head><title>gg</title>
</head>
<body>
Welcome
<?php
define("temp","OP");
$a="Helloo";
$t=45;
$r=34;
$q=$t+$r;
$a1=true;
$c=array("c","a");
echo var_dump($a);
echo var_dump($a1);
echo var_dump($c);
echo "$q \n" . PHP_EOL;
echo "Welcomme to <br/>".temp;
echo $t ;
echo $r ;
class tn
{
    public $str="Helo";
}
$abc= new tn;
echo var_dump($abc);
echo $abc->str;
$t1="A B C D";
echo var_dump($t1);
echo strlen($t1);
echo str_replace("D","A",$t1);
echo strrev($t1);
echo str_word_count($t1);
$x="25";
$y="35";
$z=25;
echo var_dump($x==$z);
echo var_dump($x===$z);
echo"<br>";
$a2=49;
if($a2%3==0||$a2%5==0)
echo "Multiple";
else
echo"Not a one";
/*function read_stdin()
    {
        $fr=fopen("php://stdin","r");   // open our file pointer to read from stdin
        $input = fgets($fr,128);        // read a maximum of 128 characters
        $input = rtrim($input);         // trim any trailing spaces.
        fclose ($fr);                   // close the file handle
        return $input;                  // return the text entered
    }

    printf("Enter 1st number:");
    $num1 = read_stdin();

    printf("Enter 2nd number:");
    $num2 = read_stdin();

    echo "Equation: ".$num1." + ".$num2." = ".($num1 + $num2)."\n";*/
    $t2="ABC";
    $t3="DEF";
    $t2.=$t3;
    echo $t2;
    $x=array("a"=>"R","b"=>"Y","c"=>"B");
    $y=array("d"=>"A","e"=>"Y","f"=>"B","g"=>"H","h"=>"J");
    $z1=array(1=>2);
    $z=$x+$y;
    var_dump($z);
    echo var_dump($x<>$y);
    echo var_dump($x<>$z1);
    $ma=67;
    echo($ma<40)?"Fail":($ma>50)?"Above 50":"Less than it";
    for($i=1;$i<=10;$i++)
    echo($i);
    $j=1;
    while($j<=10)
    {
        echo($j);
        $j++;
    }
    $k=1;
    do
    {
       
        echo($k);
        $k++;
        
    }
    while($k<=10);
    $i=5;
    $p=1;
    while($i!=0)
    {
        $p*=$i;
        $i--;
    }
    echo($p);
    $q=array("Aq","Bq","Cq",1);
    print_r($q);
    var_dump($q);
    for($i=0;$i<count($q);$i++)
    {
        echo "<br>";
        echo $q[$i];
    }
    $q1=array('r6'=>'1122','r7'=>'1134');
    print_r($q1);
    $key=array_keys($q1);
    print_r($key);
    for($i=0;$i<count($q1);$i++)
    {
        echo $key[$i]." ".$q1[$key[$i]]."<br>";
    }
    $r1="";
    foreach($q1 as $keys=>$val)
    {
        $r1+=$val;
    echo $val." ".$keys."<br>";
    }
    echo "<br>".$r1;
    $q3=array(5,4,3,1,2,"A","BC","CD");
    foreach($q3 as $i1)
    echo $i1."<br>";
    $q4=array(array('k1',12),array('k2',13));
    for($i=0;$i<2;$i++)
    {
        for($j=0;$j<2;$j++)
        {
            echo"<br>".$q4[$i][$j]."<br>";
        }
    }
    sort($q3);
    asort($q1);
    foreach($q3 as $i1)
    echo $i1."<br>";
    $q4=array_merge($q,$q3);
    print_r($q4);
    $str="a b c f g";
    $ar=explode(" ",$str);
    $st=implode('/',$ar);
    echo "<br>".$st;
    array_flip($q1);//swap the keys with values
    foreach($q1 as $keys=>$value)
    echo"<br>".$keys." ".$value." ";
    function temp()
    {
        echo"Welcome to PHP functions";
    }
    temp();
   // declare(strict_types=1);
    function temp1($a,$b)
    {
        echo"Welcome to PHP functions";
        return $a+$b;
    }
    temp1(2,"2");
    function addNumbers(float $a,float $b):int
    {
        return ($a+$b);
    }
    //declare(strict_type=1)
    echo addNumbers(1.2,1.3);
    function abc($x)
    {
        $x=$x+10;
        return ($x);
    }
    $as=20;
    echo abc($as)."<br>";
    echo($as);
    function abc1(&$x)
    {
        $x=$x+10;
        return ($x);
    }
    $as=20;
    echo abc1($as)."<br>";
    echo($as);
    for($i=0;$i<5;$i++)
    {
        for($j=0;$j<$i;$j++)
        {
            echo"<span>■</span>";
            //echo"<div style="color:black;width:50px;height:50px;"></div>"
        }
        echo"<br>";
    }
    echo"<br>";
    for($i=0;$i<8;$i++)
    {
        for($j=0;$j<8;$j++)
        {
            if(($i+$j)%2!=0)
            {
                echo"";
            }
            else if($i+$j%2==0)
            echo"■";

        }
        echo"<br>";
    }
    function fun1()
    {
        echo"kkkkk";
    }
    $hh=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
    asort($hh);
    foreach($hh as $keys=>$val)
    {
        echo"hgvs".$keys." ".$val;
    }
    krsort($hh);
    foreach($hh as $keys=>$val)
    {
        echo"<br>".$keys." ".$val;
    }
    $kk=array(78,62,60,68,72,75,67,81,90,66,87,88);
    $max=0;
    sort($kk);
    //$ii=0;
    for($j=0;$j<5;$j++)
    {
        echo"<br>".$kk[$j];
    }
    rsort($kk);
    for($j=0;$j<5;$j++)
    {
        echo"<br>".$kk[$j];
    }
?>
</body>
</html>