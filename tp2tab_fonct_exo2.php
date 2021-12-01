<?php
function plusGrand() {

$x = array();
$max=0;
$i=1;
do
{ 
   $x[$i]= intVal(readline("Entrez nombre $i :"));

   if($x[$i]>$max)
   {
    $max=$x[$i];
    $k=$i;
   }

   if($x[$i]=="")
   {
      echo "null";
      break;
   }
$i++;
}
while ($x[$i]!=0);
   echo "Le nombre numero $k est le plus grand qui est egal à: $max";
}
plusGrand();
  ?>