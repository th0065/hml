<?php

$x = array();
$j=1;
$k=0;
$i=1;
 $max=0;
do
{ 
   $x[$j]= intVal(readline("Entrez nombre $j :"));
   $i=$x[$j];
   if($x[$j]>$max)
   {
      $max=$x[$j];
      $k=$j;
   }
    
    $j++;
   if($i==0)
   {
     echo "Le nombre numero $k est le plus grand qui est egal à: $max";
      break;
   }
  
   
}
while($i!=0)

   
  ?>