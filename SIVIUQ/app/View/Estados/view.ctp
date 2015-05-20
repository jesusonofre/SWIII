<div class="estados view">
<h2><?php echo __('Estado'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($estado['Estado']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($estado['Estado']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creado'); ?></dt>
		<dd>
			<?php echo h($estado['Estado']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificado'); ?></dt>
		<dd>
			<?php echo h($estado['Estado']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Estado'), array('action' => 'edit', $estado['Estado']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Estado'), array('action' => 'delete', $estado['Estado']['id']), array(), __('Estas seguro de eliminar a # %s?', $estado['Estado']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Estados'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Estado'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __(' Proyectos'); ?></h3>
	<?php if (!empty($estado['Proyecto'])): ?>
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
		<th><?php echo __('Estado Id'); ?></th>
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
	<?php foreach ($estado['Proyecto'] as $proyecto): ?>
		<tr>
			<td><?php echo $proyecto['titulo']; ?></td>
			<td><?php echo $proyecto['resumen']; ?></td>
			<td><?php echo $proyecto['objetivos']; ?></td>
			<td><?php echo $proyecto['resultados']; ?></td>
			<td><?php echo $proyecto['fechaInscripcion']; ?></td>
			<td><?php echo $proyecto['duracion']; ?></td>
			<td><?php echo $proyecto['lugarEjecucion']; ?></td>
			<td><?php echo $proyecto['ciudad']; ?></td>
			<td><?php echo $proyecto['estado_id']; ?></td>
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
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'proyectos', 'action' => 'view', $proyecto['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'proyectos', 'action' => 'edit', $proyecto['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'proyectos', 'action' => 'delete', $proyecto['id']), array(), __('Estas seguro de eliminar a # %s?', $proyecto['id'])); ?>
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
