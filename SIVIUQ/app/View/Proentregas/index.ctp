<div class="proentregas index">
	<h2><?php echo __('Proentregas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th><?php echo $this->Paginator->sort('dosEjemplares'); ?></th>
			<th><?php echo $this->Paginator->sort('medioMagnetico'); ?></th>
			<th><?php echo $this->Paginator->sort('fichaResumen'); ?></th>
			<th><?php echo $this->Paginator->sort('adjunto'); ?></th>
			<th><?php echo $this->Paginator->sort('proyecto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($proentregas as $proentrega): ?>
	<tr>
		<td><?php echo h($proentrega['Proentrega']['id']); ?>&nbsp;</td>
		<td><?php echo h($proentrega['Proentrega']['fecha']); ?>&nbsp;</td>
		<td><?php echo h($proentrega['Proentrega']['dosEjemplares']); ?>&nbsp;</td>
		<td><?php echo h($proentrega['Proentrega']['medioMagnetico']); ?>&nbsp;</td>
		<td><?php echo h($proentrega['Proentrega']['fichaResumen']); ?>&nbsp;</td>
		<td><?php echo h($proentrega['Proentrega']['adjunto']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($proentrega['Proyecto']['id'], array('controller' => 'proyectos', 'action' => 'view', $proentrega['Proyecto']['id'])); ?>
		</td>
		<td><?php echo h($proentrega['Proentrega']['created']); ?>&nbsp;</td>
		<td><?php echo h($proentrega['Proentrega']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $proentrega['Proentrega']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $proentrega['Proentrega']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $proentrega['Proentrega']['id']), array(), __('Estas seguro de eliminar a # %s?', $proentrega['Proentrega']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Crear Proentrega'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listado Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
