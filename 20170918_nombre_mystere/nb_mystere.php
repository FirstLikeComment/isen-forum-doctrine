<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 9/19/2017
 * Time: 4:53 PM
 */

srand(time());

$guess = rand(0, 100);

$guesses = [];
do{
    echo 'Entrer un nombre : ';
    $read = fscanf(STDIN, '%d');

    //verifie le nb entre
    if(count($read) !== 1 || strlen($read[0]) <= 0){
        echo 'Saisie incorrecte'.PHP_EOL;
        continue;
    }

    $input = $read[0];

    $guesses[] = $input;

    $attemps += 1;

    if ($input < $guess){
        echo 'Le nombre est trop petit'.PHP_EOL;
    }
    if ($input > $guess){
        echo 'Le nombre entré est trop grand'.PHP_EOL;
    }

}while($input !== $guess);

echo 'Gagné en '.$attemps.' coups' .PHP_EOL;

foreach ($guesses as $values){
    echo $values .PHP_EOL;
}