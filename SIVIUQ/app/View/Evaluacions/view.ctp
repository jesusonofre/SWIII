<div class="evaluacions view">
<h2><?php echo __('Evaluacion'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FechaEnvio'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['fechaEnvio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FechaEntrega'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['fechaEntrega']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Concepto'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['concepto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observaciones'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['observaciones']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CalObjetivos'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['calObjetivos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CalTema'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['calTema']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CalPlanteamiento'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['calPlanteamiento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CalCronograma'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['calCronograma']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CalPresupuesto'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['calPresupuesto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CalTotal'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['calTotal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FechaCorreccion'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['fechaCorreccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Proyecto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($evaluacion['Proyecto']['id'], array('controller' => 'proyectos', 'action' => 'view', $evaluacion['Proyecto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Revision'); ?></dt>
		<dd>
			<?php echo $this->Html->link($evaluacion['Revision']['id'], array('controller' => 'revisions', 'action' => 'view', $evaluacion['Revision']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ResgitradoPor'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['resgitradoPor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Evaluacion'), array('action' => 'edit', $evaluacion['Evaluacion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Evaluacion'), array('action' => 'delete', $evaluacion['Evaluacion']['id']), array(), __('Are you sure you want to delete # %s?', $evaluacion['Evaluacion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Evaluacions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluacion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Revisions'), array('controller' => 'revisions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Revision'), array('controller' => 'revisions', 'action' => 'add')); ?> </li>
	</ul>
</div>
