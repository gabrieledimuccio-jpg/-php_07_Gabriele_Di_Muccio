<?php

function checklenght($password){
if (strlen($password) >= 10){
return true;
}
echo "La password non è abbastanza lunga. \n";
return false;
}


function checknumber ($password){
for ($i=0; $i < strlen($password); $i++) { 
if(is_numeric($password[$i])){
return true;
}
}
echo "La password non contiene un numero. \n";
return false;
}


function checkupper ($password){
for ($i=0; $i < strlen($password); $i++) { 
if(ctype_upper($password[$i])){
return true;
}
}
echo "La password non contiene una lettera maiuscola. \n";
return false;
}

function checkspecial ($password){
$special = ['_', '@', '!', '?', '~', '&', '£'];
for ($i=0; $i < strlen($password); $i++) { 
if(in_array($password[$i] , $special)){
return true;
}
}
echo "La password non contiene un carattere speciale. \n";
return false;
}

function result($password){
$lenght = checklenght($password);
$number = checknumber($password);
$upper = checkupper($password);
$special2 = checkspecial($password);
if($lenght && $number && $upper && $special2){
echo "La password è valida \n";
}
return $lenght && $number && $upper && $special2;
}
do {
$password1 = readline("Inserisci una password: \n");

} while (!result($password1));


?>