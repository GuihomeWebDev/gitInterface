<?php

//Spaceship return 1,0,-1 if a is bigger, smaller or equal to b
function Spaceship($a, $b):int {

    return $a <=> $b;
    // return intdiv( $a, $b );
}

var_dump(Spaceship(6, 7));


//Spread Operator ...
define("FRUIT", ["pomme", "poire", "cerise"]);
$arr2 =["prune", "banane", ...FRUIT];
print_r(FRUIT);
print_r( $arr2);

 //elvis operator   ?:  if a is not null, return a, else return b

    var_dump(5 ?: 0); // 5
    var_dump(false ?: 0); // 0
    var_dump(null ?: 'foo'); // 'foo'
    var_dump(true ?: 123); // true
    var_dump('rock' ?: 'roll'); // 'rock'

 //coalesce operator ??  if a is not null, return a, else return b
 
$identifiant = $_GET['utilisateur'] ?? 'aucun';
// Ceci est équivalent à :
$identifiant = isset($_GET['utilisateur']) ? $_GET['utilisateur'] : 'aucun';

// L'opérateur permet de faire du chaînage : Ceci va retourner la première
// valeur définie respectivement dans $_GET['utilisateur'], $_POST['utilisateur']
// et 'aucun'.
$identifiant = $_GET['utilisateur'] ?? $_POST['utilisateur'] ?? 'aucun';
var_dump($identifiant);

