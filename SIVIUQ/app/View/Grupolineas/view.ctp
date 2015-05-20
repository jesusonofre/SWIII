<div class="grupolineas view">
<h2><?php echo __('Grupolinea'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($grupolinea['Grupolinea']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Linea'); ?></dt>
		<dd>
			<?php echo $this->Html->link($grupolinea['Linea']['id'], array('controller' => 'lineas', 'action' => 'view', $grupolinea['Linea']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grupo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($grupolinea['Grupo']['id'], array('controller' => 'grupos', 'action' => 'view', $grupolinea['Grupo']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Grupolinea'), array('action' => 'edit', $grupolinea['Grupolinea']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Grupolinea'), array('action' => 'delete', $grupolinea['Grupolinea']['id']), array(), __('Estas seguro de eliminar a # %s?', $grupolinea['Grupolinea']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listadp Grupolineas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Grupolinea'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Lineas'), array('controller' => 'lineas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Linea'), array('controller' => 'lineas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Grupos'), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Grupo'), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
	</ul>
</div>
