<div class="publicacions form">
<?php echo $this->Form->create('Publicacion'); ?>
	<fieldset>
		<legend><?php echo __('Editar Publicacion'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('titulo');
		echo $this->Form->input('fecha');
		echo $this->Form->input('link');
		echo $this->Form->input('revista');
		echo $this->Form->input('proyecto_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Aceptar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Publicacion.id')), array(), __('Estas seguro de eliminar a # %s?', $this->Form->value('Publicacion.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listado Publicaciones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listado Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
