<?php
do
{
$n= intVal(readline("Le nombre de chevaux partants :"));
$p= intVal(readline("Le nombre de chevaux joués :"));
if($n<2|| $p<1 || $n<$p)
echo "Données saisies non valides recommencez\n";
}
while($n<2 || $p<1 || $n<$p);
$sn=1;
$sn0=1;
$sp=1;

$x=0;
$y=0;	
for ($i=1; $i <=$n ; $i++) 
{
	if($i<=($n-$p))
	$sn0=$sn0*$i;
    if($i<=$p)
    $sp=$sp*$i;
    if($i<=$n)
	$sn=$sn*$i;
} 
	
 $x=$sn/$sn0;
 $y=$sn/($sp*$sn0);
echo "$p!=$sp...($n-$p)!=$sn0...$n!=$sn...\n";
echo "Dans l'ordre: une chance sur $x de gagner\n";
echo "Dans le desordre: une chance sur $y de gagner";



  ?>