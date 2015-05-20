<div class="proentregas view">
<h2><?php echo __('Proentrega'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($proentrega['Proentrega']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($proentrega['Proentrega']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DosEjemplares'); ?></dt>
		<dd>
			<?php echo h($proentrega['Proentrega']['dosEjemplares']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MedioMagnetico'); ?></dt>
		<dd>
			<?php echo h($proentrega['Proentrega']['medioMagnetico']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FichaResumen'); ?></dt>
		<dd>
			<?php echo h($proentrega['Proentrega']['fichaResumen']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adjunto'); ?></dt>
		<dd>
			<?php echo h($proentrega['Proentrega']['adjunto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Proyecto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($proentrega['Proyecto']['id'], array('controller' => 'proyectos', 'action' => 'view', $proentrega['Proyecto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($proentrega['Proentrega']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($proentrega['Proentrega']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Proentrega'), array('action' => 'edit', $proentrega['Proentrega']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Proentrega'), array('action' => 'delete', $proentrega['Proentrega']['id']), array(), __('Estas seguro de eliminar a # %s?', $proentrega['Proentrega']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Proentregas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Proentrega'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
