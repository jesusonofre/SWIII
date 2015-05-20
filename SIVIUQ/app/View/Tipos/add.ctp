<div class="tipos form">
<?php echo $this->Form->create('Tipo'); ?>
	<fieldset>
		<legend><?php echo __('Crear Tipo'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Aceptar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listado De  Tipos'), array('action' => 'index')); ?></li>
	</ul>
</div>
