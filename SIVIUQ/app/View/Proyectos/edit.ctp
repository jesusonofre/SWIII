<div class="proyectos form">
<?php echo $this->Form->create('Proyecto'); ?>
	<fieldset>
		<legend><?php echo __('Editar Proyecto'); ?></legend>
	<?php
		echo $this->Form->input('titulo');
		echo $this->Form->input('resumen');
		echo $this->Form->input('objetivos');
		echo $this->Form->input('resultados');
		echo $this->Form->input('fechaInscripcion');
		echo $this->Form->input('duracion');
		echo $this->Form->input('lugarEjecucion');
		echo $this->Form->input('ciudad');
		echo $this->Form->input('estado_id');
		echo $this->Form->input('id');
		echo $this->Form->input('prorroga');
		echo $this->Form->input('datos');
		echo $this->Form->input('cronograma');
		echo $this->Form->input('modalidad');
		echo $this->Form->input('linea_id');
		echo $this->Form->input('grupo_id');
		echo $this->Form->input('presupuesto');
		echo $this->Form->input('evaluador_id');
		echo $this->Form->input('datosNombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Aceptar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Proyecto.id')), array(), __('Estas seguro de eliminar a # %s?', $this->Form->value('Proyecto.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listado Proyectos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listado Estados'), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Estado'), array('controller' => 'estados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Lineas'), array('controller' => 'lineas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Linea'), array('controller' => 'lineas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Grupos'), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Grupo'), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Evaluadores'), array('controller' => 'evaluadors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Evaluador'), array('controller' => 'evaluadors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Evaluaciones'), array('controller' => 'evaluacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Evaluacion'), array('controller' => 'evaluacions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Proentidads'), array('controller' => 'proentidads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Proentidad'), array('controller' => 'proentidads', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Proentregas'), array('controller' => 'proentregas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Proentrega'), array('controller' => 'proentregas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Proinvestigadors'), array('controller' => 'proinvestigadors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Proinvestigador'), array('controller' => 'proinvestigadors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Publicaciones'), array('controller' => 'publicacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Publicacion'), array('controller' => 'publicacions', 'action' => 'add')); ?> </li>
	</ul>
</div>
