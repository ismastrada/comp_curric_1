<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Exercicio 05</title>
</head>
<body>
	
	<?php
	
		function multiplica() {
		
			$valor1 = 3;
			$valor2 = 5;
			$resultado = 0;
			echo "$valor1 * $valor2 = ";
			for($i = 0; $i <= $valor2; $i++):
				echo "$valor1 + ";
				$resultado = $resultado + $i;
			endfor;
			echo "<br />resultado: $resultado";
		}	
		
		echo multiplica();
	?>
	
</body>
</html>