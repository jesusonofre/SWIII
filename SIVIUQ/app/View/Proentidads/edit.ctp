<div class="proentidads form">
<?php echo $this->Form->create('Proentidad'); ?>
	<fieldset>
		<legend><?php echo __('Editar Proentidad'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('aporte');
		echo $this->Form->input('proyecto_id');
		echo $this->Form->input('entidad_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Aceptar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Proentidad.id')), array(), __('Estas seguro de eliminar a # %s?', $this->Form->value('Proentidad.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listado Proentidads'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listado Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Entidads'), array('controller' => 'entidads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Entidad'), array('controller' => 'entidads', 'action' => 'add')); ?> </li>
	</ul>
</div>
