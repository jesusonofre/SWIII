<div class="evaluadors view">
<h2><?php echo __('Evaluador'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($evaluador['Evaluador']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($evaluador['Evaluador']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido'); ?></dt>
		<dd>
			<?php echo h($evaluador['Evaluador']['apellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($evaluador['Evaluador']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Especializacion'); ?></dt>
		<dd>
			<?php echo h($evaluador['Evaluador']['especializacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Universidad'); ?></dt>
		<dd>
			<?php echo h($evaluador['Evaluador']['universidad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($evaluador['Evaluador']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($evaluador['Evaluador']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($evaluador['Evaluador']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creado'); ?></dt>
		<dd>
			<?php echo h($evaluador['Evaluador']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificado'); ?></dt>
		<dd>
			<?php echo h($evaluador['Evaluador']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Evaluador'), array('action' => 'edit', $evaluador['Evaluador']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Evaluador'), array('action' => 'delete', $evaluador['Evaluador']['id']), array(), __('Estas seguro de eliminar a # %s?', $evaluador['Evaluador']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Evaluadores'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Evaluador'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Evaluaciones'), array('controller' => 'evaluacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Evaluacion'), array('controller' => 'evaluacions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Evaluacions'); ?></h3>
	<?php if (!empty($evaluador['Evaluacion'])): ?>
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
	<?php foreach ($evaluador['Evaluacion'] as $evaluacion): ?>
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
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'evaluacions', 'action' => 'view', $evaluacion['id'])); ?>
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
