<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Exercicio 10</title>
</head>
<body>
	<h3>Exercicio 10</h3>
	<?php
	
	// $_POST = variavel global
	
	//o var_dump  imprime um array
	//var_dump($_POST);

	// SE for enviado um post e a variável não é vazia
	// então mostrar os dados
	
  	
	if (isset($_POST) && !empty($_POST) && $_POST["pagina"] == "contato"){
		$nome = strip_tags($_POST["nome"]);		
		$senha = strip_tags($_POST["senha"]);
		$senhaCrip = md5($senha);	
		$mensagem = strip_tags($_POST["mensagem"]);
		
			
		echo "nome: $nome <br />";
		echo "senha: $senha <br />";
		echo "senha criptografada: $senhaCrip <br />";
		echo "mensagem: $mensagem <br />";
		switch ($_POST["radio"]) {
			case "Masculino" :
				echo "Sexo Masculino";
				break;
			case "Feminino" :
				echo "Sexo Feminino";
				break;
			default :
				echo "Nenhum sexo escolhido";
				break;
		}
		if(isset($_POST["promocoes"])) {
			echo "<br />Deseja receber promoções e informativos";	
		}
	}
	// senão
	// redirecionar para a página de contato
	else {
		//vai redirecionar para a página contact.php
		header("Location: contact.php");
	}
	
?>

</body>
</html>