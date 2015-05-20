<div class="tipos index">
	<h2><?php echo __('Tipos De Concepto '); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($tipos as $tipo): ?>
	<tr>
		<td><?php echo h($tipo['Tipo']['id']); ?>&nbsp;</td>
		<td><?php echo h($tipo['Tipo']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($tipo['Tipo']['created']); ?>&nbsp;</td>
		<td><?php echo h($tipo['Tipo']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $tipo['Tipo']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $tipo['Tipo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $tipo['Tipo']['id']), array(), __('Estas seguro de eliminar a # %s?', $tipo['Tipo']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Crear Tipo Concepto'), array('action' => 'add')); ?></li>
	</ul>
</div>
