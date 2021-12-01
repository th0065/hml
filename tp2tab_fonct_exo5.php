<?php 
function capital()
{
	$cap = array("France"=>"Paris", "Allemagne"=>"Berlin", "Mali"=>"Bamako","Maroc"=>"Rabat", "Espagne"=>"Madrid", "Portugal"=>"Lisbonne","Angleterre"=>"Londres", "Senegal"=>"Dakar");
	
do
{
	echo "0.France\n1.Allemagne\n2.Mali\n3.Maroc\n4.Espagne\n5.Portugal\n6.Angleterre\n";
	$i=intval(readline("Saisir un nombre entre 0 et 6: "));
	echo "\n";
	
	switch ($i) 
	{
		case '0':
			echo "$cap[0]==>$cap[0]_value";
			break;
	    case '1':
			echo "$cap[1]==>$cap[1]_value";
			break;
	    case '2':
			echo "$cap[2]==>$cap[2]_value";
			break;
		case '3':
			echo "$cap[3]==>$cap[3]_value";
			break;
		case '4':
			echo "$cap[4]==>$cap[4]_value";
			break;
		case '5':
			echo "$cap[5]==>$cap[5]_value";
			break;
		    echo "$cap[6]==>$cap[6]_value";
		default:
			echo "Inconnu";
			break;
    }	
}
while($i!=7);
}
capital();

 ?>