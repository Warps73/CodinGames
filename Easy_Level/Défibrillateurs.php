<?php

function get_distance_m($lat1, $lng1, $lat2, $lng2) {
    $earth_radius = 6378137;   // Terre = sphère de 6378km de rayon
    $rlo1 = deg2rad($lng1);
    $rla1 = deg2rad($lat1);
    $rlo2 = deg2rad($lng2);
    $rla2 = deg2rad($lat2);
    $dlo = ($rlo2 - $rlo1) / 2;
    $dla = ($rla2 - $rla1) / 2;
    $a = (sin($dla) * sin($dla)) + cos($rla1) * cos($rla2) * (sin($dlo) * sin($dlo
  ));
    $d = 2 * atan2(sqrt($a), sqrt(1 - $a));
    return ($earth_radius * $d);
  }
  
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%s",
    $LON
);
$LON =str_replace(",",".",$LON);

fscanf(STDIN, "%s",
    $LAT
);
$LAT =str_replace(",",".",$LAT);

fscanf(STDIN, "%d",
    $N
);

$result = 100000000;
$adress = NULL;
for ($i = 0; $i < $N; $i++)
{
    $DEFIB[] = stream_get_line(STDIN, 256 + 1, "\n");
    $tmp = explode(";",$DEFIB[$i]);
    $LAT2 = $tmp[5];
    $LAT2 =str_replace(",",".",$LAT2);
    $LON2 = $tmp[4];
    $LON2 =str_replace(",",".",$LON2);
    $distance = (round(get_distance_m($LAT, $LON,$LAT2 ,$LON2 ) / 1000, 3));
    if ($distance < $result) {
      $result = $distance;
      $adress = $tmp[1];
    }
}
echo $adress."\n";


/*************************** */
// var_dump($tmp);        // DEBUG
/*************************** */
// Write an action using echo(). DON'T FORGET THE TRAILING \n
// To debug (equivalent to var_dump): error_log(var_export($var, true));


?>