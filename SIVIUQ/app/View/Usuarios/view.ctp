<div class="usuarios view">
<h2><?php echo __('Usuario'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['apellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Login'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['login']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['tipo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hoja'); ?></dt>
		<dd>
			<?php echo $this->Html->link($usuario['Hoja']['id'], array('controller' => 'hojas', 'action' => 'view', $usuario['Hoja']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creacion'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificacion'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Usuario'), array('action' => 'edit', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Usuario'), array('action' => 'delete', $usuario['Usuario']['id']), array(), __('Estas seguro de eliminar  # %s?', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Usuarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Usuario'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Hojas De Vida'), array('controller' => 'hojas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Hoja'), array('controller' => 'hojas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Investigadores'), array('controller' => 'investigadors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Investigador'), array('controller' => 'investigadors', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Investigadores'); ?></h3>
	<?php if (!empty($usuario['Investigador'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cedula'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Apellido'); ?></th>
		<th><?php echo __('Correo'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th><?php echo __('Programa Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($usuario['Investigador'] as $investigador): ?>
		<tr>
			<td><?php echo $investigador['id']; ?></td>
			<td><?php echo $investigador['cedula']; ?></td>
			<td><?php echo $investigador['nombre']; ?></td>
			<td><?php echo $investigador['apellido']; ?></td>
			<td><?php echo $investigador['correo']; ?></td>
			<td><?php echo $investigador['telefono']; ?></td>
			<td><?php echo $investigador['usuario_id']; ?></td>
			<td><?php echo $investigador['programa_id']; ?></td>
			<td><?php echo $investigador['created']; ?></td>
			<td><?php echo $investigador['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Informacion'), array('controller' => 'investigadors', 'action' => 'view', $investigador['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'investigadors', 'action' => 'edit', $investigador['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'investigadors', 'action' => 'delete', $investigador['id']), array(), __('Estas seguro de eliminar a # %s?', $investigador['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Crear Investigador'), array('controller' => 'investigadors', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
