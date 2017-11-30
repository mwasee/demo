<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $p=100;
        $q=22;
        echo $p%$q;
        
        
        $a=15;
        $b=2;
        echo $a**$b;
        
        
        $x=100;
        $x +=20;
        echo $x;
        
        
        $y=50;
        $y -=30;
        echo $y;
        
        
        $p=25;
        $p %=4;
        echo $p;
        
        
       $x = 100;  
       $y = 100;
        var_dump($x == $y);
        
        
       $a=500;
       $b=500;
       var_dump($a === $b);
       
       
       $p=72;
       $q=70;
       var_dump($p <> $q);
       
       
       $a=100;
       $b="100";
       var_dump($a !== $b);
       
       
       $e=50;
       $f=25;
       var_dump($e > $f);
       
       
       $a=10;
       $b=50;
       var_dump($a < $b);
       
       
       $m=60;
       $n=25;
       var_dump($m >= $n);
       
       
       $x=1;
       $y=10;
       var_dump($x <= $y);
       
       
       $a=50;
       
       echo "value of a::".++$a;
       
       $b=100;
       
       echo "<br>value of b::".$b++;
       echo "<br>now of b::".$b++;
       echo "<br>then of b::".$b++;
     
       $x=80;
       
       echo "<br>value of x::".--$x;
       
       $y=250;
       
       echo "<br>value of y::".$y--;
       echo "<br>now of y::".$y--;
       echo "<br>then of y::".$y--;
       
       
       $a="waseem";
       $b="saleem";
       
       if ($a == "waseem" and $b == "saleem"){
           echo "<br>welcome home";
       }
       
       
       $x = 100;  
       $y = 50;

if ($x == 100 or $y == 80) {
    echo "<br>Hello waseem!";
}
    $a = 100;  

if ($a !== 90) {
    echo "<br>hiii frndzz!";
}
     
     $txt1 = "mohd";
$txt2 = "waseem";
echo  $txt1 . $txt2;  
       
       
       $txt1 = "mohd";
       $txt2 = "saleem";
       echo $txt1 .= $txt2;
?>  
       
        
        
        
        
    </body>
</html>
