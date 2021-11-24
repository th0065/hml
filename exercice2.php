<?php

$x=0;
do
{
   

  $x = intVal(readline("donner une valeur entre 10 et 20:"));
  if($x>20)
echo "Trop grand\n";
   if($x<10)
	echo "Trop petit\n";
if($x<=20&&$x>=10)
{
   echo "Le nombre choisi est: ".$x;
   break;
}
    
}
while($x>20||$x<10)
	
  ?>