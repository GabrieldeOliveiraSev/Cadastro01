<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Cadastrar</title>	
		<style>
			.h1 {
				size: 30;
				font-family: Verdana, Geneva, Tahoma, sans-serif;
				text-align: center;
			}
			
			.conteiner {
				size: 9;
				font-family: Verdana, Geneva, Tahoma, sans-serif;
			}
			#centralizar{
    			position:absolute; 
    			top:50%;
    			left:50%;
    			transform: translate(-50%, -50%);
			}
			.campo {
				width: 50%;
				float: left;
				color: black;
			}
			#formulario {
  				width: 60%; 
				margin-left: 20%;
				padding: 45px 15px;
				height: auto;
			}
			.hr {
				display:block;
				margin-top: 0.5em;
				margin-bottom: 0.5em;
				margin-left: auto;
				margin-right: auto;
				border-style:inset;
				border-width: 1px;
				width: 800px;
				border-color:black;
			}
			
			.limpar {
				border: solid 1px rgba(249,18,22,1.00);
				border-radius: 4px;
				background-color: rgba(251,12,16,0.76);
				color: #fff;
				padding: 10px 0;
				width: 100%;
				margin: 0 auto;
				text-align: center;
				transition: 0.5s ease-out;
			}
			.confirmacao {
				border: solid 1px rgba(0,138,3,1.00);
				border-radius: 4px;
				background-color: rgba(40,201,8,0.76);
				color: #fff;
				padding: 10px 0;
				width: 100%;
				margin: 0 auto;
				text-align: center;
				
			}

			.aviso {
				border: solid 1px rgba(249,107,11,1.00);
				border-radius: 4px;
				background-color: rgba(249,107,11,0.6);
				color: #fff;
				padding: 10px 0;
				width: 100%;
				margin: 0 auto;
				text-align: center;
				transition: 0.5s ease-out;
			}

		</style>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	</head>

	<body background="Fundo03.png">
	<br>
		<h1 class="h1">Cadastrar Usuário</h1>
		<br>
		<hr  class="hr">
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		
		<div class="form-floating mb-3">
		<form id="formulario" method="POST" action="processa.php">
	<div class="campo">
			<label  class="conteiner">Nome: </label>
			<input 	size=40 type="text" name="nome" placeholder="Digite o nome completo">
	</div>
	<div class="campo">
			<label class="conteiner">Idade: </label>
			<input 	size=40 type="number" name="idade"  min="1" max="110">
	
	</div>
	<br><br>
			<label class="conteiner">Data de Nascimento: </label>
			<input size=40 type="date" name="data" placeholder="Digite o ano que você nasceu"><br><br>

			<label class="conteiner">E-mail: </label>
			<input size=40 type="email" name="email" placeholder="Digite o seu melhor e-mail"><br><br>

			<label class="conteiner">Telefone: </label>
			<input size=40 type="tel" name="telefone" placeholder="Digite o seu numero"><br><br>

			<label class="conteiner">CPF: </label>
			<input size=40 type="varchar" name="cpf" placeholder="Digite o seu CPF"><br><br>

			<label class="conteiner">RG: </label>
			<input size=40 type="varchar" name="rg" placeholder="Digite o seu RG"><br><br>

			<label class="conteiner">Endereço: </label>
			<input size=40 type="text" name="endereco" placeholder="Digite o seu melhor e-mail"><br><br>

			<label class="conteiner">Senha: </label>
			<input size=40 type="password" name="senha" placeholder="Crie uma senha"><br><br>

			
			<input class="btn btn-danger" type="reset" value="Limpar">
			
			
			<input class="btn btn-success" type="submit" id="btt" value="Cadastrar">
			<div id="mensagem"></div>
			
		
		


			
		</form>
	</div>
	</body>
</html>

<script>
	
	function mensagem(tipo,msg){
		$("#mensagem").addClass(tipo);
		$("#mensagem").html(msg);
	
		setTimeout(function(){$("#mensagem").removeClass(tipo);
		$("#mensagem").html("");},10000);
		
	
	} 
		$("#btt").click(function(){
		//pode usar 'confirmacao'  no lugar do alerta
		mensagem("confirmacao","Cadastro realizado com sucesso!");
		});



</script>
