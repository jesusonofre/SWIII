<div class="evaluadors index">
	<h2><?php echo __('Evaluadores'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('especializacion'); ?></th>
			<th><?php echo $this->Paginator->sort('universidad'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($evaluadors as $evaluador): ?>
	<tr>
		<td><?php echo h($evaluador['Evaluador']['id']); ?>&nbsp;</td>
		<td><?php echo h($evaluador['Evaluador']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($evaluador['Evaluador']['apellido']); ?>&nbsp;</td>
		<td><?php echo h($evaluador['Evaluador']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($evaluador['Evaluador']['especializacion']); ?>&nbsp;</td>
		<td><?php echo h($evaluador['Evaluador']['universidad']); ?>&nbsp;</td>
		<td><?php echo h($evaluador['Evaluador']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($evaluador['Evaluador']['email']); ?>&nbsp;</td>
		<td><?php echo h($evaluador['Evaluador']['direccion']); ?>&nbsp;</td>
		<td><?php echo h($evaluador['Evaluador']['created']); ?>&nbsp;</td>
		<td><?php echo h($evaluador['Evaluador']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Detalle'), array('action' => 'view', $evaluador['Evaluador']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $evaluador['Evaluador']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $evaluador['Evaluador']['id']), array(), __('Estas seguro de eliminar a # %s?', $evaluador['Evaluador']['id'])); ?>
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
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Crear Evaluador'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listado Evaluaciones'), array('controller' => 'evaluacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Evaluacion'), array('controller' => 'evaluacions', 'action' => 'add')); ?> </li>
	</ul>
</div>
