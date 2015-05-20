<div class="publicacions view">
<h2><?php echo __('Publicacion'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($publicacion['Publicacion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($publicacion['Publicacion']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($publicacion['Publicacion']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Link'); ?></dt>
		<dd>
			<?php echo h($publicacion['Publicacion']['link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Revista'); ?></dt>
		<dd>
			<?php echo h($publicacion['Publicacion']['revista']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Proyecto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($publicacion['Proyecto']['id'], array('controller' => 'proyectos', 'action' => 'view', $publicacion['Proyecto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creacion'); ?></dt>
		<dd>
			<?php echo h($publicacion['Publicacion']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificacion'); ?></dt>
		<dd>
			<?php echo h($publicacion['Publicacion']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Publicacion'), array('action' => 'edit', $publicacion['Publicacion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Publicacion'), array('action' => 'delete', $publicacion['Publicacion']['id']), array(), __('Estas seguro de eliminar a # %s?', $publicacion['Publicacion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Publicaciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Publicacion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
