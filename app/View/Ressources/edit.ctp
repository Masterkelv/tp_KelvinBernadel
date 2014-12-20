<div class="ressources form">
<?php echo $this->Form->create('Ressource'); ?>
	<fieldset>
		<legend><?php echo __('Edit Ressource'); ?></legend>
	<?php
		echo $this->Form->input('members_id');
		echo $this->Form->input('id');
		echo $this->Form->input('res_name');
		echo $this->Form->input('res_amount');
		echo $this->Form->input('res_otherdetails');
		echo $this->Form->input('visible');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Ressource.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Ressource.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Ressources'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Members'), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>
