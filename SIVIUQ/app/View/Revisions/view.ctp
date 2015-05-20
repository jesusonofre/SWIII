<div class="revisions view">
<h2><?php echo __('Revision'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($revision['Revision']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observaciones'); ?></dt>
		<dd>
			<?php echo h($revision['Revision']['observaciones']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NumActa'); ?></dt>
		<dd>
			<?php echo h($revision['Revision']['numActa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($revision['Revision']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Concepto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($revision['Concepto']['id'], array('controller' => 'conceptos', 'action' => 'view', $revision['Concepto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creacion'); ?></dt>
		<dd>
			<?php echo h($revision['Revision']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificacion'); ?></dt>
		<dd>
			<?php echo h($revision['Revision']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Revision'), array('action' => 'edit', $revision['Revision']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Revision'), array('action' => 'delete', $revision['Revision']['id']), array(), __('Estas seguro de eliminar a # %s?', $revision['Revision']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Revisiones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Revision'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Conceptos'), array('controller' => 'conceptos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Concepto'), array('controller' => 'conceptos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Evaluaciones'), array('controller' => 'evaluacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Evaluacion'), array('controller' => 'evaluacions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Evaluaciones'); ?></h3>
	<?php if (!empty($revision['Evaluacion'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('FechaEnvio'); ?></th>
		<th><?php echo __('FechaEntrega'); ?></th>
		<th><?php echo __('Concepto'); ?></th>
		<th><?php echo __('Observaciones'); ?></th>
		<th><?php echo __('CalObjetivos'); ?></th>
		<th><?php echo __('CalTema'); ?></th>
		<th><?php echo __('CalPlanteamiento'); ?></th>
		<th><?php echo __('CalCronograma'); ?></th>
		<th><?php echo __('CalPresupuesto'); ?></th>
		<th><?php echo __('CalTotal'); ?></th>
		<th><?php echo __('FechaCorreccion'); ?></th>
		<th><?php echo __('Proyecto Id'); ?></th>
		<th><?php echo __('Revision Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('ResgitradoPor'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($revision['Evaluacion'] as $evaluacion): ?>
		<tr>
			<td><?php echo $evaluacion['id']; ?></td>
			<td><?php echo $evaluacion['fechaEnvio']; ?></td>
			<td><?php echo $evaluacion['fechaEntrega']; ?></td>
			<td><?php echo $evaluacion['concepto']; ?></td>
			<td><?php echo $evaluacion['observaciones']; ?></td>
			<td><?php echo $evaluacion['calObjetivos']; ?></td>
			<td><?php echo $evaluacion['calTema']; ?></td>
			<td><?php echo $evaluacion['calPlanteamiento']; ?></td>
			<td><?php echo $evaluacion['calCronograma']; ?></td>
			<td><?php echo $evaluacion['calPresupuesto']; ?></td>
			<td><?php echo $evaluacion['calTotal']; ?></td>
			<td><?php echo $evaluacion['fechaCorreccion']; ?></td>
			<td><?php echo $evaluacion['proyecto_id']; ?></td>
			<td><?php echo $evaluacion['revision_id']; ?></td>
			<td><?php echo $evaluacion['created']; ?></td>
			<td><?php echo $evaluacion['resgitradoPor']; ?></td>
			<td><?php echo $evaluacion['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Informacion'), array('controller' => 'evaluacions', 'action' => 'view', $evaluacion['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'evaluacions', 'action' => 'edit', $evaluacion['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'evaluacions', 'action' => 'delete', $evaluacion['id']), array(), __('Estas seguro de eliminar a # %s?', $evaluacion['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Crear Evaluacion'), array('controller' => 'evaluacions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
