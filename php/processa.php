<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title> Dados Cadastrados </title>
		<meta charset="utf-8">
		</style>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">		
	</head>
	<style>
		.letra {
			size: 30;
			font-family: Verdana, Geneva, Tahoma, sans-serif;
		}
		div.tres {
			line-height:0;
			width:9;
			height:60px;
			border-style: solid;
			border-color: #00BFFF ;
			border-width: 10px 50px 60px;
			opacity: 0.5;
		}
		.h1 {
			text-align: center;
		}
	</style>
	<body background="Cliente.jpg">
	<div class="tres">	
	<h1 class="h1">Informações Cadastradas!!</h1>
	</div>
		<br>
		<br>
		<br>
		<br>

		
			<b><i><p>Caro cliente, é com grande alegria que agradecemos por depositar sua confiança </p>
			<p>em nosso trabalho e profissionalismo.</p>
			<p>Nos empenhamos ao máximo para alcançar a qualidade que você procura e é uma</p>
			<p> grande motivação ter a aprovação de clientes especiais como você.</p>
			
			<p>Esperamos que a nossa parceria seja duradoura e que nosso trabalho sempre corresponda <p>
			<p>com as suas expectativas!</p><br>
			<p>Obrigado por nos impulsionar a sempre desempenharmos nosso melhor trabalho!</p></b></i>
			
	

	</body>
		
</html>
<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
$dtnascimento = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_SPECIAL_CHARS);
$senha = filter_input(INPUT_POST, 'senha', FILTER_DEFAULT);


//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "INSERT INTO usuarios (Nome, idade, dtnascimento, email, telefone, cpf, rg, endereco, senha, created) VALUES ('$nome', '$idade', '$dtnascimento', '$email', '$telefone', '$cpf', '$rg', '$endereco', '$senha',  NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);



// Fazer Uma notificação


