<div class="grupos index">
	<h2><?php echo __('Grupos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('registradoPor'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('categoria'); ?></th>
			<th><?php echo $this->Paginator->sort('programa_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($grupos as $grupo): ?>
	<tr>
		<td><?php echo h($grupo['Grupo']['id']); ?>&nbsp;</td>
		<td><?php echo h($grupo['Grupo']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($grupo['Grupo']['registradoPor']); ?>&nbsp;</td>
		<td><?php echo h($grupo['Grupo']['email']); ?>&nbsp;</td>
		<td><?php echo h($grupo['Grupo']['categoria']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($grupo['Programa']['id'], array('controller' => 'programas', 'action' => 'view', $grupo['Programa']['id'])); ?>
		</td>
		<td><?php echo h($grupo['Grupo']['created']); ?>&nbsp;</td>
		<td><?php echo h($grupo['Grupo']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $grupo['Grupo']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $grupo['Grupo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $grupo['Grupo']['id']), array(), __('Estas seguro de eliminar a # %s?', $grupo['Grupo']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Crear Grupo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listado Programas'), array('controller' => 'programas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Programa'), array('controller' => 'programas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Grupoinves'), array('controller' => 'grupoinves', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Grupoinve'), array('controller' => 'grupoinves', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Grupolineas'), array('controller' => 'grupolineas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Grupolinea'), array('controller' => 'grupolineas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
