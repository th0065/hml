<?php
function plusPetit() {
 
 for($i=1;$i<=3;$i++)
 {
    $arg[$i]= intVal(readline("Entrez nombre $i :"));
    
    $min=$arg[1];
    if($min>$arg[$i])
     $min=$arg[$i];
 
 }
 echo "La plus petite valeur est ".$min;
}

plusPetit(); 
?>