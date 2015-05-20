<div class="proentregas form">
<?php echo $this->Form->create('Proentrega'); ?>
	<fieldset>
		<legend><?php echo __('Editar Proentrega'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('fecha');
		echo $this->Form->input('dosEjemplares');
		echo $this->Form->input('medioMagnetico');
		echo $this->Form->input('fichaResumen');
		echo $this->Form->input('adjunto');
		echo $this->Form->input('proyecto_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Aceptar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Proentrega.id')), array(), __('Estas seguro de eliminar a # %s?', $this->Form->value('Proentrega.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listado Proentregas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listado  Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
