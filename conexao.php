<?php
$hostname = "localhost";
$bancodedados = "acc";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if($mysqli->connect_errno)
?>