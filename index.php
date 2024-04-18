<?php
/* Traccia 1:

Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere. */
$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
    ['name' => 'Marco', 'surname' => 'Panzan', 'gender' => 'M'],
    ['name' => 'Giulia', 'surname' => 'Sangiorgi', 'gender' => 'F'],
   ];
 
   foreach($users as $user){
    if($user['gender'] == 'M'){
        echo "buongiorno sig. " . $user['name'] . ' ' . $user['surname'] .  "\n";
        // echo "L'insegnante {$user['name']} ha {$user['surname']} anni ed insegna {$user['gender']}\n";
    } else if($user['gender'] == "F"){
        echo "Buongiorno sig.ra " . $user['name'] . ' ' . $user['surname'] . "\n";
    } else {
        echo "Buongiorno " . $user['name'] . ' ' . $user['surname'] . "\n";
    }
} ;