<?php

$x=0;
$i=0;
$s=1;
   

  $x = intVal(readline("donner une valeur :"));
for ($i=1; $i <= $x; $i++) 
{ 
$s=$s*$i;
if($i==1)
echo "La factorielle de $x ($x!) est egale à:\n";
if($i<$x)
echo "$i * ";
if($i==$x)
  echo "$i = $s";
   
}
   
  ?>