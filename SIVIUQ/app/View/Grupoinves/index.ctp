<div class="grupoinves index">
	<h2><?php echo __('Grupo Investigacion '); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('invesigador_id'); ?></th>
			<th><?php echo $this->Paginator->sort('grupo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('Representante'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($grupoinves as $grupoinfe): ?>
	<tr>
		<td><?php echo h($grupoinfe['Grupoinfe']['id']); ?>&nbsp;</td>
		<td><?php echo h($grupoinfe['Grupoinfe']['invesigador_id']); ?>&nbsp;</td>
		<td><?php echo h($grupoinfe['Grupoinfe']['grupo_id']); ?>&nbsp;</td>
		<td><?php echo h($grupoinfe['Grupoinfe']['Representante']); ?>&nbsp;</td>
		<td><?php echo h($grupoinfe['Grupoinfe']['created']); ?>&nbsp;</td>
		<td><?php echo h($grupoinfe['Grupoinfe']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Detalle'), array('action' => 'view', $grupoinfe['Grupoinfe']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $grupoinfe['Grupoinfe']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $grupoinfe['Grupoinfe']['id']), array(), __('Estas seguro de eliminar a # %s?', $grupoinfe['Grupoinfe']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina {:page} de {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Crear Grupo Invest.'), array('action' => 'add')); ?></li>
	</ul>
</div>
