<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d",
    $n // the number of temperatures to analyse
);
$inputs = fgets(STDIN);
$inputs = explode(" ",$inputs);
for ($i = 0; $i < $n; $i++)
{
    $t = intval($inputs[$i]);
    $explode[] = $t;// a temperature expressed as an integer ranging from -273 to 5526
}
        $n = count($explode);
if ($n>0 && $n<10000)
{
    foreach($explode as $new)
    {
            //pour chaque valeur de $explode on recupere sa valeur absolue
            $abs=abs($new);
            
            //et on cree un nouveau tableau $array qui contiendra la valeur "normale" associee a sa valeur absolue
            $array[$new]=$abs;  
    }
        
    //on cree notre tableau final
    $tab_final= array();
    
    foreach($array as $ecart)
    {
        //on voit si le tableau est vide
        $count=count($tab_final);
        
        //s'il est vide, on injecte la 1ere valeur qui passe
        if($count==0)
        {
            $tab_final[]= $ecart;
        }
        
        //si le dernier element du tab_final est superieur a l'ecart, on crash le tab final et on injecte la nouvelle valeur
        if($tab_final[0]>$ecart)
        {
            
            $tab_final[0]= $ecart;
        }

        
    }

//on recupere notre dernier ecart dans $ecartok
    $ecartok=$tab_final[0];

//si l'ecart positif est ds le tab
    if (array_key_exists($tab_final[0], $array)) 
    {
    
    }

//sinon on prend la valeur negative
    else
    {
        $ecartok *= -1;
    }

//et on affiche notre resultat
    echo ($ecartok."\n");
}

//si on a aucune temperature on affiche 0
elseif($n==0)
{

    echo ("0\n");
}

// Write an action using echo(). DON'T FORGET THE TRAILING \n
// To debug (equivalent to var_dump): error_log(var_export($var, true));


?>