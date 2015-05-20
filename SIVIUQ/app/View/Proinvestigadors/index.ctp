<div class="proinvestigadors index">
	<h2><?php echo __('Proinvestigadors'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('proyecto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('investigador_id'); ?></th>
			<th><?php echo $this->Paginator->sort('horasTrabajadas'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($proinvestigadors as $proinvestigador): ?>
	<tr>
		<td><?php echo h($proinvestigador['Proinvestigador']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($proinvestigador['Proyecto']['id'], array('controller' => 'proyectos', 'action' => 'view', $proinvestigador['Proyecto']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($proinvestigador['Investigador']['id'], array('controller' => 'investigadors', 'action' => 'view', $proinvestigador['Investigador']['id'])); ?>
		</td>
		<td><?php echo h($proinvestigador['Proinvestigador']['horasTrabajadas']); ?>&nbsp;</td>
		<td><?php echo h($proinvestigador['Proinvestigador']['created']); ?>&nbsp;</td>
		<td><?php echo h($proinvestigador['Proinvestigador']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $proinvestigador['Proinvestigador']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $proinvestigador['Proinvestigador']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $proinvestigador['Proinvestigador']['id']), array(), __('Are you sure you want to delete # %s?', $proinvestigador['Proinvestigador']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Proinvestigador'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Investigadors'), array('controller' => 'investigadors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Investigador'), array('controller' => 'investigadors', 'action' => 'add')); ?> </li>
	</ul>
</div>
