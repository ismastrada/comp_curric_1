<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Exercicio 07</title>
</head>
<body>
	
	<!-- INICIO DO EXERCICIO 7 -->
	<h3>Exercício 7:</h3>
	<p></p><i>a - Descrever a sua funcionalidade e fazer exemplos das seguintes funções:<br/>Array(): Array é uma coleção de elementos 
		indexados na qual cada um dos elementos tem um número identificador único.<br/>Exemplo:</i></p>
	<?php 
	$lista = "mas o que, eu estou fazendo, bora dormir huee";
	$arrayList = explode(",", $lista);
	
	echo "<p>Olha a lista: </p>";
	echo "<ul>";
	   echo "<li>" . $arrayList[0] . "</li>";
	   echo "<li>" . $arrayList[1] . "</li>";
	   echo "<li>" . $arrayList[2] . "</li>";
	echo "</ul>";
	?>
	
	<p><i>b - Trim(): Retira espaço no ínicio e final de uma string.<br/>Exemplo:<br/></i></p>
	<?php
	$texto = " \t\t hehueuheuh... ";
	$trimmed = trim($texto);
	var_dump($texto);
	echo "<br/>";
	var_dump($trimmed);	
	?>
	
	<p><i>c - Substr(): Responsável por retornar um pedaço da string, utilizando três parâmetros: a própria string, o índice inicial
		 e a quantidade de caracteres a ser retornada.<br/>Exemplo:<br/></i></p>
	<?php
	$texto = "eheueeheu vamos fazer o teste!";
	echo "Sem o substr: "."$texto <br/>";
	echo "Com o substr: ". substr($texto, 0, 12);
	?>
	
	<p><i>d - Strtolower(): Convete toda a string em letra minúsculas.<br/>Exemplo:<br/></i></p>
	<?php
	$text = "AUHAHUAUHA TUDO CERTO!";
	echo "Sem strtolower: " . "$text <br/>";
	echo "Com strtolower: ". strtolower($text);
	?>
	
	<p><i>e - Strtoupper(): Converte toda a string em letra maiúscula.<br/>Exemplo:</br></i></p>
	<?php
	$text2 = "e lah vamos nos hehe";
	echo "Sem strtoupper: "."$text2 <br/>";
	echo "Com strtoupper: ". strtoupper($text2); 
	?>
	
	<p><i>f - Ucfirst(): Converte para maiúscula o primeiro caractere de uma string.<br/>Exemplo:<br/></i></p>
	<?php
	$text3 = "within Temptation - Sinead (Benno De Goeij Remix) (BacauHouseMafia.Ro)";
	echo "Sem ucfirst: "."$text3 <br/>";
	echo "Com ucfirst: ". ucfirst($text3); 
	?>
	
	<p><i>g - Ucwords(): Converte para maiúsculas o primeiro caractere de cada palavra.<br/>Exemplo:<br/></i></p>
	<?php
	$text4 = "show de bola";
	echo "Sem ucwords: "."$text4 <br/>";
	echo "Com ucwords: ". ucwords($text4); 
	?>
	
	<p><i>h - Explode(): Divide uma string em string, retornando uma matriz de string, cada uma como substring
		de string formada pela divisão dela a partir do delimiter.<br/>Exemplo:<br/></i></p>
	<?php
	$text5 = "show de bola e mais um teste hehe";
	$opa = explode(" ", $text5);
	echo $opa[0];
	echo $opa[1];
	echo $opa[2];
	echo $opa[3];
	echo $opa[4];
	echo $opa[5];
	echo $opa[6];
	echo $opa[7];
	?>
	
	<p><i>i - Var_dump(): Representação estruturada sobre uma ou mais expressões, incluindo o tipo e o valor.<br/>Exemplo:<br/></i></p>
	<?php
	$number = 10.3;
	var_dump($number);
	?>
	
</body>
</html>