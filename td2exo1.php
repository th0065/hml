<?php 
$tab = array('TRAORE' => array('Harouna','Libreville' ,'Lalala à droite','21' ) , 'KONE'=> array('Ibrahim','Abidjan' ,'Kokodi' ,'23' ) ,'DIAKITE'=> array('Bouyagui','Nouakchott' ,'El Mina' ,'24' ) ,'NDIAYE'=> array('Mamadou','Dakar' ,'liberté 6' ,'16' ));
foreach ($tab as $key => $value) {
	echo "  \n  $key:: ";
	foreach ($value as $i => $valu) {
		echo " \n $i : $valu";
	}
}


 ?>