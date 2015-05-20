<div class="programas index">
	<h2><?php echo __('Programas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('director'); ?></th>
			<th><?php echo $this->Paginator->sort('iniciales'); ?></th>
			<th><?php echo $this->Paginator->sort('facultad_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($programas as $programa): ?>
	<tr>
		<td><?php echo h($programa['Programa']['id']); ?>&nbsp;</td>
		<td><?php echo h($programa['Programa']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($programa['Programa']['director']); ?>&nbsp;</td>
		<td><?php echo h($programa['Programa']['iniciales']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($programa['Facultad']['id'], array('controller' => 'facultads', 'action' => 'view', $programa['Facultad']['id'])); ?>
		</td>
		<td><?php echo h($programa['Programa']['created']); ?>&nbsp;</td>
		<td><?php echo h($programa['Programa']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $programa['Programa']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $programa['Programa']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $programa['Programa']['id']), array(), __('Estas seguro de eliminar a # %s?', $programa['Programa']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Programa'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Facultads'), array('controller' => 'facultads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Facultad'), array('controller' => 'facultads', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupos'), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo'), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Investigadors'), array('controller' => 'investigadors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Investigador'), array('controller' => 'investigadors', 'action' => 'add')); ?> </li>
	</ul>
</div>
