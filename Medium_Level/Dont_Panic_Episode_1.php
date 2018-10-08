<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/
 $etage = [];
fscanf(STDIN, "%d %d %d %d %d %d %d %d",
    $nbFloors, // number of floors
    $width, // width of the area
    $nbRounds, // maximum number of rounds
    $exitFloor, // floor on which the exit is found
    $exitPos, // position of the exit on its floor
    $nbTotalClones, // number of generated clones
    $nbAdditionalElevators, // ignore (always zero)
    $nbElevators // number of elevators
);
// error_log(var_export($nbElevators, true));
// error_log(var_export($exitPos, true));

for ($i = 0; $i < $nbElevators; $i++)
{
    fscanf(STDIN, "%d %d",
        $elevatorFloor, // floor on which this elevator is found
        $elevatorPos // position of the elevator on its floor
        
    );
    $etage[$elevatorFloor] = $elevatorPos;
    
    
}
$etage[$exitFloor] = $exitPos;
$elevatorFloor = 0;
// game loop
while (TRUE){
    
    fscanf(STDIN, "%d %d %s",
        $cloneFloor, // floor of the leading clone
        $clonePos, // position of the leading clone on its floor
        $direction // direction of the leading clone: LEFT or RIGHT
    );
 
    error_log(var_export($etage, true));
    error_log(var_export($elevatorFloor, true));
    error_log(var_export($cloneFloor, true));
    error_log(var_export($exitFloor, true));

        switch($direction){
            case "RIGHT":
                if($etage[$cloneFloor] >= $clonePos){
                    echo("WAIT\n");
                    break;
                }elseif($etage[$cloneFloor] <= $clonePos){
                    echo("BLOCK\n");
                    break;
                }
            case "LEFT":
                if($etage[$cloneFloor] <= $clonePos ){
                    echo("WAIT\n");
                    break;
                }elseif($etage[$cloneFloor] >= $clonePos){
                    echo("BLOCK\n");
                    break;
                }
                
                default:
                    echo("WAIT\n");
                break;
        }
    }    // Write an action using echo(). DON'T FORGET THE TRAILING \n
    // To debug (equivalent to var_dump): error_log(var_export($var, true));

     // action: WAIT or BLOCK

?>