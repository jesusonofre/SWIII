<div class="proyectos index">
	<h2><?php echo __('Proyectos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('resumen'); ?></th>
			<th><?php echo $this->Paginator->sort('objetivos'); ?></th>
			<th><?php echo $this->Paginator->sort('resultados'); ?></th>
			<th><?php echo $this->Paginator->sort('fechaInscripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('duracion'); ?></th>
			<th><?php echo $this->Paginator->sort('lugarEjecucion'); ?></th>
			<th><?php echo $this->Paginator->sort('ciudad'); ?></th>
			<th><?php echo $this->Paginator->sort('estado_id'); ?></th>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('prorroga'); ?></th>
			<th><?php echo $this->Paginator->sort('datos'); ?></th>
			<th><?php echo $this->Paginator->sort('cronograma'); ?></th>
			<th><?php echo $this->Paginator->sort('modalidad'); ?></th>
			<th><?php echo $this->Paginator->sort('linea_id'); ?></th>
			<th><?php echo $this->Paginator->sort('grupo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('presupuesto'); ?></th>
			<th><?php echo $this->Paginator->sort('evaluador_id'); ?></th>
			<th><?php echo $this->Paginator->sort('datosNombre'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($proyectos as $proyecto): ?>
	<tr>
		<td><?php echo h($proyecto['Proyecto']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['resumen']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['objetivos']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['resultados']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['fechaInscripcion']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['duracion']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['lugarEjecucion']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['ciudad']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($proyecto['Estado']['id'], array('controller' => 'estados', 'action' => 'view', $proyecto['Estado']['id'])); ?>
		</td>
		<td><?php echo h($proyecto['Proyecto']['id']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['prorroga']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['datos']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['cronograma']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['modalidad']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($proyecto['Linea']['id'], array('controller' => 'lineas', 'action' => 'view', $proyecto['Linea']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($proyecto['Grupo']['id'], array('controller' => 'grupos', 'action' => 'view', $proyecto['Grupo']['id'])); ?>
		</td>
		<td><?php echo h($proyecto['Proyecto']['presupuesto']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($proyecto['Evaluador']['id'], array('controller' => 'evaluadors', 'action' => 'view', $proyecto['Evaluador']['id'])); ?>
		</td>
		<td><?php echo h($proyecto['Proyecto']['datosNombre']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['created']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Informacion'), array('action' => 'view', $proyecto['Proyecto']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $proyecto['Proyecto']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $proyecto['Proyecto']['id']), array(), __('Estas seguro de eliminar a # %s?', $proyecto['Proyecto']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina {:page} de {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Crear Proyecto'), array('action' => 'add')); ?></li>
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
