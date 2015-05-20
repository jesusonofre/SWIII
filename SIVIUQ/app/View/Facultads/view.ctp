<div class="facultads view">
<h2><?php echo __('Facultad'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($facultad['Facultad']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($facultad['Facultad']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($facultad['Facultad']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Decano'); ?></dt>
		<dd>
			<?php echo h($facultad['Facultad']['decano']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creado'); ?></dt>
		<dd>
			<?php echo h($facultad['Facultad']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificado'); ?></dt>
		<dd>
			<?php echo h($facultad['Facultad']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Facultad'), array('action' => 'edit', $facultad['Facultad']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Facultad'), array('action' => 'delete', $facultad['Facultad']['id']), array(), __('Estas seguro de eliminar a # %s?', $facultad['Facultad']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Facultades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Facultad'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Programas'), array('controller' => 'programas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Programa'), array('controller' => 'programas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __(' Programas'); ?></h3>
	<?php if (!empty($facultad['Programa'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Director'); ?></th>
		<th><?php echo __('Iniciales'); ?></th>
		<th><?php echo __('Facultad Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($facultad['Programa'] as $programa): ?>
		<tr>
			<td><?php echo $programa['id']; ?></td>
			<td><?php echo $programa['nombre']; ?></td>
			<td><?php echo $programa['director']; ?></td>
			<td><?php echo $programa['iniciales']; ?></td>
			<td><?php echo $programa['facultad_id']; ?></td>
			<td><?php echo $programa['created']; ?></td>
			<td><?php echo $programa['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'programas', 'action' => 'view', $programa['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'programas', 'action' => 'edit', $programa['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'programas', 'action' => 'delete', $programa['id']), array(), __('Estas seguro de eliminar a # %s?', $programa['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Crear Programa'), array('controller' => 'programas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
