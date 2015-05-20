<div class="conceptos form">
<?php echo $this->Form->create('Concepto'); ?>
	<fieldset>
		<legend><?php echo __('Editar Concepto'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Aceptar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Concepto.id')), array(), __('Estas seguro de eliminar a # %s?', $this->Form->value('Concepto.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listado Conceptos'), array('action' => 'index')); ?></li>
	</ul>
</div>
