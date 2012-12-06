<!--<pre>
	<?php print_r($posts); ?>
</pre>-->

<div class="page-header">
	<h1>Listando os Cadastros</h1>
</div>

<p>

	<?php echo $this->Html->link("Novo Item", array('controller' => 'cadastros', 'action' => 'add'), array('class' => 'btn btn-success')); ?>
</p>

<table class="table table-hover">
	<thread>
		<tr>
			<th>Código</th>
			<th>Nome</th>
			<th>Tipo</th>
			<th>Quantidade</th>
			<th>Criado em</th>
			<th>Atualizado em</th>
			<th colspan="3">Ações</th>
		</tr>
	</thread>


	<body>
		
			<?php foreach($cadastros as $cadastro): ?>
				<tr>
					<td><?php echo $cadastro["Cadastro"]["id"]; ?></td>
					<td><?php echo $post["Cadastro"]["nome"]; ?></td>
					<td><?php echo $post["Cadastro"]["tipo"]; ?></td>
					<td><?php echo $post["Cadastro"]["quantidade"]; ?></td>
					<td><?php echo $post["Cadastro"]["created"]; ?></td>
					<td><?php echo $post["Cadastro"]["modified"]; ?></td>
					<td>
						<!--<a href="/posts/view/id">Visualisar</a>-->
						<?php echo $this->Html->link("Visualizar", array('controller' => 'cadastros', 'action' => 'view', $cadastro["Cadastro"]["id"]), array('class' => 'btn')); ?>
						<?php echo $this->Html->link("Editar", array('controller' => 'cadastros', 'action' => 'edit', $cadastro["Cadastro"]["id"]), array('class' => 'btn btn-info')); ?>
						<?php echo $this->Form->postLink(
				            'Excluir',
				            array('action' => 'delete', $cadastro['Cadastro']['id']), 
				            array('confirm' => 'Are you sure?')
							);
				        ?>
						<!--<?php echo $this->Html->link("Excluir", array('controller' => 'cadastros', 'action' => 'delete', $cadastro["Cadastro"]["id"])); ?>-->
					</td>
				</tr>
			<?php endforeach; ?>
	</body>
</table>