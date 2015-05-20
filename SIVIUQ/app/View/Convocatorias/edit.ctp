<div class="convocatorias form">
<?php echo $this->Form->create('Convocatoria'); ?>
	<fieldset>
		<legend><?php echo __('Editar Convocatoria'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Convocatoria.id')), array(), __('Estas seguro de eliminar a # %s?', $this->Form->value('Convocatoria.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listado Convocatorias'), array('action' => 'index')); ?></li>
	</ul>
</div>
