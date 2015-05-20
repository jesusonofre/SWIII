<div class="evaluadors form">
<?php echo $this->Form->create('Evaluador'); ?>
	<fieldset>
		<legend><?php echo __('Editar Evaluador'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellido');
		echo $this->Form->input('titulo');
		echo $this->Form->input('especializacion');
		echo $this->Form->input('universidad');
		echo $this->Form->input('telefono');
		echo $this->Form->input('email');
		echo $this->Form->input('direccion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Aceptar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Evaluador.id')), array(), __('Estas seguro de eliminar a # %s?', $this->Form->value('Evaluador.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listado Evaluadores'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listado Evaluaciones'), array('controller' => 'evaluacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Evaluacion'), array('controller' => 'evaluacions', 'action' => 'add')); ?> </li>
	</ul>
</div>
