<div class="grupolineas form">
<?php echo $this->Form->create('Grupolinea'); ?>
	<fieldset>
		<legend><?php echo __('Crear Grupolinea'); ?></legend>
	<?php
		echo $this->Form->input('linea_id');
		echo $this->Form->input('grupo_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Aceptar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listadp Grupolineas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listadp Lineas'), array('controller' => 'lineas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Linea'), array('controller' => 'lineas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Grupos'), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Grupo'), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
	</ul>
</div>
