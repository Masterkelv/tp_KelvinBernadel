<div class="members form">
<?php echo $this->Form->create('Member'); ?>
	<fieldset>
		<legend><?php echo __('Edit Member'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('country_name');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('player_age');
		echo $this->Form->input('playing_name');
		echo $this->Form->input('email_name');
		echo $this->Form->input('date_registered');
		echo $this->Form->input('date_logon');
		echo $this->Form->input('other_details');
		echo $this->Form->input('visible');
		echo $this->Form->input('factions_id');
		echo $this->Form->input('Faction');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Member.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Member.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Members'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Factions'), array('controller' => 'factions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Factions'), array('controller' => 'factions', 'action' => 'add')); ?> </li>
	</ul>
</div>
