<div class="entidads form">
<?php echo $this->Form->create('Entidad'); ?>
	<fieldset>
		<legend><?php echo __('Editar Entidad Financiera'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('registradoPor');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Entidad.id')), array(), __('Estas Seguro de Eliminar # %s?', $this->Form->value('Entidad.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listado Entidades'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listadp Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
