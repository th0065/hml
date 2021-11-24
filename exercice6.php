<?php

$x=0;
$i=0;
$s=0;
   

  $x = intVal(readline("donner une valeur :"));
for ($i=0; $i <= $x; $i++) { 
$s=$s+$i;
if($i<$x)
echo "$i + ";
if($i==$x)
  echo "$i = $s";
   
}
   
  ?>