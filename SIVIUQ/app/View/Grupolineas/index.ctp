<div class="grupolineas index">
	<h2><?php echo __('Grupolineas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('linea_id'); ?></th>
			<th><?php echo $this->Paginator->sort('grupo_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($grupolineas as $grupolinea): ?>
	<tr>
		<td><?php echo h($grupolinea['Grupolinea']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($grupolinea['Linea']['id'], array('controller' => 'lineas', 'action' => 'view', $grupolinea['Linea']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($grupolinea['Grupo']['id'], array('controller' => 'grupos', 'action' => 'view', $grupolinea['Grupo']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Detalle'), array('action' => 'view', $grupolinea['Grupolinea']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $grupolinea['Grupolinea']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $grupolinea['Grupolinea']['id']), array(), __('Estas seguro de eliminar a # %s?', $grupolinea['Grupolinea']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Crear Grupolinea'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listado Lineas'), array('controller' => 'lineas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Linea'), array('controller' => 'lineas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Grupos'), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Grupo'), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
	</ul>
</div>
