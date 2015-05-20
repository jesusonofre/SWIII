<div class="entidads index">
	<h2><?php echo __('Entidades Financieras'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('registradoPor'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($entidads as $entidad): ?>
	<tr>
		<td><?php echo h($entidad['Entidad']['id']); ?>&nbsp;</td>
		<td><?php echo h($entidad['Entidad']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($entidad['Entidad']['registradoPor']); ?>&nbsp;</td>
		<td><?php echo h($entidad['Entidad']['created']); ?>&nbsp;</td>
		<td><?php echo h($entidad['Entidad']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $entidad['Entidad']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $entidad['Entidad']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $entidad['Entidad']['id']), array(), __('Estas seguro de eliminar # %s?', $entidad['Entidad']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina {:page} De {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
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
		<li><?php echo $this->Html->link(__('Crear Entidad Financiera'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listado Proyectos '), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
