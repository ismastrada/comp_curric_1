<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Exercicio 09</title>
</head>
<body>
	
	<form action="formulario.php" method="POST">
          	
          		<fieldset>
          			<legend>Formulário de Contato</legend>
          			
          			
          			<input type="hidden" name="pagina" value="contato">
          			
          			<label for="idNome">Nome: </label>
          			<input type="text" name="nome" id="idNome"/> 
          			<br />
          			
          			<label for="idSenha">Senha: </label>
          			<input type="password" name="senha" id="idSenha"/>
          			<br />
          			
      				<label for="idMensagem">Mensagem: </label><br />
          			<textarea name="mensagem" id="idMensagem" rows="3"></textarea>
          			<br />
          			<p>Sexo: </p>
          			<label for="idRadio">Masculino </label>
          			<input type="radio" name="radio" value="Masculino" id ="idRadio"/>
          			<br />
          			
          			<label for="idRadio">Feminino</label>
          			<input type="radio" name="radio" value="Feminino" id="idRadio"/>
          			<br />
          			
          			<label for="idCheckBox">Desejo receber promoções e informativos. </label>
          			<input type="checkbox" name="promocoes" id="idCheckBox"/>
          			<br />
          			
          			
          			<button class="btn btn-primary">Enviar Informações</button>
          			
          		</fieldset>
          </form>
          
</body>
</html>