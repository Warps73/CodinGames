<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d",
    $L
);
fscanf(STDIN, "%d",
    $H
);
$T = stream_get_line(STDIN, 256 + 1, "\n");

$alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ?";

$ROW =[];
for ($i = 0; $i < $H; $i++)
{
    $ROW[] = stream_get_line(STDIN, 1024 + 1, "\n");
    
    
}
for($i=0;$i < $H ; $i++){
    $mot = "";
    foreach(str_split($T) as $value){
        $index = strpos( $alphabet, strtoupper($value));
        if($index===false){
            
            $index = strpos($alphabet, strtoupper("?"));
        }
        $mot .= substr($ROW[$i], ($index) * $L, $L);
    }
    echo $mot."\n";
}   


// error_log(var_export($ROW, true));
// error_log(var_export($alphabet, true));
// error_log(var_export($T, true));
// Write an action using echo(). DON'T FORGET THE TRAILING \n
// To debug (equivalent to var_dump): error_log(var_export($var, true));

?>