<div class="facultads form">
<?php echo $this->Form->create('Facultad'); ?>
	<fieldset>
		<legend><?php echo __('Editar Facultad'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Facultad.id')), array(), __('Estas seguro de eliminar ae # %s?', $this->Form->value('Facultad.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listado Facultades'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listado Programas'), array('controller' => 'programas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Programa'), array('controller' => 'programas', 'action' => 'add')); ?> </li>
	</ul>
</div>
