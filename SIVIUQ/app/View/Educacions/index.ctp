<div class="educacions index">
	<h2><?php echo __('Educaciones'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('institucion'); ?></th>
			<th><?php echo $this->Paginator->sort('ciudad'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th><?php echo $this->Paginator->sort('hoja_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($educacions as $educacion): ?>
	<tr>
		<td><?php echo h($educacion['Educacion']['id']); ?>&nbsp;</td>
		<td><?php echo h($educacion['Educacion']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($educacion['Educacion']['institucion']); ?>&nbsp;</td>
		<td><?php echo h($educacion['Educacion']['ciudad']); ?>&nbsp;</td>
		<td><?php echo h($educacion['Educacion']['fecha']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($educacion['Hoja']['id'], array('controller' => 'hojas', 'action' => 'view', $educacion['Hoja']['id'])); ?>
		</td>
		<td><?php echo h($educacion['Educacion']['created']); ?>&nbsp;</td>
		<td><?php echo h($educacion['Educacion']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Detalle'), array('action' => 'view', $educacion['Educacion']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $educacion['Educacion']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $educacion['Educacion']['id']), array(), __('Estas seguro de eliminar a # %s?', $educacion['Educacion']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Crear Educacion'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listado Hojas De Vida'), array('controller' => 'hojas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Hoja De Vida'), array('controller' => 'hojas', 'action' => 'add')); ?> </li>
	</ul>
</div>
