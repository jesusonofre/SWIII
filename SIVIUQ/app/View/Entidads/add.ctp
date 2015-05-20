<div class="entidads form">
<?php echo $this->Form->create('Entidad'); ?>
	<fieldset>
		<legend><?php echo __('Crear Entidad Financiera'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('registradoPor');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Aceptar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listado Entidades'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listado Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
