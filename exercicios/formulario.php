<?php
	
	// $_POST = variavel global
	
	//o var_dump  imprime um array
	//var_dump($_POST);

	// SE for enviado um post e a variável não é vazia
	// então mostrar os dados
	if (isset($_POST) && !empty($_POST) && $_POST["pagina"] == "contato"){
		echo $_POST["nome"]."<br />";
		echo $_POST["senha"]."<br />";
		echo $_POST["mensagem"];
		switch ($_POST["radio"]) {
			case "Masculino" :
				echo "Masculino";
				break;
			case "Feminino" :
				echo "Feminino";
				break;
			default :
				echo "nenhum sexo escolhido";
				break;
		}
   		if(isset($_POST["promocoes"])) {
   			echo "quer receber promoções e informativos";	
		}
	}
	// senão
	// redirecionar para a página de contato
	else {
		//vai redirecionar para a página contact.php
		header("Location: contact.php");
	}
	
