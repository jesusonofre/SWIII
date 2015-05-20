<div class="grupos view">
<h2><?php echo __('Grupo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($grupo['Grupo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($grupo['Grupo']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registrado Por'); ?></dt>
		<dd>
			<?php echo h($grupo['Grupo']['registradoPor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($grupo['Grupo']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoria'); ?></dt>
		<dd>
			<?php echo h($grupo['Grupo']['categoria']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Programa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($grupo['Programa']['id'], array('controller' => 'programas', 'action' => 'view', $grupo['Programa']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creacion'); ?></dt>
		<dd>
			<?php echo h($grupo['Grupo']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificacion'); ?></dt>
		<dd>
			<?php echo h($grupo['Grupo']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Grupo'), array('action' => 'edit', $grupo['Grupo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Grupo'), array('action' => 'delete', $grupo['Grupo']['id']), array(), __('Estas seguro de eliminar a# %s?', $grupo['Grupo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Grupos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Grupo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Programas'), array('controller' => 'programas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Programa'), array('controller' => 'programas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Grupoinves'), array('controller' => 'grupoinves', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Grupoinve'), array('controller' => 'grupoinves', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Grupolineas'), array('controller' => 'grupolineas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Grupolinea'), array('controller' => 'grupolineas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __(' Grupoinves'); ?></h3>
	<?php if (!empty($grupo['Grupoinfe'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Invesigador Id'); ?></th>
		<th><?php echo __('Grupo Id'); ?></th>
		<th><?php echo __('Representante'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($grupo['Grupoinfe'] as $grupoinfe): ?>
		<tr>
			<td><?php echo $grupoinfe['id']; ?></td>
			<td><?php echo $grupoinfe['invesigador_id']; ?></td>
			<td><?php echo $grupoinfe['grupo_id']; ?></td>
			<td><?php echo $grupoinfe['Representante']; ?></td>
			<td><?php echo $grupoinfe['created']; ?></td>
			<td><?php echo $grupoinfe['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'grupoinves', 'action' => 'view', $grupoinfe['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'grupoinves', 'action' => 'edit', $grupoinfe['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'grupoinves', 'action' => 'delete', $grupoinfe['id']), array(), __('Estas seguro de eliminar a # %s?', $grupoinfe['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Crear Grupoinvest'), array('controller' => 'grupoinves', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __(' Grupolineas'); ?></h3>
	<?php if (!empty($grupo['Grupolinea'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Linea Id'); ?></th>
		<th><?php echo __('Grupo Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($grupo['Grupolinea'] as $grupolinea): ?>
		<tr>
			<td><?php echo $grupolinea['id']; ?></td>
			<td><?php echo $grupolinea['linea_id']; ?></td>
			<td><?php echo $grupolinea['grupo_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'grupolineas', 'action' => 'view', $grupolinea['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'grupolineas', 'action' => 'edit', $grupolinea['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'grupolineas', 'action' => 'delete', $grupolinea['id']), array(), __('Estas seguro de eliminar a# %s?', $grupolinea['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Crear Grupolinea'), array('controller' => 'grupolineas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __(' Proyectos'); ?></h3>
	<?php if (!empty($grupo['Proyecto'])): ?>
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
	<?php foreach ($grupo['Proyecto'] as $proyecto): ?>
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
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'proyectos', 'action' => 'delete', $proyecto['id']), array(), __('Are you sure you want to delete # %s?', $proyecto['id'])); ?>
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
