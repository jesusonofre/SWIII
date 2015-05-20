<div class="convocatorias form">
<?php echo $this->Form->create('Convocatoria'); ?>
	<fieldset>
		<legend><?php echo __('Crear Convocatoria'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('fechaInicio');
		echo $this->Form->input('fechaFin');
		echo $this->Form->input('registradoPor');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Aceptar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listado Convocatorias'), array('action' => 'index')); ?></li>
	</ul>
</div>
