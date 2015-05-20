<div class="proinvestigadors form">
<?php echo $this->Form->create('Proinvestigador'); ?>
	<fieldset>
		<legend><?php echo __('Edit Proinvestigador'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('proyecto_id');
		echo $this->Form->input('investigador_id');
		echo $this->Form->input('horasTrabajadas');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Proinvestigador.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Proinvestigador.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Proinvestigadors'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Investigadors'), array('controller' => 'investigadors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Investigador'), array('controller' => 'investigadors', 'action' => 'add')); ?> </li>
	</ul>
</div>
