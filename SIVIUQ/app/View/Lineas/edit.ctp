<div class="lineas form">
<?php echo $this->Form->create('Linea'); ?>
	<fieldset>
		<legend><?php echo __('Editar Linea Investigacion '); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('registradoPor');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Aceptar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Linea.id')), array(), __('Estas seguro de eliminar a # %s?', $this->Form->value('Linea.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listado Lineas'), array('action' => 'index')); ?></li>
	</ul>
</div>
