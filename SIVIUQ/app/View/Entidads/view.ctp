<div class="entidads view">
<h2><?php echo __('Entidad Financiera'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($entidad['Entidad']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($entidad['Entidad']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registrado Por'); ?></dt>
		<dd>
			<?php echo h($entidad['Entidad']['registradoPor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creado'); ?></dt>
		<dd>
			<?php echo h($entidad['Entidad']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificado'); ?></dt>
		<dd>
			<?php echo h($entidad['Entidad']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Entidad'), array('action' => 'edit', $entidad['Entidad']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Entidad'), array('action' => 'delete', $entidad['Entidad']['id']), array(), __('Estas Seguro de Eliminar a # %s?', $entidad['Entidad']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Entidades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Entidad'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __(' Proyectos Financiados'); ?></h3>
	<?php if (!empty($entidad['Proyecto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Resumen'); ?></th>
		<th><?php echo __('Objetivos'); ?></th>
		<th><?php echo __('Resultados'); ?></th>
		<th><?php echo __('FechaInscripcion'); ?></th>
		<th><?php echo __('Duracion'); ?></th>
		<th><?php echo __('LugarEjecucion'); ?></th>
		<th><?php echo __('Ciudad'); ?></th>
		<th><?php echo __('Esta Id'); ?></th>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Prorroga'); ?></th>
		<th><?php echo __('Datos'); ?></th>
		<th><?php echo __('Cronograma'); ?></th>
		<th><?php echo __('Modalidad'); ?></th>
		<th><?php echo __('Linea Id'); ?></th>
		<th><?php echo __('Grupo Id'); ?></th>
		<th><?php echo __('Presupuesto'); ?></th>
		<th><?php echo __('Evaluacion Id'); ?></th>
		<th><?php echo __('DatosNombre'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($entidad['Proyecto'] as $proyecto): ?>
		<tr>
			<td><?php echo $proyecto['titulo']; ?></td>
			<td><?php echo $proyecto['resumen']; ?></td>
			<td><?php echo $proyecto['objetivos']; ?></td>
			<td><?php echo $proyecto['resultados']; ?></td>
			<td><?php echo $proyecto['fechaInscripcion']; ?></td>
			<td><?php echo $proyecto['duracion']; ?></td>
			<td><?php echo $proyecto['lugarEjecucion']; ?></td>
			<td><?php echo $proyecto['ciudad']; ?></td>
			<td><?php echo $proyecto['esta_id']; ?></td>
			<td><?php echo $proyecto['id']; ?></td>
			<td><?php echo $proyecto['prorroga']; ?></td>
			<td><?php echo $proyecto['datos']; ?></td>
			<td><?php echo $proyecto['cronograma']; ?></td>
			<td><?php echo $proyecto['modalidad']; ?></td>
			<td><?php echo $proyecto['linea_id']; ?></td>
			<td><?php echo $proyecto['grupo_id']; ?></td>
			<td><?php echo $proyecto['presupuesto']; ?></td>
			<td><?php echo $proyecto['evaluacion_id']; ?></td>
			<td><?php echo $proyecto['datosNombre']; ?></td>
			<td><?php echo $proyecto['created']; ?></td>
			<td><?php echo $proyecto['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Detalle'), array('controller' => 'proyectos', 'action' => 'view', $proyecto['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'proyectos', 'action' => 'edit', $proyecto['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'proyectos', 'action' => 'delete', $proyecto['id']), array(), __('Estas seguro de Eliminar a# %s?', $proyecto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Crear Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
