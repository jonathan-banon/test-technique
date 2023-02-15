<?php

$_POST = [
    'date' => '01/02/2012',
    'nom' => 'Bobby',
    'age' => 10,
    'email' => 'bobby@gmail.com',
    'téléphone' => 33648559631,
];

function validateForm(): array {
    $result =  [
        'date' => strtotime($_POST['date']),
        'nom' => htmlspecialchars($_POST['nom']),
        'age' => filter_var($_POST['age'], FILTER_VALIDATE_INT),
        'email' => filter_var($_POST['email'], FILTER_VALIDATE_EMAIL),
        'téléphone' => filter_var($_POST['téléphone'], FILTER_SANITIZE_NUMBER_INT),
    ];
    var_dump($result);
    return $result;
}

validateForm();