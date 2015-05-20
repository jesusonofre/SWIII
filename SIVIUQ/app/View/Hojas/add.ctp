<div class="hojas form">
<?php echo $this->Form->create('Hoja'); ?>
	<fieldset>
		<legend><?php echo __('Add Hoja'); ?></legend>
	<?php
		echo $this->Form->input('fechaNacimiento');
		echo $this->Form->input('ciudadNacimiento');
		echo $this->Form->input('deptoNacimiento');
		echo $this->Form->input('direccion');
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Hojas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Educacions'), array('controller' => 'educacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Educacion'), array('controller' => 'educacions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
