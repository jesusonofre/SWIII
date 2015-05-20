<div class="revisions index">
	<h2><?php echo __('Revisiones'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('observaciones'); ?></th>
			<th><?php echo $this->Paginator->sort('numActa'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th><?php echo $this->Paginator->sort('concepto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($revisions as $revision): ?>
	<tr>
		<td><?php echo h($revision['Revision']['id']); ?>&nbsp;</td>
		<td><?php echo h($revision['Revision']['observaciones']); ?>&nbsp;</td>
		<td><?php echo h($revision['Revision']['numActa']); ?>&nbsp;</td>
		<td><?php echo h($revision['Revision']['fecha']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($revision['Concepto']['id'], array('controller' => 'conceptos', 'action' => 'view', $revision['Concepto']['id'])); ?>
		</td>
		<td><?php echo h($revision['Revision']['created']); ?>&nbsp;</td>
		<td><?php echo h($revision['Revision']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Informacion'), array('action' => 'view', $revision['Revision']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $revision['Revision']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $revision['Revision']['id']), array(), __('Estas seguro de eliminar a # %s?', $revision['Revision']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Crear Revision'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listado Conceptos'), array('controller' => 'conceptos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Concepto'), array('controller' => 'conceptos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Evaluaciones'), array('controller' => 'evaluacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Evaluacion'), array('controller' => 'evaluacions', 'action' => 'add')); ?> </li>
	</ul>
</div>
