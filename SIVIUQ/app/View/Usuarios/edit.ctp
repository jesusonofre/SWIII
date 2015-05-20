<div class="usuarios form">
<?php echo $this->Form->create('Usuario'); ?>
	<fieldset>
		<legend><?php echo __('Editar Usuario'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellido');
		echo $this->Form->input('login');
		echo $this->Form->input('password');
		echo $this->Form->input('tipo');
		echo $this->Form->input('hoja_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Aceptar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Usuario.id')), array(), __('Estas seguro de eliminar a # %s?', $this->Form->value('Usuario.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listado Usuarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listado Hojas'), array('controller' => 'hojas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Hoja'), array('controller' => 'hojas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Investigadores'), array('controller' => 'investigadors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Investigador'), array('controller' => 'investigadors', 'action' => 'add')); ?> </li>
	</ul>
</div>
