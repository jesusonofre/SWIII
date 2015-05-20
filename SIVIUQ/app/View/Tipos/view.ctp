<div class="tipos view">
<h2><?php echo __('Tipo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tipo['Tipo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($tipo['Tipo']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($tipo['Tipo']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($tipo['Tipo']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Tipo'), array('action' => 'edit', $tipo['Tipo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Tipo'), array('action' => 'delete', $tipo['Tipo']['id']), array(), __('Estas seguro de eliminar  # %s?', $tipo['Tipo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Tipos de Conceptos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Tipo'), array('action' => 'add')); ?> </li>
	</ul>
</div>
