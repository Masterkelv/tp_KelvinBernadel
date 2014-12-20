<div class="ressources view">
<h2><?php echo __('Ressource'); ?></h2>
	<dl>
		<dt><?php echo __('Members'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ressource['Members']['id'], array('controller' => 'members', 'action' => 'view', $ressource['Members']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ressource['Ressource']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Res Name'); ?></dt>
		<dd>
			<?php echo h($ressource['Ressource']['res_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Res Amount'); ?></dt>
		<dd>
			<?php echo h($ressource['Ressource']['res_amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Res Otherdetails'); ?></dt>
		<dd>
			<?php echo h($ressource['Ressource']['res_otherdetails']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visible'); ?></dt>
		<dd>
			<?php echo h($ressource['Ressource']['visible']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ressource'), array('action' => 'edit', $ressource['Ressource']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ressource'), array('action' => 'delete', $ressource['Ressource']['id']), null, __('Are you sure you want to delete # %s?', $ressource['Ressource']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ressources'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ressource'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Members'), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>
