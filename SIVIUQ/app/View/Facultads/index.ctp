<div class="facultads index">
	<h2><?php echo __('Facultades'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('decano'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($facultads as $facultad): ?>
	<tr>
		<td><?php echo h($facultad['Facultad']['id']); ?>&nbsp;</td>
		<td><?php echo h($facultad['Facultad']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($facultad['Facultad']['email']); ?>&nbsp;</td>
		<td><?php echo h($facultad['Facultad']['decano']); ?>&nbsp;</td>
		<td><?php echo h($facultad['Facultad']['created']); ?>&nbsp;</td>
		<td><?php echo h($facultad['Facultad']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Detalle'), array('action' => 'view', $facultad['Facultad']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $facultad['Facultad']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $facultad['Facultad']['id']), array(), __('Estas seguro de eliminar a # %s?', $facultad['Facultad']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Crear Facultad'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listado Programas'), array('controller' => 'programas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Programa'), array('controller' => 'programas', 'action' => 'add')); ?> </li>
	</ul>
</div>
