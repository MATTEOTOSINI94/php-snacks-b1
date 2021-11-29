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
    echo "<h1>Accesso Effettuato</h1>";
}else{echo "Accesso Negato";}


// Snack 2
// Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007
//  e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

$chiaviArray = array_keys($posts);
var_dump($chiaviArray);
// METODO CON IL FOR
for ($i=0; $i < count($chiaviArray) ; $i++) { 
  echo $data = $chiaviArray[$i];
  $postDelGiorno = $posts[$data];
  for ($x=0; $x < count($postDelGiorno) ; $x++) { 
    $arrayDati = $postDelGiorno[$x]["title"]. "<br>" . $postDelGiorno[$x]["author"]."<br>". $postDelGiorno[$x]["text"];
    echo "<ul><li>$arrayDati</li></ul>";
  }
};
// METODO CON IL FOR EACH
foreach ($posts as $key => $value) {
   echo $key;

   foreach ($value as  $valu) {
    //    var_dump($valu);

      $allPost = $valu["title"] ."<br>".$valu["author"]."<br>".$valu["text"];

      echo "<ul><li>$allPost</li></ul>";
      
      
   }

  
}


   
   
    // $first= $arrayK['10/01/2019'];







// Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
$arrayNumber = [];
while (count($arrayNumber) <= 15) {
    $randomNuber= rand(1,50);
    if (!in_array($randomNuber,$arrayNumber)) {
       $arrayNumber[] = $randomNuber;
    }
}
echo implode(" ",$arrayNumber);










?>




