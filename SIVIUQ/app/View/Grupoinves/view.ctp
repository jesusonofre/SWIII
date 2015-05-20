<div class="grupoinves view">
<h2><?php echo __('Grupo Investigacion'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($grupoinfe['Grupoinfe']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Invesigador'); ?></dt>
		<dd>
			<?php echo h($grupoinfe['Grupoinfe']['invesigador_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grupo'); ?></dt>
		<dd>
			<?php echo h($grupoinfe['Grupoinfe']['grupo_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Representante'); ?></dt>
		<dd>
			<?php echo h($grupoinfe['Grupoinfe']['Representante']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creacion '); ?></dt>
		<dd>
			<?php echo h($grupoinfe['Grupoinfe']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificacion '); ?></dt>
		<dd>
			<?php echo h($grupoinfe['Grupoinfe']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Grupo Invest.'), array('action' => 'edit', $grupoinfe['Grupoinfe']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Grupo Invest.'), array('action' => 'delete', $grupoinfe['Grupoinfe']['id']), array(), __('Are you sure you want to delete # %s?', $grupoinfe['Grupoinfe']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Grupo Invest.'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Grupo Invest'), array('action' => 'add')); ?> </li>
	</ul>
</div>
