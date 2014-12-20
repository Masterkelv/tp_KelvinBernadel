<div class="members index">
	<h2><?php echo __('Members'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table table-bordered">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('country_name'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('player_age'); ?></th>
			<th><?php echo $this->Paginator->sort('playing_name'); ?></th>
			<th><?php echo $this->Paginator->sort('email_name'); ?></th>
			<th><?php echo $this->Paginator->sort('date_registered'); ?></th>
			<th><?php echo $this->Paginator->sort('date_logon'); ?></th>
			<th><?php echo $this->Paginator->sort('other_details'); ?></th>
			<th><?php echo $this->Paginator->sort('visible'); ?></th>
			<th><?php echo $this->Paginator->sort('factions_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($members as $member): ?>
	<tr>
		<td><?php echo h($member['Member']['id']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['country_name']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['player_age']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['playing_name']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['email_name']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['date_registered']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['date_logon']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['other_details']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['visible']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($member['Factions']['id'], array('controller' => 'factions', 'action' => 'view', $member['Factions']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $member['Member']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $member['Member']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $member['Member']['id']), null, __('Are you sure you want to delete # %s?', $member['Member']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Member'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Factions'), array('controller' => 'factions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Factions'), array('controller' => 'factions', 'action' => 'add')); ?> </li>
	</ul>
</div>
