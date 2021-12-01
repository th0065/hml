<?php
function dernierElement() 
{
 $j=0;
 $arg=array();
 
 do
 {

$arg[$j]= (readline("Entrez de texte :")); 

if($arg[$j]=="")
{
   $arg[$j]="null";
}
 if($arg[$j]=="ok")
 {
   echo "Le dernier Element du tableau est ".$arg[$j-1];
   break;

 }
$j++;
 }
 while ($arg[$j]!="ok");

 
}

dernierElement(); 
?>