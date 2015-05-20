<div class="investigadors form">
<?php echo $this->Form->create('Investigador'); ?>
	<fieldset>
		<legend><?php echo __('Editar Investigador'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('cedula');
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellido');
		echo $this->Form->input('correo');
		echo $this->Form->input('telefono');
		echo $this->Form->input('usuario_id');
		echo $this->Form->input('programa_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Aceptar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Investigador.id')), array(), __('Estas seguro de eliminar a # %s?', $this->Form->value('Investigador.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listado Investigadores'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listado Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Programas'), array('controller' => 'programas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Programa'), array('controller' => 'programas', 'action' => 'add')); ?> </li>
	</ul>
</div>
