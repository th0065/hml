<?php 
$note  = array();
$j="fin";
$max=0;
$min=0;
do
{

$i= readline("Entrez le nom de l'etudiant ou fin pour arreter la saisie:");
if(strcasecmp($i,$j)==0)
break;
$note[$i]= intval(readline("Entrez la note :"));
$max=$note[0];
$min=$note[0];
if($note[$i]>$max)
	$max=$note[$i];
if($note[$i]<$min)
	$min=$note[$i];
    
}

while( strcasecmp($i,$j)!=0);

echo "La note maximal est: $max\n";
echo "La note minimal est: $min\n";

ksort($note);
echo "Affichage par ordre alphabetique\n";
echo "Clé       Valeur\n";

foreach ($note as $key => $value) {
echo "$key      $value\n";
}
arsort($note);
echo "Affichage de la plus grande à la plus petite note\n ";
echo "Clé       Valeur\n";

foreach ($note as $key => $value) {
echo "$key      $value\n";
}

$moy=array_sum($note)/count($note);
echo "La moyenne de la classe est: $moy";

 ?>
