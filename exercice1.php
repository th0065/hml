<?php

$x=0;
do
{
   if($x>3||$x<1)

  $x = intVal(readline("donner une valeur entre 1 et 3:"));

   if($x<=3&&$x>=1)
   {
	echo "Le nombre saisi est: ".$x;
    break;
   }
}
while($x>3||$x<1)
	
  ?>