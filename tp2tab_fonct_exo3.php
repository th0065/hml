<?php
function verificationPWD() {
 $arg=array();
 $i=0;
 do
 {
   $arg[$i]= (readline("Saisir un mot de passe :"));
    if($arg[$i]=="ok")
      break;
   if(strlen($arg[$i])>=8)
   { 
      echo "true\nSaisir ok pour arreter\n";
   }
   if(strlen($arg[$i])<8)
   {
      echo "false\nSaisir ok pour arreter\n";
   }
   
    $i++; 
 }
 while ($arg[$i]!="ok");
 

}
verificationPWD(); 
?>