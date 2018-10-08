<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d",
    $r1
);
fscanf(STDIN, "%d",
    $r2
);

while ($r1 != $r2) {
    if ($r1 < $r2) {
            $r1 = RiverCalcul($r1);
    }else {
            $r2 = RiverCalcul($r2);

    }   
}

echo "$r1\n";

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