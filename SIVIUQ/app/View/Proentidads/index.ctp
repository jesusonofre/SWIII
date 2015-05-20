<div class="proentidads index">
	<h2><?php echo __('Proentidads'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('aporte'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('proyecto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('entidad_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($proentidads as $proentidad): ?>
	<tr>
		<td><?php echo h($proentidad['Proentidad']['id']); ?>&nbsp;</td>
		<td><?php echo h($proentidad['Proentidad']['aporte']); ?>&nbsp;</td>
		<td><?php echo h($proentidad['Proentidad']['created']); ?>&nbsp;</td>
		<td><?php echo h($proentidad['Proentidad']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($proentidad['Proyecto']['id'], array('controller' => 'proyectos', 'action' => 'view', $proentidad['Proyecto']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($proentidad['Entidad']['id'], array('controller' => 'entidads', 'action' => 'view', $proentidad['Entidad']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $proentidad['Proentidad']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $proentidad['Proentidad']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $proentidad['Proentidad']['id']), array(), __('Estas seguro de eliminar a # %s?', $proentidad['Proentidad']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Crear Proentidad'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listado Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Entidads'), array('controller' => 'entidads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Entidad'), array('controller' => 'entidads', 'action' => 'add')); ?> </li>
	</ul>
</div>
