<div class="factions form">
<?php echo $this->Form->create('Faction'); ?>
	<fieldset>
		<legend><?php echo __('Add Faction'); ?></legend>
	<?php
		echo $this->Form->input('nom');
		echo $this->Form->input('members_id');
		echo $this->Form->input('description');
		echo $this->Form->input('Member');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Factions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Members'), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>
