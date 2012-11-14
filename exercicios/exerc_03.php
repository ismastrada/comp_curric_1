<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Titulo</title>
</head>
<body>
	
	<!--EXERCICIO 03-->
		<div id="Exercicio3">
			<?php
				$qtd = "1, 2, 3";
				switch ($qtd) {
					case '0':
						echo "Não possui nenhum produto cadastrado";
						break;
					case '1':
						echo "Você possui um produto cadastrado";
						break;
					case '1, 2, 3':
						echo "Você possui vários produtos cadastrados";
						break;
					default:
						echo "Cadastro inválido, tente novamente";
						break;
				}
			?>
		</div>

	
	
</body>
</html>