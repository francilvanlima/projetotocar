<?php
header('Access-Control-Allow-Origin: *');

$host="localhost";
$user="root";
$password="";
$dbname="projetotocar";

$connection = new mysqli($host, $user, $password, $dbname);
if($connection->connect_error) {
    die('Conexão Falhou'.$connection->connect_error);
}else{
    echo ('Connected success!');
}
?>
