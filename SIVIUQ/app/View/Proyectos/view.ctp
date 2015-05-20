<div class="proyectos view">
<h2><?php echo __('Proyecto'); ?></h2>
	<dl>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resumen'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['resumen']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Objetivos'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['objetivos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resultados'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['resultados']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FechaInscripcion'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['fechaInscripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Duracion'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['duracion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LugarEjecucion'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['lugarEjecucion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ciudad'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['ciudad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo $this->Html->link($proyecto['Estado']['id'], array('controller' => 'estados', 'action' => 'view', $proyecto['Estado']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prorroga'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['prorroga']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datos'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['datos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cronograma'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['cronograma']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modalidad'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['modalidad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Linea'); ?></dt>
		<dd>
			<?php echo $this->Html->link($proyecto['Linea']['id'], array('controller' => 'lineas', 'action' => 'view', $proyecto['Linea']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grupo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($proyecto['Grupo']['id'], array('controller' => 'grupos', 'action' => 'view', $proyecto['Grupo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Presupuesto'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['presupuesto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Evaluador'); ?></dt>
		<dd>
			<?php echo $this->Html->link($proyecto['Evaluador']['id'], array('controller' => 'evaluadors', 'action' => 'view', $proyecto['Evaluador']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DatosNombre'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['datosNombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creacion'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificacion'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Proyecto'), array('action' => 'edit', $proyecto['Proyecto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Proyecto'), array('action' => 'delete', $proyecto['Proyecto']['id']), array(), __('Estas seguro de eliminar a # %s?', $proyecto['Proyecto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Proyectos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Proyecto'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __(' Evaluaciones'); ?></h3>
	<?php if (!empty($proyecto['Evaluacion'])): ?>
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
	<?php foreach ($proyecto['Evaluacion'] as $evaluacion): ?>
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
				<?php echo $this->Html->link(__('Detalle'), array('controller' => 'evaluacions', 'action' => 'view', $evaluacion['id'])); ?>
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
<div class="related">
	<h3><?php echo __(' Proentidads'); ?></h3>
	<?php if (!empty($proyecto['Proentidad'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Aporte'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Proyecto Id'); ?></th>
		<th><?php echo __('Entidad Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($proyecto['Proentidad'] as $proentidad): ?>
		<tr>
			<td><?php echo $proentidad['id']; ?></td>
			<td><?php echo $proentidad['aporte']; ?></td>
			<td><?php echo $proentidad['created']; ?></td>
			<td><?php echo $proentidad['modified']; ?></td>
			<td><?php echo $proentidad['proyecto_id']; ?></td>
			<td><?php echo $proentidad['entidad_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'proentidads', 'action' => 'view', $proentidad['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'proentidads', 'action' => 'edit', $proentidad['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'proentidads', 'action' => 'delete', $proentidad['id']), array(), __('Estas seguro de eliminar a # %s?', $proentidad['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Crear Proentidad'), array('controller' => 'proentidads', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __(' Proentregas'); ?></h3>
	<?php if (!empty($proyecto['Proentrega'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('DosEjemplares'); ?></th>
		<th><?php echo __('MedioMagnetico'); ?></th>
		<th><?php echo __('FichaResumen'); ?></th>
		<th><?php echo __('Adjunto'); ?></th>
		<th><?php echo __('Proyecto Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($proyecto['Proentrega'] as $proentrega): ?>
		<tr>
			<td><?php echo $proentrega['id']; ?></td>
			<td><?php echo $proentrega['fecha']; ?></td>
			<td><?php echo $proentrega['dosEjemplares']; ?></td>
			<td><?php echo $proentrega['medioMagnetico']; ?></td>
			<td><?php echo $proentrega['fichaResumen']; ?></td>
			<td><?php echo $proentrega['adjunto']; ?></td>
			<td><?php echo $proentrega['proyecto_id']; ?></td>
			<td><?php echo $proentrega['created']; ?></td>
			<td><?php echo $proentrega['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'proentregas', 'action' => 'view', $proentrega['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'proentregas', 'action' => 'edit', $proentrega['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'proentregas', 'action' => 'delete', $proentrega['id']), array(), __('Estas seguro de eliminar a # %s?', $proentrega['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Crear Proentrega'), array('controller' => 'proentregas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __(' Proinvestigadors'); ?></h3>
	<?php if (!empty($proyecto['Proinvestigador'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Proyecto Id'); ?></th>
		<th><?php echo __('Investigador Id'); ?></th>
		<th><?php echo __('HorasTrabajadas'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($proyecto['Proinvestigador'] as $proinvestigador): ?>
		<tr>
			<td><?php echo $proinvestigador['id']; ?></td>
			<td><?php echo $proinvestigador['proyecto_id']; ?></td>
			<td><?php echo $proinvestigador['investigador_id']; ?></td>
			<td><?php echo $proinvestigador['horasTrabajadas']; ?></td>
			<td><?php echo $proinvestigador['created']; ?></td>
			<td><?php echo $proinvestigador['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'proinvestigadors', 'action' => 'view', $proinvestigador['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'proinvestigadors', 'action' => 'edit', $proinvestigador['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'proinvestigadors', 'action' => 'delete', $proinvestigador['id']), array(), __('Estas seguro de eliminar a # %s?', $proinvestigador['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Crear Proinvestigador'), array('controller' => 'proinvestigadors', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __(' Publicaciones'); ?></h3>
	<?php if (!empty($proyecto['Publicacion'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Link'); ?></th>
		<th><?php echo __('Revista'); ?></th>
		<th><?php echo __('Proyecto Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($proyecto['Publicacion'] as $publicacion): ?>
		<tr>
			<td><?php echo $publicacion['id']; ?></td>
			<td><?php echo $publicacion['titulo']; ?></td>
			<td><?php echo $publicacion['fecha']; ?></td>
			<td><?php echo $publicacion['link']; ?></td>
			<td><?php echo $publicacion['revista']; ?></td>
			<td><?php echo $publicacion['proyecto_id']; ?></td>
			<td><?php echo $publicacion['created']; ?></td>
			<td><?php echo $publicacion['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Informacion'), array('controller' => 'publicacions', 'action' => 'view', $publicacion['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'publicacions', 'action' => 'edit', $publicacion['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'publicacions', 'action' => 'delete', $publicacion['id']), array(), __('Estas seguro de eliminar a # %s?', $publicacion['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Crear Publicacion'), array('controller' => 'publicacions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
