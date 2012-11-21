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
		insereNoBanco();
		header("Location: contact.php");
	}
	// senão
	// redirecionar para a página de contato
	else {
		//vai redirecionar para a página contact.php
		header("Location: contact.php");
	}
	
	function insereNoBanco() {
		$nome = $_POST["nome"];
		$email= $_POST["email"];
		$mensagem = $_POST["mensagem"];
		mysql_connect("localhost", "root", "") or die(mysql_error());
	
		mysql_select_db("mydbsite") or die(mysql_error());
		
		$sql = "insert into contatos (name, email, mensagem, created) values ('{$nome}', '{$email}', '{$mensagem}', now())";
		
		mysql_query($sql) or die (mysql_error());
		
		mysql_close();
		echo "o contato de $nome foi inserido no BD com sucesso";
	
	}
	
	
?>