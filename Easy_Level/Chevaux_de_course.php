<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d",
    $N
);

$goodNumber = 12000000;
$k = 0;
$l = 1;
for ($i = 0; $i < $N; $i++)
{
    fscanf(STDIN, "%d",
        $Pi
    );
    $arr[] = $Pi;
   
    
    
}
rsort($arr);

for ($i = 0; $i < $N -1 ; $i++)
{
if (count($arr)>=2) {
    $tmp = $arr[$k]-$arr[$l];
    if ( $tmp < $goodNumber) {
        $goodNumber = $arr[$k]-$arr[$l];
        
    }
    } 
    $k++;
    $l++;   
}
echo $goodNumber."\n";
/**********************/
// var_dump($arr); //DEBUG
/**********************/



?>