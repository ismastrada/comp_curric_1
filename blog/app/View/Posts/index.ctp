<!--<pre>
	<?php print_r($posts); ?>
</pre>-->

<div class="page-header">
	<h1>Listando as Postagens</h1>
</div>

<p>

	<?php echo $this->Html->link("Novo Item", array('controller' => 'posts', 'action' => 'add'), array('class' => 'btn btn-success')); ?>
</p>

<table class="table table-hover">
	<thread>
		<tr>
			<th>Código</th>
			<th>Título</th>
			<th>Texto</th>
			<th>Criado em</th>
			<th>Atualizado em</th>
			<th colspan="3">Ações</th>
		</tr>
	</thread>


	<body>
		
			<?php foreach($posts as $post): ?>
				<tr>
					<td><?php echo $post["Post"]["id"]; ?></td>
					<td><?php echo $post["Post"]["title"]; ?></td>
					<td><?php echo $post["Post"]["body"]; ?></td>
					<td><?php echo $post["Post"]["created"]; ?></td>
					<td><?php echo $post["Post"]["modified"]; ?></td>
					<td>
						<!--<a href="/posts/view/id">Visualisar</a>-->
						<?php echo $this->Html->link("Visualizar", array('controller' => 'posts', 'action' => 'view', $post["Post"]["id"]), array('class' => 'btn')); ?>
						<?php echo $this->Html->link("Editar", array('controller' => 'posts', 'action' => 'edit', $post["Post"]["id"]), array('class' => 'btn btn-info')); ?>
						<?php echo $this->Form->postLink(
				            'Excluir',
				            array('action' => 'delete', $post['Post']['id']), 
				            array('class'=>'btn btn-danger btn-small')				            
							);
				        ?>
						<!--<?php echo $this->Html->link("Excluir", array('controller' => 'posts', 'action' => 'delete', $post["Post"]["id"])); ?>-->
					</td>
				</tr>
			<?php endforeach; ?>
	</body>
</table>