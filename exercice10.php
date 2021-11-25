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
$nb5E=0;
do {
    if($rest >=10)
    {
    $rest= $rest - 10;
    $nb10E++;
    }
   
     if($rest <10 && $rest>=5)
     {
     $rest= $rest - 5;
    $nb5E++;
     }
    
     

} while ($rest >=5);


echo "monnaie a rendre au client : ". "\n";
echo "en billet (s) de 10 euros : ".$nb10E. "\n" ;
echo "en billet (s) de 5 euros : " .$nb5E. "\n" ;
echo "en piece (s) de 1 euro :".$rest;

?>