<div class="proentidads view">
<h2><?php echo __('Proentidad'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($proentidad['Proentidad']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aporte'); ?></dt>
		<dd>
			<?php echo h($proentidad['Proentidad']['aporte']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($proentidad['Proentidad']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($proentidad['Proentidad']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Proyecto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($proentidad['Proyecto']['id'], array('controller' => 'proyectos', 'action' => 'view', $proentidad['Proyecto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entidad'); ?></dt>
		<dd>
			<?php echo $this->Html->link($proentidad['Entidad']['id'], array('controller' => 'entidads', 'action' => 'view', $proentidad['Entidad']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Proentidad'), array('action' => 'edit', $proentidad['Proentidad']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Proentidad'), array('action' => 'delete', $proentidad['Proentidad']['id']), array(), __('Estas seguro de eliminar a # %s?', $proentidad['Proentidad']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Proentidads'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Proentidad'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Entidads'), array('controller' => 'entidads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Entidad'), array('controller' => 'entidads', 'action' => 'add')); ?> </li>
	</ul>
</div>
