<div class="estados form">
<?php echo $this->Form->create('Estado'); ?>
	<fieldset>
		<legend><?php echo __('Editar Estado'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Aceptar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Estado.id')), array(), __('Estas seguro de eliminar # %s?', $this->Form->value('Estado.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listado De  Estados'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listado De Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
