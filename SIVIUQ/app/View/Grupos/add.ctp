<div class="grupos form">
<?php echo $this->Form->create('Grupo'); ?>
	<fieldset>
		<legend><?php echo __('Crear Grupo'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('registradoPor');
		echo $this->Form->input('email');
		echo $this->Form->input('categoria');
		echo $this->Form->input('programa_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Aceptar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listado Grupos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listado Programas'), array('controller' => 'programas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Programa'), array('controller' => 'programas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Grupoinves'), array('controller' => 'grupoinves', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Grupoinves'), array('controller' => 'grupoinves', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Grupolineas'), array('controller' => 'grupolineas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Grupolinea'), array('controller' => 'grupolineas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
