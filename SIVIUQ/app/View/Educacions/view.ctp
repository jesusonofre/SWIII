<div class="educacions view">
<h2><?php echo __('Educacion'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($educacion['Educacion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($educacion['Educacion']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Institucion'); ?></dt>
		<dd>
			<?php echo h($educacion['Educacion']['institucion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ciudad'); ?></dt>
		<dd>
			<?php echo h($educacion['Educacion']['ciudad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($educacion['Educacion']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hoja'); ?></dt>
		<dd>
			<?php echo $this->Html->link($educacion['Hoja']['id'], array('controller' => 'hojas', 'action' => 'view', $educacion['Hoja']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creado'); ?></dt>
		<dd>
			<?php echo h($educacion['Educacion']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificado'); ?></dt>
		<dd>
			<?php echo h($educacion['Educacion']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Educacion'), array('action' => 'edit', $educacion['Educacion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Educacion'), array('action' => 'delete', $educacion['Educacion']['id']), array(), __('Estas seguro de Eliminar a # %s?', $educacion['Educacion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Educacioness'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Educacion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Hojas De Vida'), array('controller' => 'hojas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Hoja De Vida'), array('controller' => 'hojas', 'action' => 'add')); ?> </li>
	</ul>
</div>
