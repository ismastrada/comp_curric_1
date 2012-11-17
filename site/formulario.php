<?php
	
	// $_POST = variavel global
	
	//o var_dump  imprime um array
	//var_dump($_POST);

	// SE for enviado um post e a variável não é vazia
	// então mostrar os dados
	if (isset($_POST) && !empty($_POST) && $_POST["pagina"] == "contato"){
		echo $_POST["nome"]."<br />";
		echo $_POST["email"]."<br />";
		echo $_POST["mensagem"];
	}
	// senão
	// redirecionar para a página de contato
	else {
		//vai redirecionar para a página contact.php
		header("Location: contact.php");
	}
	
