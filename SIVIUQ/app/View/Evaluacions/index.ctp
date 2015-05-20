<div class="evaluacions index">
	<h2><?php echo __('Evaluacions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('fechaEnvio'); ?></th>
			<th><?php echo $this->Paginator->sort('fechaEntrega'); ?></th>
			<th><?php echo $this->Paginator->sort('concepto'); ?></th>
			<th><?php echo $this->Paginator->sort('observaciones'); ?></th>
			<th><?php echo $this->Paginator->sort('calObjetivos'); ?></th>
			<th><?php echo $this->Paginator->sort('calTema'); ?></th>
			<th><?php echo $this->Paginator->sort('calPlanteamiento'); ?></th>
			<th><?php echo $this->Paginator->sort('calCronograma'); ?></th>
			<th><?php echo $this->Paginator->sort('calPresupuesto'); ?></th>
			<th><?php echo $this->Paginator->sort('calTotal'); ?></th>
			<th><?php echo $this->Paginator->sort('fechaCorreccion'); ?></th>
			<th><?php echo $this->Paginator->sort('proyecto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('revision_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('resgitradoPor'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($evaluacions as $evaluacion): ?>
	<tr>
		<td><?php echo h($evaluacion['Evaluacion']['id']); ?>&nbsp;</td>
		<td><?php echo h($evaluacion['Evaluacion']['fechaEnvio']); ?>&nbsp;</td>
		<td><?php echo h($evaluacion['Evaluacion']['fechaEntrega']); ?>&nbsp;</td>
		<td><?php echo h($evaluacion['Evaluacion']['concepto']); ?>&nbsp;</td>
		<td><?php echo h($evaluacion['Evaluacion']['observaciones']); ?>&nbsp;</td>
		<td><?php echo h($evaluacion['Evaluacion']['calObjetivos']); ?>&nbsp;</td>
		<td><?php echo h($evaluacion['Evaluacion']['calTema']); ?>&nbsp;</td>
		<td><?php echo h($evaluacion['Evaluacion']['calPlanteamiento']); ?>&nbsp;</td>
		<td><?php echo h($evaluacion['Evaluacion']['calCronograma']); ?>&nbsp;</td>
		<td><?php echo h($evaluacion['Evaluacion']['calPresupuesto']); ?>&nbsp;</td>
		<td><?php echo h($evaluacion['Evaluacion']['calTotal']); ?>&nbsp;</td>
		<td><?php echo h($evaluacion['Evaluacion']['fechaCorreccion']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($evaluacion['Proyecto']['id'], array('controller' => 'proyectos', 'action' => 'view', $evaluacion['Proyecto']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($evaluacion['Revision']['id'], array('controller' => 'revisions', 'action' => 'view', $evaluacion['Revision']['id'])); ?>
		</td>
		<td><?php echo h($evaluacion['Evaluacion']['created']); ?>&nbsp;</td>
		<td><?php echo h($evaluacion['Evaluacion']['resgitradoPor']); ?>&nbsp;</td>
		<td><?php echo h($evaluacion['Evaluacion']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $evaluacion['Evaluacion']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $evaluacion['Evaluacion']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $evaluacion['Evaluacion']['id']), array(), __('Are you sure you want to delete # %s?', $evaluacion['Evaluacion']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Evaluacion'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Revisions'), array('controller' => 'revisions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Revision'), array('controller' => 'revisions', 'action' => 'add')); ?> </li>
	</ul>
</div>
