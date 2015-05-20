<div class="usuarios index">
	<h2><?php echo __('Usuarios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido'); ?></th>
			<th><?php echo $this->Paginator->sort('login'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo'); ?></th>
			<th><?php echo $this->Paginator->sort('hoja_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($usuarios as $usuario): ?>
	<tr>
		<td><?php echo h($usuario['Usuario']['id']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['apellido']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['login']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['password']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['tipo']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($usuario['Hoja']['id'], array('controller' => 'hojas', 'action' => 'view', $usuario['Hoja']['id'])); ?>
		</td>
		<td><?php echo h($usuario['Usuario']['created']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Informacion'), array('action' => 'view', $usuario['Usuario']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $usuario['Usuario']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $usuario['Usuario']['id']), array(), __('Estas seguro de eliminar  # %s?', $usuario['Usuario']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina {:page} de {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Crear Usuario'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Hojas De Vida'), array('controller' => 'hojas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Hoja Vida'), array('controller' => 'hojas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Investigadores'), array('controller' => 'investigadors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Investigador'), array('controller' => 'investigadors', 'action' => 'add')); ?> </li>
	</ul>
</div>
