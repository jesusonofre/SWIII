<div class="programas view">
<h2><?php echo __('Programa'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($programa['Programa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($programa['Programa']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Director'); ?></dt>
		<dd>
			<?php echo h($programa['Programa']['director']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Iniciales'); ?></dt>
		<dd>
			<?php echo h($programa['Programa']['iniciales']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Facultad'); ?></dt>
		<dd>
			<?php echo $this->Html->link($programa['Facultad']['id'], array('controller' => 'facultads', 'action' => 'view', $programa['Facultad']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($programa['Programa']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($programa['Programa']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Programa'), array('action' => 'edit', $programa['Programa']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Programa'), array('action' => 'delete', $programa['Programa']['id']), array(), __('Estas seguro de eliminar a # %s?', $programa['Programa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Programas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Programa'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Facultads'), array('controller' => 'facultads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Facultad'), array('controller' => 'facultads', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Grupos'), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Grupo'), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Investigadores'), array('controller' => 'investigadors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Investigador'), array('controller' => 'investigadors', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __(' Grupos De Investigacion '); ?></h3>
	<?php if (!empty($programa['Grupo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('RegistradoPor'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Categoria'); ?></th>
		<th><?php echo __('Programa Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($programa['Grupo'] as $grupo): ?>
		<tr>
			<td><?php echo $grupo['id']; ?></td>
			<td><?php echo $grupo['nombre']; ?></td>
			<td><?php echo $grupo['registradoPor']; ?></td>
			<td><?php echo $grupo['email']; ?></td>
			<td><?php echo $grupo['categoria']; ?></td>
			<td><?php echo $grupo['programa_id']; ?></td>
			<td><?php echo $grupo['created']; ?></td>
			<td><?php echo $grupo['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Detalle'), array('controller' => 'grupos', 'action' => 'view', $grupo['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'grupos', 'action' => 'edit', $grupo['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'grupos', 'action' => 'delete', $grupo['id']), array(), __('Estas seguro de eliminar a # %s?', $grupo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Crear Grupo Investigacion'), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Investigadores'); ?></h3>
	<?php if (!empty($programa['Investigador'])): ?>
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
	<?php foreach ($programa['Investigador'] as $investigador): ?>
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
