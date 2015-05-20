<div class="proinvestigadors view">
<h2><?php echo __('Proinvestigador'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($proinvestigador['Proinvestigador']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Proyecto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($proinvestigador['Proyecto']['id'], array('controller' => 'proyectos', 'action' => 'view', $proinvestigador['Proyecto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Investigador'); ?></dt>
		<dd>
			<?php echo $this->Html->link($proinvestigador['Investigador']['id'], array('controller' => 'investigadors', 'action' => 'view', $proinvestigador['Investigador']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('HorasTrabajadas'); ?></dt>
		<dd>
			<?php echo h($proinvestigador['Proinvestigador']['horasTrabajadas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($proinvestigador['Proinvestigador']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($proinvestigador['Proinvestigador']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Proinvestigador'), array('action' => 'edit', $proinvestigador['Proinvestigador']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Proinvestigador'), array('action' => 'delete', $proinvestigador['Proinvestigador']['id']), array(), __('Are you sure you want to delete # %s?', $proinvestigador['Proinvestigador']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Proinvestigadors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proinvestigador'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Investigadors'), array('controller' => 'investigadors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Investigador'), array('controller' => 'investigadors', 'action' => 'add')); ?> </li>
	</ul>
</div>
