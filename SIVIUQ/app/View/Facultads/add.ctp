<div class="facultads form">
<?php echo $this->Form->create('Facultad'); ?>
	<fieldset>
		<legend><?php echo __('Crear Facultad'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('email');
		echo $this->Form->input('decano');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Aceptar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listado  De Facultades'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listado De  Programas'), array('controller' => 'programas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Programa'), array('controller' => 'programas', 'action' => 'add')); ?> </li>
	</ul>
</div>
