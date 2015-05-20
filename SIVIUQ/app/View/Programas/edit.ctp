<div class="programas form">
<?php echo $this->Form->create('Programa'); ?>
	<fieldset>
		<legend><?php echo __('Editar Programa'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('director');
		echo $this->Form->input('iniciales');
		echo $this->Form->input('facultad_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Aceptar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Programa.id')), array(), __('Estas seguro de eliminar a # %s?', $this->Form->value('Programa.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listado Programas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listado Facultads'), array('controller' => 'facultads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Facultad'), array('controller' => 'facultads', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Grupos'), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Grupo'), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Investigadores'), array('controller' => 'investigadors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Investigador'), array('controller' => 'investigadors', 'action' => 'add')); ?> </li>
	</ul>
</div>
