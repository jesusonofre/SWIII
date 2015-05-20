<div class="lineas view">
<h2><?php echo __('Linea Investigacion '); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($linea['Linea']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($linea['Linea']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegistradoPor'); ?></dt>
		<dd>
			<?php echo h($linea['Linea']['registradoPor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creacion '); ?></dt>
		<dd>
			<?php echo h($linea['Linea']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificacion '); ?></dt>
		<dd>
			<?php echo h($linea['Linea']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Linea'), array('action' => 'edit', $linea['Linea']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Linea'), array('action' => 'delete', $linea['Linea']['id']), array(), __('Estas seguro de eliminar a # %s?', $linea['Linea']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Lineas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Linea'), array('action' => 'add')); ?> </li>
	</ul>
</div>
