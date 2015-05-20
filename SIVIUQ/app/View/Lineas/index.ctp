<div class="lineas index">
	<h2><?php echo __('Lineas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('registradoPor'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($lineas as $linea): ?>
	<tr>
		<td><?php echo h($linea['Linea']['id']); ?>&nbsp;</td>
		<td><?php echo h($linea['Linea']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($linea['Linea']['registradoPor']); ?>&nbsp;</td>
		<td><?php echo h($linea['Linea']['created']); ?>&nbsp;</td>
		<td><?php echo h($linea['Linea']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $linea['Linea']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $linea['Linea']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $linea['Linea']['id']), array(), __('Estas seguro de eliminar a # %s?', $linea['Linea']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Crear Linea'), array('action' => 'add')); ?></li>
	</ul>
</div>
