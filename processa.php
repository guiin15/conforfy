<?php
include("conexao.php");

$nome = $_GET['nome'];
$email = $_GET['email'];
$mensagem = $_GET['mensagem'];


$resultado = "insert into tb_conforfy(nome, email, mensagem) values('$nome', '$email', '$mensagem')";
if(mysqli_query($mysqli, $resultado)){
echo "Mensagem enviada!";
}
else{
    echo "Erro" .mysqli_connect_error($mysqli);
}
mysqli_close($mysqli);
?>