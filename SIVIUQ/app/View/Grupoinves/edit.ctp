<div class="grupoinves form">
<?php echo $this->Form->create('Grupoinfe'); ?>
	<fieldset>
		<legend><?php echo __('Editar Grupo Investigacion '); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('invesigador_id');
		echo $this->Form->input('grupo_id');
		echo $this->Form->input('Representante');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Aceptar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Grupoinfe.id')), array(), __('Estas seguro de eliminar a # %s?', $this->Form->value('Grupoinfe.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listado Grupo Invest.'), array('action' => 'index')); ?></li>
	</ul>
</div>
