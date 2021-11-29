<?php

// Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
// che name sia più lungo di 3 caratteri, che mail contenga un punto e una 
// chiocciola e che age sia un numero. Se tutto è ok stampare
//  “Accesso riuscito”, altrimenti “Accesso negato”

$nome="";
$mail="";
$age=null;


if (!array_key_exists("nome",$_GET) || strlen($_GET["nome"]) < 3) {
    exit("Accesso Negato");
};
if (!array_key_exists("mail",$_GET) || strlen($_GET["mail"]) === 0) {
    exit("Accesso Negato");
};
if (!array_key_exists("age",$_GET) || strlen($_GET["age"]) === 0) {
    exit("Accesso Negato");
};

$nome=$_GET["nome"];
$mail=$_GET["mail"];
$checkEmail= strpos($mail, "@");
$checkDot=strpos($mail,".");
$age=$_GET["age"];

if (is_numeric($age) && $checkEmail && $checkDot) {
    echo "Accesso Effettuato";
}else{echo "Accesso Negato";}




?>