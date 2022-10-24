<?php
include("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];


$resultado = "insert into tb_conforfy(nome, email, mensagem) values('$nome', '$email', '$mensagem')";
mysqli_query($mysqli, $resultado);
mysqli_close($mysqli);
mail($nome, $email, $mensagem, 'FROM: ');
header('Location: index.html#contrato');
?>