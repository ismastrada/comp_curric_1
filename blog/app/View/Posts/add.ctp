<h1>Adicionando Postagem</h1>

<?php

	# criando o formulario através do AJUDANTE Form
	echo $this->Form->create('Post');

	# gerando os inputs através do AJUDANTE Form
	echo $this->Form->input('title');
	echo $this->Form->input('body', array('rows' => '3'));

	# fechando o formulário e gerando o botão Submit
	echo $this->Form->end("Enviar");