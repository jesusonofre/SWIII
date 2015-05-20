<div class="educacions form">
<?php echo $this->Form->create('Educacion'); ?>
	<fieldset>
		<legend><?php echo __('Editar Educacion'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('titulo');
		echo $this->Form->input('institucion');
		echo $this->Form->input('ciudad');
		echo $this->Form->input('fecha');
		echo $this->Form->input('hoja_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Aceptar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Educacion.id')), array(), __('Estas seguro de eliminar a # %s?', $this->Form->value('Educacion.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listado Educacioness'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listado Hojas De Vida'), array('controller' => 'hojas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Hoja De Vida '), array('controller' => 'hojas', 'action' => 'add')); ?> </li>
	</ul>
</div>
