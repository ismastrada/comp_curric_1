<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Exercicio 04</title>
</head>
<body>
	
	<!--EXERCICIO 04-->
	<h2>exercicio A</h2>
	<?php
		for ($i=0; $i<25; $i++) :
			echo "Lactobacilos vivos também possuem sentimentos";
			echo "<br />";
		endfor;
	?>

	<h2>exercicio B</h2>
	<?php
		$valor = 5;
		if ($valor != "")
			for ($i=0; $i <= $valor; $i++) :
			echo "$i <br />";
		endfor;
	?>
	<h2>exercicio C</h2>
	<?php 
		$valor1 = 5;
		$valor2 = 10;
		for ($i=$valor1+1; $i < $valor2; $i++) :
			echo "$i <br />";
		endfor;	
	?>
	
	<h2>exercicio D</h2>
	<?php
		$valor1 = 3;
		$valor2 = 5;
		$resultado = 0;
		echo "$valor1 * $valor2 = ";
		for($i = 0; $i <= $valor2; $i++):
			echo "$valor1 + ";
			$resultado = $resultado + $i;
		endfor;
		echo "<br />resultado: $resultado";	
	?>
</body>
</html>