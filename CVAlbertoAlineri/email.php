<?php

$host = "localhost";
$user = "finsoft";
$password = "finsoft";
$database = "email";

$conessione = new mysqli($host,$user,$password, $database);

if($conessione === false){
    die("Errore di connessione: " . $connessione->connect_error);

}

echo "Connessione avvenuta con successo: " .  $connessione->host_info;

$connessione->close();
?>