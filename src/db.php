<?php
    define("DB_SERVER","localhost");
    define("DB_USER","root");
    define("DB_PASSWORD","");
    define("DB_NAME","forma");

$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
if($mysqli->connect_error){
    echo "Atsiprašome, bet svetainė susidūrė su problema.\n";
    echo'KLaida: '.$mysqli->connect_error.'\n';
    exit();
}
mysqli_query($mysqli,"INSERT INTO klientai (name, lastname, email, message)
VALUES('$_POST[name]','$_POST[lastname]','$_POST[email]','$_POST[message]')");

