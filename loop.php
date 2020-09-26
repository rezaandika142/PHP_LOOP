<?php

echo "=====No 1=====\n";
function whileNoSatu(){
    $x=1;

    while($x<=10){
    if($x>3 && $x<8){
    $x++;
    continue;
    }
    echo $x.PHP_EOL;
    $x++;
    }
}

echo "=====No 1=====\n";
function forNoSatu(){
    for($x=1;$x<=10;$x++){
        if($x>3 && $x<8){
            continue;
        }
        echo $x.PHP_EOL;
    }
}

echo "=====No 2=====\n";
function forNoDua(){
    for ($x=5;$x>=1;$x--)
    {
        if($x==5 || $x==3)
        {
            echo " $x " ;
            continue;
        }
        elseif($x<3)
        {
            echo " * " ;
        continue;
        }
        else{

        echo $x;
        }
    }
}

echo "=====No 3=====\n";
function forNoTiga(){
    for($x=1;$x<=4;$x++)
    {
        if($x % 2 == 0){
            echo $x."b"; 
        }else{
            echo $x."a";
        }
    }
}

echo "=====No 4=====\n";
function forNoEmpat(){
    for($i=1;$i<8;$i++)
    {
       if($i>3 && $i<7)
       {
           echo " A ";

       }else{
           echo $i ."  ";
       }
    }
}

echo "=====No 5=====\n";
function forNoLima(){
    for($x=4;$x>=0;$x--)
    {
        if($x<3){
            if($x==1){
                echo $x;
            }else{
                echo "A";
            }
        }else{
            echo $x;
        }
    }
}

echo "=====No 6=====\n";
function forNoEnam(){
    for($x=0;$x<=4;$x++)
    {
        if($x>1){
            echo $x;
        }else{
            echo "A";
        }
    }
}

?>