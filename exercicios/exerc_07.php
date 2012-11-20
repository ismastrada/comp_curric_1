<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Exercicio 07</title>
</head>
<body>
	
	<!-- INICIO DO EXERCICIO 7 -->
	<h3>Exercício 7:</h3>
	<p><b>A - </b>Descrever a sua funcionalidade e fazer exemplos das seguintes funções:<br/>
	Array(): Array é uma coleção de elementos 
	indexados na qual cada um dos elementos tem um número identificador único.<br/>Exemplo:</p>
	<?php 
	$lista = "item1, item2, item3";
	$arrayList = explode(",", $lista);
	
	echo "<p>Lista: </p>";
	echo "<ul>";
	   echo "<li>" . $arrayList[0] . "</li>";
	   echo "<li>" . $arrayList[1] . "</li>";
	   echo "<li>" . $arrayList[2] . "</li>";
	echo "</ul>";
	?>
	
	<p><b>B - </b>Trim(): Retira espaço no ínicio e final de uma string.<br/>Exemplo:<br/></p>
	<?php
	$texto = "   exemplo   ";
	$trimmed = trim($texto);
	var_dump($texto);
	echo "<br/>";
	var_dump($trimmed);	
	?>
	
	<p><b>C - </b>Substr(): Responsável por retornar um pedaço da string, utilizando três parâmetros: a própria string, o índice inicial
		 e a quantidade de caracteres a ser retornada.<br/>Exemplo:<br/></p>
	<?php
	$texto = "Lorem ipsum dolor sit amet.";
	echo "Sem o substr: "."$texto <br/>";
	echo "Com o substr: ". substr($texto, 0, 12);
	?>
	
	<p><b>D - </b>Strtolower(): Convete toda a string em letras minúsculas.<br/>Exemplo:<br/></p>
	<?php
	$text = "Quisque Eget Dolor Ipsum, in.";
	echo "Sem strtolower: " . "$text <br/>";
	echo "Com strtolower: ". strtolower($text);
	?>
	
	<p><b>E - </b>Strtoupper(): Converte toda a string em letras maiúsculas.<br/>Exemplo:</br></p>
	<?php
	$text2 = "Phasellus bibendum diam sit amet.";
	echo "Sem strtoupper: "."$text2 <br/>";
	echo "Com strtoupper: ". strtoupper($text2); 
	?>
	
	<p><b>F - </b>Ucfirst(): Converte para maiúscula o primeiro caractere de uma string.<br/>Exemplo:<br/></p>
	<?php
	$text3 = "quisque condimentum lobortis nunc sit.";
	echo "Sem ucfirst: "."$text3 <br/>";
	echo "Com ucfirst: ". ucfirst($text3); 
	?>
	
	<p><b>G - </b>Ucwords(): Converte para maiúsculas o primeiro caractere de cada palavra.<br/>Exemplo:<br/></p>
	<?php
	$text4 = "ullam iaculis mauris nec risus.";
	echo "Sem ucwords: "."$text4 <br/>";
	echo "Com ucwords: ". ucwords($text4); 
	?>
	
	<p><b>H - </b>Explode(): Divide uma String em várias strings, retornando uma matriz de string, cada uma como substring
		de string formada pela divisão dela a partir do delimiter.<br/>Exemplo:<br/></p>
	<?php
	$text5 = "Etiam id tincidunt nunc maecenas";
	$explode = explode(" ", $text5);
	echo $explode[0];
	echo $explode[1];
	echo $explode[2];
	echo $explode[3];
	echo $explode[4];
	?>
	
	<p><b>I - </b>Var_dump(): Representação estruturada sobre uma ou mais expressões, incluindo o tipo e o valor.<br/>Exemplo:<br/></p>
	<?php
	$number = 10.3;
	var_dump($number);
	?>
	
	<p><b>J -</b>Implode() — Junta elementos de uma matriz em uma string<br/>Exemplo:<br/></p>
	<?php
	$array = array('valor1', 'valor2', 'valor3');
	$array_imploded = implode(", ", $array);
	echo "array: <br />";
	echo $array[0]."<br />";
	echo $array[1]."<br />";
	echo $array[2]."<br />";
	echo "implode: ".$array_imploded;
	?>
	
	<p><b>K -</b>htmlspecialchars() - Converte caracteres especiais para a realidade HTML. O código html que for nesta função não vai ser renderizado pelo navegador.<br/>Exemplo:<br/></p>
	<?php
		$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
		echo $new;
	?>
	
	<p><b>L -</b>join() - mesma função do implode().<br/>Exemplo:<br/></p>
	<?php
	$array = array('valor1', 'valor2', 'valor3');
	$array_imploded = join(", ", $array);
	echo "array: <br />";
	echo $array[0]."<br />";
	echo $array[1]."<br />";
	echo $array[2]."<br />";
	echo "join: ".$array_imploded;
	?>
	
	<p><b>M -</b>isset() - Informa se a variável foi iniciada, se tem algum valor nela.<br/>Exemplo:<br/></p>
	<?php
		$text6 = "";
		if (isset($text6)){
			echo "a variavel text6 foi iniciada";
		}
	?>

	<p><b>N -</b>strlen() - Retorna o tamanho de uma string.<br/>Exemplo:<br/></p>
	<?php
		$text7 = "Nam in egestas odio. Integer.";
		$text7_strlen = strlen($text7);
		echo "texto: ".$text7."<br />";
		echo "tamanho: ".$text7_strlen;
	?>	
	
	<p><b>O -</b>is_float(), is_int(), is_array(), is_string(), is_bool(), is_numeric() - verifica se a variável é do tipo especificado.<br/>Exemplo:<br/></p>
	<?php
		$text8 = "teste";
		echo $text8;
		if (is_array($text8))
				echo " é array";
		else if (is_string($text8))
				echo " é string";
		else if (is_bool($text8))
				echo " é boolean";
		else if (is_int($text8))
				echo " é int";
		else if (is_numeric($text8))
				echo " é numeric";	
	?>	
	
	<p><b>P -</b>getdate() - Consegue informações de data/hora. <br/>Exemplo:<br/></p>
	<?php
		$hoje = getdate(); 
		print_r($hoje);
	?>
	
	<p><b>Q -</b>empty() - Informa se a variável é vazia, é inexistente ou tem valor 0.<br/>Exemplo:<br/></p>
	<?php
		$var = 0;
		if (empty($var))
			echo "$var - variavel com valor 0, vazia ou inexistente";
	?>
	
	<p><b>R -</b>strip_tags() - Retira as tags HTML e PHP de uma string.<br/>Exemplo:<br/></p>
	<?php
		$text9 = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
		echo "sem strip_tags $text9 <br />";
		echo "<br /> usando strip_tags: ";
		echo strip_tags($text9);
		
		echo "<br />usando strip_tags, mas sem retirar as tags p e a";
		echo strip_tags($text9, '<p><a>');
	?>
	
	<p><b>S -</b>max(), min() - localiza o maior e menor valor, respectivamente.<br/>Exemplo:<br/></p>
	<?php
		echo max(1, 3, 5, 6, 7);
		echo "<br />";
		echo max(array(2, 4, 5));
		echo "<br />";
		echo min(2, 3, 1, 6, 7);
		echo "<br />";
		echo min(array(2, 4, 5)); 
	?>
	
	<p><b>T -</b>abs() - retorna o valor absoluto do número.<br/>Exemplo:<br/></p>
	<?php
		$var1 = abs(-4.2); 
		$var2 = abs(5);  
		$var3 = abs(-5); 
		echo "$var1<br /> $var2<br /> $var3";
 
	?>
	
	<p><b>U -</b>ceil(), floor(), round() - arredonda funções para cima, para baixo, ou então arredonda para o número mais próximo, respectivamente.<br/>Exemplo:<br/></p>
	<?php
		$numero = 4.6;
		echo "usando ceil: ";
		echo ceil($numero);
		echo "<br />";
		echo "usando floor: ";
		echo floor($numero);
 		echo "<br />";
		echo "usando round: ";
		echo round($numero);
	?>
	
	<p><b>V -</b>rand() - gera um número aleatório. Deve-se passar por parametro o número mínimo e máximo.<br/>Exemplo:<br/></p>
	<?php
		echo rand(1, 100);
		echo "<br />";
	?>
	
	<p><b>W -</b>sqrt() - retorna a raiz quadrada.<br/>Exemplo:<br/></p>
	<?php
		$numero = 100;
		echo "número: $numero<br />raiz quadrada: ";
		echo sqrt($numero);
	?>
	
	<p><b>X -</b>str_replace() - Substitui todas as ocorrências da string de procura com a string de substituição.<br/>Exemplo:<br/></p>
	<?php
		$frase  = "você comeria frutas, vegetais, e fibra todos os dias.";
		$saudavel = array("frutas", "vegetais", "fibra");
		$saboroso   = array("pizza", "cerveja", "sorvete");
		$novafrase = str_replace($saudavel, $saboroso, $frase);
		echo "frase: $frase <br />";
		echo "noma frase: $novafrase";
	?>
	
	<p><b>Y -</b>count() - Conta o número de elementos de uma variável, ou propriedades de um objeto.<br/>Exemplo:<br/></p>
	<?php
		$a[0] = 1;
		$a[1] = 3;
		$a[2] = 5;
		$result = count($a);
		echo "count: $result";
	?>
	
	<p><b>Z - </b>htmlentities() - Converte todos os caracteres aplicáveis em entidades html.<br/>Exemplo:<br/></p>
	<?php
		$str = "A 'quote' is <b>bold</b>";
		
		echo "str = $str <br />";
		echo htmlentities($str);
		echo "<br />";
		echo htmlentities($str, ENT_QUOTES);
	?>
	
</body>
</html>