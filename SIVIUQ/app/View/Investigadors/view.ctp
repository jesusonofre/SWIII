<div class="investigadors view">
<h2><?php echo __('Investigador'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($investigador['Investigador']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cedula'); ?></dt>
		<dd>
			<?php echo h($investigador['Investigador']['cedula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($investigador['Investigador']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido'); ?></dt>
		<dd>
			<?php echo h($investigador['Investigador']['apellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correo'); ?></dt>
		<dd>
			<?php echo h($investigador['Investigador']['correo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($investigador['Investigador']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($investigador['Usuario'][''], array('controller' => 'usuarios', 'action' => 'view', $investigador['Usuario']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Programa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($investigador['Programa']['id'], array('controller' => 'programas', 'action' => 'view', $investigador['Programa']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creacion'); ?></dt>
		<dd>
			<?php echo h($investigador['Investigador']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificacion'); ?></dt>
		<dd>
			<?php echo h($investigador['Investigador']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Investigador'), array('action' => 'edit', $investigador['Investigador']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Investigador'), array('action' => 'delete', $investigador['Investigador']['id']), array(), __('Estas seguro de eliminar a # %s?', $investigador['Investigador']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Investigadores'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Investigador'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Programas'), array('controller' => 'programas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Programa'), array('controller' => 'programas', 'action' => 'add')); ?> </li>
	</ul>
</div>
