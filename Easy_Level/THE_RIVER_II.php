<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d",
    $r1
);
    
$end = $r1 - 1;   
$start = 1;
$stop = 0;
$result = NULL;

while($start < $end && $stop === 0 ){
    $result1 = RiverCalcul($start);
    $result2 = RiverCalcul($end);
    $start++;
    $end--;
    if (($result1 === $r1) || ($result2 === $r1)){
        $stop = 1;
    }
}

if($stop === 1){
    echo "YES\n";
}else{
    echo "NO\n";
}
    



function RiverCalcul($nb){
    $array = str_split($nb);
    foreach ($array as $key) {
            $nb = $nb + $key;
            // echo $nb."\r\n";
    }
    return $nb;
}
// Write an action using echo(). DON'T FORGET THE TRAILING \n
// To debug (equivalent to var_dump): error_log(var_export($var, true));

?>