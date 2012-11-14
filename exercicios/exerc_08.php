<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Exercicio 07</title>
</head>
<body>
	
	<?php
		$var1 = "5string";
		echo "A <br />";
		$var2 = (int) $var1;
		echo "var1 = $var1, var2 = $var2";
	
		echo "B <br />";
		$var1 = (string) $var2;
		echo "var2 = $var2, var1 = $var1";	
		
		echo "C <br />";
		$var2 = (array) $var1;
		//echo "var1 = $var1, var2 = $var2";
		
		echo "D <br />";
		$var1 = (string) $var2;
		//echo "var1 = $var1, var2= $var2";
		
		$var1 = 5;
		echo "E <br />";
		$var2 = (float) $var1;
		echo "var1 = $var1, var2 = $var2";
		
		echo "F <br />";
		$var1 = (string) $var2;
		echo "var1 = $var1, var2= $var2";
		
	?>
	
</body>
</html>