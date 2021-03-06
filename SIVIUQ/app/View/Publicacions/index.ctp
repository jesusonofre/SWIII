<div class="publicacions index">
	<h2><?php echo __('Publicaciones'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th><?php echo $this->Paginator->sort('link'); ?></th>
			<th><?php echo $this->Paginator->sort('revista'); ?></th>
			<th><?php echo $this->Paginator->sort('proyecto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($publicacions as $publicacion): ?>
	<tr>
		<td><?php echo h($publicacion['Publicacion']['id']); ?>&nbsp;</td>
		<td><?php echo h($publicacion['Publicacion']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($publicacion['Publicacion']['fecha']); ?>&nbsp;</td>
		<td><?php echo h($publicacion['Publicacion']['link']); ?>&nbsp;</td>
		<td><?php echo h($publicacion['Publicacion']['revista']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($publicacion['Proyecto']['id'], array('controller' => 'proyectos', 'action' => 'view', $publicacion['Proyecto']['id'])); ?>
		</td>
		<td><?php echo h($publicacion['Publicacion']['created']); ?>&nbsp;</td>
		<td><?php echo h($publicacion['Publicacion']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $publicacion['Publicacion']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $publicacion['Publicacion']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $publicacion['Publicacion']['id']), array(), __('Estas seguro de eliminar a # %s?', $publicacion['Publicacion']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Crear Publicacion'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listado Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
