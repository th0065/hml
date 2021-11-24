<?php

$x = array();
 $max=0;
 $k=0;
for ($i=1; $i <= 20; $i++) 
{ 
   $x[$i]= intVal(readline("Entrez nombre $i :"));
   if($x[$i]>$max)
   {
    $max=$x[$i];
    $k=$i;
   }

}
   echo "Le nombre numero $k est le plus grand qui est egal à: $max";
  ?>