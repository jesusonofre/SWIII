<div class="lineas form">
<?php echo $this->Form->create('Linea'); ?>
	<fieldset>
		<legend><?php echo __('Crear Linea Investigacion '); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('registradoPor');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Aceptar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listado Lineas'), array('action' => 'index')); ?></li>
	</ul>
</div>
