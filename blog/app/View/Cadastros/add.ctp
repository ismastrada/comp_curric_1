<h1>Novo cadastro</h1>

<?php

	# criando o formulario através do AJUDANTE Form
	echo $this->Form->create('Cadastro');

	# gerando os inputs através do AJUDANTE Form
	echo $this->Form->input('nome');
	echo $this->Form->input('tipo');
	echo $this->Form->input('quantidade');

	# fechando o formulário e gerando o botão Submit
	echo $this->Form->end("Enviar");