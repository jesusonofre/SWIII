<div class="evaluacions form">
<?php echo $this->Form->create('Evaluacion'); ?>
	<fieldset>
		<legend><?php echo __('Add Evaluacion'); ?></legend>
	<?php
		echo $this->Form->input('fechaEnvio');
		echo $this->Form->input('fechaEntrega');
		echo $this->Form->input('concepto');
		echo $this->Form->input('observaciones');
		echo $this->Form->input('calObjetivos');
		echo $this->Form->input('calTema');
		echo $this->Form->input('calPlanteamiento');
		echo $this->Form->input('calCronograma');
		echo $this->Form->input('calPresupuesto');
		echo $this->Form->input('calTotal');
		echo $this->Form->input('fechaCorreccion');
		echo $this->Form->input('proyecto_id');
		echo $this->Form->input('revision_id');
		echo $this->Form->input('resgitradoPor');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Evaluacions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Revisions'), array('controller' => 'revisions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Revision'), array('controller' => 'revisions', 'action' => 'add')); ?> </li>
	</ul>
</div>
