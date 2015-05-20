<div class="convocatorias view">
<h2><?php echo __('Convocatoria'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($convocatoria['Convocatoria']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($convocatoria['Convocatoria']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($convocatoria['Convocatoria']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Inicio'); ?></dt>
		<dd>
			<?php echo h($convocatoria['Convocatoria']['fechaInicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Fin'); ?></dt>
		<dd>
			<?php echo h($convocatoria['Convocatoria']['fechaFin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registrado Por'); ?></dt>
		<dd>
			<?php echo h($convocatoria['Convocatoria']['registradoPor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creado'); ?></dt>
		<dd>
			<?php echo h($convocatoria['Convocatoria']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificado'); ?></dt>
		<dd>
			<?php echo h($convocatoria['Convocatoria']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Convocatoria'), array('action' => 'edit', $convocatoria['Convocatoria']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Convocatoria'), array('action' => 'delete', $convocatoria['Convocatoria']['id']), array(), __('Estas seguro de eliminar a # %s?', $convocatoria['Convocatoria']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Convocatorias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Convocatoria'), array('action' => 'add')); ?> </li>
	</ul>
</div>
