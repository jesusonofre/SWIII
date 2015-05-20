<div class="convocatorias index">
	<h2><?php echo __('Convocatorias'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('fechaInicio'); ?></th>
			<th><?php echo $this->Paginator->sort('fechaFin'); ?></th>
			<th><?php echo $this->Paginator->sort('registradoPor'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($convocatorias as $convocatoria): ?>
	<tr>
		<td><?php echo h($convocatoria['Convocatoria']['id']); ?>&nbsp;</td>
		<td><?php echo h($convocatoria['Convocatoria']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($convocatoria['Convocatoria']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($convocatoria['Convocatoria']['fechaInicio']); ?>&nbsp;</td>
		<td><?php echo h($convocatoria['Convocatoria']['fechaFin']); ?>&nbsp;</td>
		<td><?php echo h($convocatoria['Convocatoria']['registradoPor']); ?>&nbsp;</td>
		<td><?php echo h($convocatoria['Convocatoria']['created']); ?>&nbsp;</td>
		<td><?php echo h($convocatoria['Convocatoria']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $convocatoria['Convocatoria']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $convocatoria['Convocatoria']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $convocatoria['Convocatoria']['id']), array(), __('Estas seguro de eliminar a# %s?', $convocatoria['Convocatoria']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
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
		<li><?php echo $this->Html->link(__('Crear Convocatoria'), array('action' => 'add')); ?></li>
	</ul>
</div>
