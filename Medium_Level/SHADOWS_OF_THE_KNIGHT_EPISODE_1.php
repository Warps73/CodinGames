<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/
$verif ="ok";
fscanf(STDIN, "%d %d",
    $W, // width of the building.
    $H // height of the building.
);

fscanf(STDIN, "%d",
    $N // maximum number of turns before game over.
);
fscanf(STDIN, "%d %d",
    $X0,
    $Y0
);
$minY = 0;
$maxY = $H;
$minX = 0;
$maxX = $W;

// game loop
while (TRUE)
{
    fscanf(STDIN, "%s",
        $bombDir); // the direction of the bombs from batman's current location (U, UR, R, DR, D, DL, L or UL)
        switch ($bombDir) {
            case 'U':
                $maxY = $Y0;
                $Y0 = Moove($minY,$maxY);
                break;
            case 'UR':
                $maxY = $Y0;
                $Y0 = Moove($minY,$maxY);
                $minX = $X0;
                $X0 = Moove($minX,$maxX);
                break;
            case 'R':
                $minX = $X0;
                $X0 = Moove($minX,$maxX);
                break;
            case 'DR':
                $minY = $Y0;
                $Y0 = Moove($minY,$maxY);
                $minX = $X0;
                $X0 = Moove($minX,$maxX);
                break;
            case 'D':
                $minY = $Y0;
                $Y0 = Moove($minY,$maxY);
                break;
            case 'DL':
                $minY = $Y0;
                $Y0 = Moove($minY,$maxY);
                $maxX = $X0;
                $X0 = Moove($minX,$maxX);                
                break;
            case 'L':
                $maxX = $X0;
                $X0 = Moove($minX,$maxX);
                break;
            case 'UL':
                $maxY = $Y0;
                $Y0 = Moove($minY,$maxY);
                $maxX = $X0;
                $X0 = Moove($minX,$maxX);
                break;
        }
    
    echo "$X0 $Y0\n";
 
    // Write an action using echo(). DON'T FORGET THE TRAILING \n
    // To debug (equivalent to var_dump): error_log(var_export($var, true));

    // the location of the next window Batman should jump to.

}
/**
 * Calcule dichotomique.
 *
 * @param [Int] $PosMin
 * @param [Int] $PosMax
 * @return int
 */
function Moove($PosMin,$PosMax){
    $NewPos = floor($PosMin + (($PosMax-$PosMin)/2));
    return $NewPos; 
}

?>