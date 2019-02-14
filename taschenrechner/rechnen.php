<?php

session_start();

$ergebnis = '';
$history = [];
$error = '';
$allowed = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '+', '-', '*', '/', '.'];


if(!empty($_SESSION["history"])) {
    $history = $_SESSION["history"];
}

$rechnung = $_POST["display"];

if(empty($rechnung)) {
    return;
}

if (preg_match( '/[a-zA-Z]/', $rechnung) || preg_match('/[^a-zA-Z\d\+\-\*\/\.]/' , $rechnung)) {
    $error = 'Unerlaubtes Zeichen verwendet!';
    return;
}

try {
    eval("\$ergebnis = $rechnung;");
} catch (Throwable $t) {
    $error = 'Kein gültiger Term!';
    return;
}

$history[] = [
    'rechnung' => $rechnung,
    'ergebnis' => $ergebnis,
];

$history = array_splice($history, -3);

$_SESSION["history"] = $history;

?>