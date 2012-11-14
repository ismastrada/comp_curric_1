<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Titulo</title>
</head>
<body>
	
	<h1>
			<!--EXERCICIO 02-->
			<div id="conteudo">
				<?php
					 $nome1 = "Fulano";
					 $nome2 = "Fulana";
					 $nome3 = "Ciclano";
					 $sexo1 = "M";
					 $sexo2 = "F";
					 $sexo3 = "M";
				 ?>
				<p>
					<?php
					echo $nome1. " - ". $nome2. " - ". $nome3;
					if ($sexo1 == "M" && $sexo2 == "M" && $sexo3 == "M"){
						echo "A equipe é formada por meninos";
					} else if ($sexo1 == "M" && $sexo2 == "M" && $sexo3 == "M") {
						echo "A equipe é formada por meninas";
					} else {
						echo "A equipe é mista";
					}
					?>
				</p>
			</div>
		</h1>
		
</body>
</html>