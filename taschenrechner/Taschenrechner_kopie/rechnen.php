<?php

session_start();

$ergebnis = '';
$history = ["rechnung" => $rechnung, "ergebnis" => $ergebnis];

if(!empty($_SESSION["history"])){
    $history = $_SESSION["history"];
}

if(empty($_POST["display"])) {
    return;
}

$rechnung = $_POST["display"];

eval("\$ergebnis = $rechnung;");

array_push($history, "$rechnung", "$ergebnis");

$history = array_splice($history, -6);

$_SESSION["history"] = $history;


?>