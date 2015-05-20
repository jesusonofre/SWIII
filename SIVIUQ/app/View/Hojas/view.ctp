<div class="hojas view">
<h2><?php echo __('Hoja'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hoja['Hoja']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FechaNacimiento'); ?></dt>
		<dd>
			<?php echo h($hoja['Hoja']['fechaNacimiento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CiudadNacimiento'); ?></dt>
		<dd>
			<?php echo h($hoja['Hoja']['ciudadNacimiento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DeptoNacimiento'); ?></dt>
		<dd>
			<?php echo h($hoja['Hoja']['deptoNacimiento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($hoja['Hoja']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($hoja['Hoja']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($hoja['Hoja']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($hoja['Hoja']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hoja'), array('action' => 'edit', $hoja['Hoja']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hoja'), array('action' => 'delete', $hoja['Hoja']['id']), array(), __('Are you sure you want to delete # %s?', $hoja['Hoja']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hojas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hoja'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Educacions'), array('controller' => 'educacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Educacion'), array('controller' => 'educacions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Educacions'); ?></h3>
	<?php if (!empty($hoja['Educacion'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Institucion'); ?></th>
		<th><?php echo __('Ciudad'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Hoja Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($hoja['Educacion'] as $educacion): ?>
		<tr>
			<td><?php echo $educacion['id']; ?></td>
			<td><?php echo $educacion['titulo']; ?></td>
			<td><?php echo $educacion['institucion']; ?></td>
			<td><?php echo $educacion['ciudad']; ?></td>
			<td><?php echo $educacion['fecha']; ?></td>
			<td><?php echo $educacion['hoja_id']; ?></td>
			<td><?php echo $educacion['created']; ?></td>
			<td><?php echo $educacion['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'educacions', 'action' => 'view', $educacion['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'educacions', 'action' => 'edit', $educacion['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'educacions', 'action' => 'delete', $educacion['id']), array(), __('Are you sure you want to delete # %s?', $educacion['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Educacion'), array('controller' => 'educacions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Usuarios'); ?></h3>
	<?php if (!empty($hoja['Usuario'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Cedula'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Apellido'); ?></th>
		<th><?php echo __('Login'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Tipo'); ?></th>
		<th><?php echo __('Hoja Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($hoja['Usuario'] as $usuario): ?>
		<tr>
			<td><?php echo $usuario['cedula']; ?></td>
			<td><?php echo $usuario['nombre']; ?></td>
			<td><?php echo $usuario['apellido']; ?></td>
			<td><?php echo $usuario['login']; ?></td>
			<td><?php echo $usuario['password']; ?></td>
			<td><?php echo $usuario['tipo']; ?></td>
			<td><?php echo $usuario['hoja_id']; ?></td>
			<td><?php echo $usuario['created']; ?></td>
			<td><?php echo $usuario['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'usuarios', 'action' => 'view', $usuario['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'usuarios', 'action' => 'edit', $usuario['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'usuarios', 'action' => 'delete', $usuario['id']), array(), __('Are you sure you want to delete # %s?', $usuario['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
