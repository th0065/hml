<?php
    $som_du = 0;
    do {
        $i = (int) readline ("veuillez saisir la valeur de la somme due :  ");
        $som_du = $som_du + $i;
    } while ($i != 0);
echo "vous devez : ".$som_du."euros". "\n";
$mont_ver=(int) readline ("veuillez saisir la somme versée");
$rest = $mont_ver - $som_du;
$nb10E =0;
do {
    $nb10E++;
    $rest= $rest - 10;
} while ($rest >=10);
$nb5E = 0;
if ($rest>=5) {
    $nb5E++;
    $rest = $rest -5;
}
echo "monnaie a rendre au client : ". "\n";
echo "en billet (s) de 10 euros : ".$nb10E. "\n" ;
echo "en billet (s) de 5 euros : " .$nb5E. "\n" ;
echo "en piece (s) de 1 euro :";

?>