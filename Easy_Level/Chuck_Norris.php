<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

$MESSAGE = stream_get_line(STDIN, 100 + 1, "\n");

// Write an action using echo(). DON'T FORGET THE TRAILING \n
// To debug (equivalent to var_dump): error_log(var_export($var, true));
$array = str_split($MESSAGE);
$result = NULL;
$unaire = NULL;

$array = str_split($MESSAGE);
$result = NULL;
$prec = "";
$unaire = NULL;

foreach ($array as $key) {
    $conv = ord( $key ); // Convertion chaine de charactère en Decimal
    $bin = decbin($conv);// Convertion du decimal en Binaire
    $bin = sprintf("%'.07d", $bin); 
    $array2 = str_split($bin,1);
    foreach ($array2 as $keys ) {
        if ($keys === $prec ) {
            $unaire.="0";
        }else{
            if ($keys==="0") {
                $unaire.=" 00 0";
            }else {
                $unaire.=" 0 0";
            }
        }
        $prec = $keys;
}
}
echo trim("$unaire\n");
?>