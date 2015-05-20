<div class="investigadors index">
	<h2><?php echo __('Investigadors'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('cedula'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido'); ?></th>
			<th><?php echo $this->Paginator->sort('correo'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			
			<th><?php echo $this->Paginator->sort('programa_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($investigadors as $investigador): ?>
	<tr>
		<td><?php echo h($investigador['Investigador']['id']); ?>&nbsp;</td>
		<td><?php echo h($investigador['Investigador']['cedula']); ?>&nbsp;</td>
		<td><?php echo h($investigador['Investigador']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($investigador['Investigador']['apellido']); ?>&nbsp;</td>
		<td><?php echo h($investigador['Investigador']['correo']); ?>&nbsp;</td>
		<td><?php echo h($investigador['Investigador']['telefono']); ?>&nbsp;</td>
		
		<td>
			<?php echo $this->Html->link($investigador['Programa']['id'], array('controller' => 'programas', 'action' => 'view', $investigador['Programa']['id'])); ?>
		</td>
		<td><?php echo h($investigador['Investigador']['created']); ?>&nbsp;</td>
		<td><?php echo h($investigador['Investigador']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Detalle'), array('action' => 'view', $investigador['Investigador']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $investigador['Investigador']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $investigador['Investigador']['id']), array(), __('Estas seguro de eliminar a # %s?', $investigador['Investigador']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Crear Investigador'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listado Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Programas'), array('controller' => 'programas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Programa'), array('controller' => 'programas', 'action' => 'add')); ?> </li>
	</ul>
</div>
