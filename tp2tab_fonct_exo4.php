<?php
function verificationPWD() {
 $arg=array();
 $i=0;
 do
 {
   $arg[$i]= (readline("Saisir un mot de passe :"));
    if($arg[$i]=="ok")
      break;
    if (preg_match('/[A-Z]/', $arg[$i]) && preg_match('/[0-9]/', $arg[$i]) && strlen($arg[$i])>=8)
   { 
      echo "true\nSaisir ok pour arreter\n";
   }
   else
   {
      echo "false\nSaisir ok pour arreter\n";
   }
   
    $i++; 
 }
 while ($arg[$i]!="ok");
 

}
verificationPWD(); 
?>