<?php
 
for($i=11; $i<=36; $i++)
{
    $tab[$i]=chr(54+$i);
}
 echo "Avec for\n";
for($i=11;$i<=36; $i++)
{
    echo "code ASCII $i ==> $tab[$i] \n";
}
 
 echo "Avec foreach\n";

 foreach ($tab as $key => $value) {
 	echo "code ASCII $tab ==> $value \n";
 }
 
 
 
?>