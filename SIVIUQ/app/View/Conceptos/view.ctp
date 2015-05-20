<div class="conceptos view">
<h2><?php echo __('Concepto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($concepto['Concepto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($concepto['Concepto']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($concepto['Concepto']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($concepto['Concepto']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Concepto'), array('action' => 'edit', $concepto['Concepto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Concepto'), array('action' => 'delete', $concepto['Concepto']['id']), array(), __('Estas Seguro de Eliminar a # %s?', $concepto['Concepto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Conceptos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Concepto'), array('action' => 'add')); ?> </li>
	</ul>
</div>
